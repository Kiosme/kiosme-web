<?php
include 'Kiosme\read.php';
if(isset($_POST['displaySend'])){
    $table='<table class="table table-striped" id="add_tl">
    <thead class="thead-dark">
        <tr>
            <th>ID</th>
            <th>Producto</th>
            <th>Cantidad</th>
        </tr>
      </thead>';
      $sql="SELECT * FROM tienda";
      $result=mysqli_query($con,$sql);
      $number=1;
      while($row=mysqli_fetch_assoc($result)){
          $id=$row['id'];
          $nombre_px=$row['nombre_px'];
          $cant_px=$row['cant_px'];
          $table.='<tr>
          <td scope="row">'.$number.'</td>
          <td>'.$id.'</td>
          <td>'.$nombre_px.'</td>
          <td>'.$cant_px.'</td>
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
