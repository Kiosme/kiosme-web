<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    


<!DOCTYPE html>
<html lang="es">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style2.css">
    <meta charset="UTF-8">
    <style>
        body{
            background: url("fondo2.jpg");
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
    <link rel="icon" type="image/x-icon" href="favicon.ico">
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
    <form action="Kiosme/concect.php" method="post">
        <div class="center" style="background-color: white; border-radius: 10px;">
            <div class="bg-light p-3" style="width: 650px;">

                <label for="id2">ID:</label>
                <input id="id" type="number" name="id" placeholder="ID" min="1" step="1"><br>

                <label for="nombre">Producto:</label>
                <input id="nombre_px" type="text" name="nombre_px" placeholder="Nombre del producto"><br>
    
                <label for="cant">Cantidad:</label>
                <input id="cant_px" type="number" name="cant_px" placeholder="Cantidad">
                
                <button class="btn btn-primary" onclick="crear_px()">Añadir</button>
            </div>
        </div>
    </form>
    <br><br>

    <script>
     $(document).ready(function(){
        displayData();
    });
    // display function
    function displayData(){
        var displayData="true";
        $.ajax({
            url:"mostrar.php",
            type:'post',
            data:{
                displaySend:displayData
            },
            success:function(data,status){
            $('#displayDataTable').html(data);
            }
        });
    }
        
    </script>
    
</body>
</html>