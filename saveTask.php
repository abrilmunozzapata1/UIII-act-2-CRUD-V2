<?php

include('db.php');

if (isset($_POST['saveTask'])) {
  $nombre = $_POST['nombre'];
  $categoria = $_POST['categoria'];
  $precio = $_POST['precio'];
  $descripcion = $_POST['descripcion'];
  $material = $_POST['material'];
  $talla = $_POST['talla'];
  $piedra = $_POST['piedra'];
  $query = "INSERT INTO producto(nombre, categoria,precio, descripcion,material, talla,piedra) VALUES ('$nombre', '$categoria','$precio', '$descripcion','$material', '$talla','$piedra')";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Guardado Correctamente';
  $_SESSION['message_type'] = 'success';
  header('Location: index.php');

}

?>