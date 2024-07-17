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
}

  $sql = "INSERT INTO tienda(id, nombre_px, cant_px)
  VALUES ('".$id."', '".$nombre_px."', '".$cant_px."')";
  
?>