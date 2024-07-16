<?php
include 'concect.php';

extract($_POST);

if(isset($_POST["id"]) && isset($_POST["nombre_px"]) && isset($_POST["cant_px"])){

    $sql="insert into `tienda` (id,nombre_px,cant_px) values ('$id','$nombre_px','$cant_px')";

    $result=mysqli_query($con,$sql);
}



?>