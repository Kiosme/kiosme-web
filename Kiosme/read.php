<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kiosme";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, nombre_px, cant_px FROM tienda";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo '<table class="table table-striped" id="add_tl">
    <thead class="thead-dark">
        <tr>
            <th>ID</th>
            <th>Producto</th>
            <th>Cantidad</th>
            <th>Opciones</th>
        </tr>
      </thead>';
    echo '<tr>
          <td>'. $row["id"]. '</td>
          <td>'. $row["nombre_px"].'</td>
          <td>'. $row["cant_px"].'</td>
          <td>
          <button class="btn btn-dark" onclick="GetDetails('.$row["id"].')">Update</button>
          <button class="btn btn-danger" onclick="DeleteUser('.$row["id"].')">Delete</button>
          </td>
          </tr>';
  }
} else {
  echo "0 results";
}

$conn->close();

?>