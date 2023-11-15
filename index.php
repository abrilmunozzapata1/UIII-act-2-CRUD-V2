<?php include("db.php"); ?>

<?php include('includes/header.php'); ?>

<main class="container p-4">
  <div class="row">
    <div class="col-md-4">
      <!-- MENSAGES -->

      <?php if (isset($_SESSION['message'])) { ?>
      <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
        <?= $_SESSION['message']?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <?php session_unset(); } ?>

      <!-- ADD TASK FORM -->
      <div class="card card-body">
        <form action="saveTask.php" method="POST">
          <div class="form-group">
            <input type="text" name="nombre" class="form-control" placeholder="nombre" autofocus>
          </div>
          
          <div class="form-group">
            <input type="text" name="categoria" class="form-control" placeholder="categoria" autofocus>
          </div>

          <div class="form-group">
            <input type="text" name="precio" class="form-control" placeholder="precio" autofocus>
          </div>

          <div class="form-group">
            <input type="text" name="descripcion" class="form-control" placeholder="descripcion" autofocus>
          </div>

          <div class="form-group">
            <input type="text" name="material" class="form-control" placeholder="material" autofocus>
          </div>

          <div class="form-group">
            <input type="text" name="talla" class="form-control" placeholder="talla" autofocus>
          </div>

          <div class="form-group">
            <input type="text" name="piedra" class="form-control" placeholder="piedra" autofocus>
          </div>

         
          <input type="submit" name="saveTask" class="btn btn-success btn-block" value="Guardar">
        </form>
      </div>
    </div>
    <div class="col-md-8">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>id</th>
            <th>Nombre</th>
            <th>categoria</th>
            <th>precio</th>
            <th>descripcion</th>
            <th>material</th>
            <th>talla</th>
            <th>piedra</th>
            <th>Accion</th>
          </tr>
        </thead>
        <tbody>

          <?php
          $query = "SELECT * FROM producto";
          $result_tasks = mysqli_query($conn, $query);    

          while($row = mysqli_fetch_assoc($result_tasks)) { ?>
          <tr>
          <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['nombre']; ?></td>
            <td><?php echo $row['categoria']; ?></td>
            <td><?php echo $row['precio']; ?></td>
            <td><?php echo $row['descripcion']; ?></td>
            <td><?php echo $row['material']; ?></td>
            <td><?php echo $row['talla']; ?></td>
            <td><?php echo $row['piedra']; ?></td>
            <td>
              <a href="edit.php?id=<?php echo $row['id']?>" class="btn btn-secondary">
                <i class="fas fa-marker"></i>
              </a>
              <a href="deleteTask.php?id=<?php echo $row['id']?>" class="btn btn-danger">
                <i class="far fa-trash-alt"></i>
              </a>
            </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</main>

<?php include('includes/footer.php'); ?>