<!DOCTYPE html>
<html lang="es">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style2.css">
    <meta charset="UTF-8">
    <style>
        body{
            background: url("fondos/fondo2.jpg");
            background-size: cover;
            background-position: center;
            background-color: rgb(15, 155, 236);
        }
        table, th, td,tr {
            border: 1px solid;
        }
        table{
            width: 100%;
        }
        .center {
        margin: auto;
        width: 50%;
        padding: 10px;
        }
    </style>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="Javascript/programa.js"></script>
    <title>Kiosme | Inventario</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"> 
    <link rel="icon" type="image/x-icon" href="favicon/favicon.ico">
</head>
<body>
    <div class="bg-primary p-3">
        <H1 style="text-align: center; text-decoration: underline;">Inventario</H1>
        <h4 style="text-align: center;">Organice los productos o suministros</h4>
    </div>
    <br><br>
    <!-- El siguiente form inserta datos en tabla "tienda" esperando la siguiente estrucutura:
     id = INT11 PRIMARY
     nombre_px = VARCHAR50
     cant_px = INT11 -->
    <form action="Kiosme/insertar.php" method="post">
        <div class="center" style="background-color: white; border-radius: 10px;">
            <div class="bg-light p-3" style="width: 650px;">

                <label for="id2">ID:</label>
                <input id="id" type="number" name="id" placeholder="ID" min="1" step="1"><br>

                <label for="nombre">Producto:</label>
                <input id="nombre_px" type="text" name="nombre_px" placeholder="Nombre del producto"><br>
    
                <label for="cant">Cantidad:</label>
                <input id="cant_px" type="number" name="cant_px" placeholder="Cantidad">
                
                <button class="btn btn-primary" onclick="crear_px()" class="btn btn-dark my-3" data-target="#completeModal">Añadir</button>
            </div>
            
        </div>
    </form>
    <br><br>

    <div class="center" style="background-color: white; border-radius: 10px;">
        <div id="displayDataTable"></div> 
    </div>


<!--Update modal-->
<div class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" 
     aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Actualizar</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="updatename">Nombre producto</label>
                            <input type="text" class="form-control" id="updatename" 
                            placeholder="Ingresa el Nombre del producto" name="updatename">
                        </div>
                        <div class="form-group">
                            <label for="updatequantity">cantidad</label>
                            <input type="number" class="form-control" id="updatequantity" 
                            placeholder="Ingresa tu cantidad"name="updatequantity">
                        </div>
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-dark" onclick="updateDetails()">Actualizar</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                        <input type="hidden" id="hiddendata">
                    </div>
                </div>
            </div>
        </div>

    <div class="container my-3">
            <div id="displayDataTable"></div> 
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajaxs/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>


    <script>
        $(document).ready(function(){
            displayData();
        });
            // display function
            function displayData(){
                var displayData="true";
                $.ajax({
                    url:"Kiosme/read.php",
                    type:'post',
                    data:{
                        displaySend:displayData
                    },
                    success:function(data,status){
                    $('#displayDataTable').html(data);
                    }
                });
            }

        //Eliminar Guardados
        function DeleteUser(deleteid){
            $.ajax({
                url:"Kiosme/delete.php",
                type:'post',
                data:{
                    deletesend:deleteid
                },
                success:function(data,status){
                    displayData();
                }
            });
            }

        // Update de las funciones
        function GetDetails(updateid){
            $('#hiddendata').val(updateid);

            $.post("Kiosme/update.php",{updateid:updateid},function(data,status){
                var userid=JSON.parse(data);
                $('#updatename').val(userid.nombre_px);
                $('#updatequantity').val(userid.cant_px);

            });

            $('#updateModal').modal("show");
        }
        //funcion para actualizar evento onclick 
        function updateDetails(){
            var updatename=$('#updatename').val();
            var updateemail=$('#updatequantity').val();
            var hiddendata=$('#hiddendata').val();

            console.log("MODIFICAR")
            $.ajax({
                    url:"Kiosme/update.php",
                    type:'post',
                    data:{
                        updatename:updatename,
                        updatequantity:updatequantity,    
                    },
                    success:function(data,status){
                        $('#updateModal').modal('hide');
                        displayData();
                    }
            });

        }
    </script>
    
</body>
</html>
