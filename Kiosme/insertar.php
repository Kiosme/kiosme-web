<?php
 $servername = "localhost";
 $username = "root";
 $password = "";
 $database = "kiosme";
        
 $id = $_POST["id"];
 $nombre_px = $_POST["nombre_px"];
 $cant_px = $_POST["cant_px"];
       

// Create connection
$conn = new mysqli($servername, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
  echo "mal error";
}
if(isset($_POST['id']) && isset($_POST['nombre_px']) && isset($_POST['cant_px'])){
    $sql = "INSERT INTO tienda(id, nombre_px, cant_px)
        VALUES ('".$id."', '".$nombre_px."', '".$cant_px."')";
   $result = $conn->query($sql);
   //echo "Datos ingrsados correctanente";
}
$conn->close();
echo "<script>alert('Datos Ingresados Correctamente');</script>";
echo "<script>url:'Kiosme/inventario.html';</script>";


?>