<?php
include("db.php");
$title = '';
$description= '';

if  (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "SELECT * FROM producto WHERE id=$id";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $nombre = $row['nombre'];
    $categoria = $row['categoria'];
    $precio = $row['precio'];
    $descripcion = $row['descripcion'];
    $material = $row['material'];
    $talla = $row['talla'];
    $piedra = $row['piedra'];
  }
}

if (isset($_POST['update'])) {
  $id = $_GET['id'];
  $nombre= $_POST['nombre'];
  $categoria = $_POST['categoria'];
  $precio = $_POST['precio'];
  $descripcion= $_POST['descripcion'];
  $material = $_POST['material'];
  $talla = $_POST['talla'];
  $piedra= $_POST['piedra'];

  $query = "UPDATE producto set nombre = '$nombre', categoria = '$categoria',  precio = '$precio', descripcion = '$descripcion',  material = '$material', talla = '$talla',  piedra = '$piedra' WHERE id=$id";
  mysqli_query($conn, $query);
  $_SESSION['message'] = 'Actualizado con Exito';
  $_SESSION['message_type'] = 'warning';
  header('Location: index.php');
}

?>
<?php include('includes/header.php'); ?>
<div class="container p-4">
  <div class="row">
    <div class="col-md-4 mx-auto">
      <div class="card card-body">
      <form action="edit.php?id=<?php echo $_GET['id']; ?>" method="POST">
        <div class="form-group">
          <input name="nombre" type="text" class="form-control" value="<?php echo $nombre; ?>" placeholder="Update nombre">
        </div>

          <div class="form-group">
          <input name="categoria" type="text" class="form-control" value="<?php echo $categoria; ?>" placeholder="Update categoria">
        </div>

        <div class="form-group">
          <input name="precio" type="text" class="form-control" value="<?php echo $precio; ?>" placeholder="Update precio">
        </div>

        <div class="form-group">
          <input name="descripcion" type="text" class="form-control" value="<?php echo $descripcion; ?>" placeholder="Update descripcion">
        </div>

        <div class="form-group">
          <input name="material" type="text" class="form-control" value="<?php echo $material; ?>" placeholder="Update material">
        </div>

        <div class="form-group">
          <input name="talla" type="text" class="form-control" value="<?php echo $talla; ?>" placeholder="Update talla">
        </div>

        <div class="form-group">
          <input name="piedra" type="text" class="form-control" value="<?php echo $piedra; ?>" placeholder="Update piedra">
        </div>
        <button class="btn-success" name="update">
          actualizar
</button>
      </form>
      </div>
    </div>
  </div>
</div>
<?php include('includes/footer.php'); ?>