<?php
include 'concect.php';

if(isset($_POST['deletesend'])){
    $unique=$_POST['deletesend'];

    $sql="delete from `tienda` where id=$unique";
    $result=mysqli_query($conn,$sql);
}

?>