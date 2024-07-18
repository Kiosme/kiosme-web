<?php 
include 'concect.php';
extract($_POST);
if(isset($_POST['updateid'])){
    $user_id=$_POST['updateid'];

    $sql="Select * from `tienda` where id=$user_id";
    $result=mysqli_query($conn,$sql);
    $response=array();
    while($row=mysqli_fetch_assoc($result)){
       $response=$row; 
    }
    echo json_encode($response);
}else{
    $response['status']=200;
    $response['message']="Invalid or data not found";
}


//Update de la Query

if(isset($_POST['hiddendata'])){
    $uniqueid=$_POST['hiddendata'];
    $name=$_POST['nombre_px'];
    $email=$_POST['cant_px'];


    $sql="update `tienda` set name='$name',email='$email' where id= $uniqueid";

    $result=mysqli_query($conn,$sql);

}



?>