<?php
include 'concect.php';
if(isset($_POST['displaySend'])){
    $table='<table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">Sl no</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
      </tr>
      </thead>';
      $sql="Select * from `crud`";
      $result=mysqli_query($con,$sql);
      $number=1;
      while($row=mysqli_fetch_assoc($result)){
          $id=$row['id'];
          $name=$row['nombre_px'];
          $email=$row['cant_px'];
          $table.='<tr>
          <td scope="row">'.$number.'</td>
          <td>'.$name.'</td>
          <td>'.$email.'</td>
          <td>'.$mobile.'</td>
          <td>'.$place.'</td>
          <td>
          <button class="btn btn-dark" onclick="GetDetails('.$id.')">Update</button>
          <button class="btn btn-danger" onclick="DeleteUser('.$id.')">Delete</button>
          </td>
          </tr>';
         $number++; 
      } 
      $table.='</table>';
      echo $table;

}


?>
