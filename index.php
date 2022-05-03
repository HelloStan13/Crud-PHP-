<?php include('db.php') ?>
<?php include('includes/head.php') ?>

<div class="container p-4">
  <div class="row">
    <div class="col-md-4">
      <!-- alert width php -->
      <?php if(isset($_SESSION['message']) ){?>
        <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
          <?= $_SESSION['message']?>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      <?php session_unset();}?>
      <!-- card -->
      <div class="card card-body mb-3">
        <h5 class="mb-3">Agrega tu tarea</h5>
        <form action="save_task.php" method="POST">
          <div class="mb-3">
            <input type="text" name="title" class="form-control" placeholder="Ingrese titulo" autofocus>
          </div>
          <div class="mb-3">
            <textarea name="description" rows="2" class="form-control" placeholder="Ingrese descripción"></textarea>
          </div>
          <div class="mb-3">
          <input type="text" name="responsible" class="form-control" placeholder="Ingrese Responsable" value="Adryan Ynfante" readonly autofocus>
          </div>
          <input type="submit" value="Guardar tarea" class="btn btn-primary btn-block" name="save_task">
        </form>
      </div>
    </div>
    <div class="col-md-8">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>Titulo</th>
              <th>Descripción</th>
              <th>Responsable</th>
              <th>Fecha creación</th>
              <th>Acciones</th>
            </tr>
          </thead>
          <tbody>
            <?php
              $query = "SELECT * FROM task";
              $results_task = mysqli_query($connection, $query);
              while($row = mysqli_fetch_array($results_task)){ ?>
                <tr>
                  <td><?php echo $row['title']?></td>
                  <td><?php echo $row['description']?></td>
                  <td><?php echo $row['responsible']?></td>
                  <td><?php echo $row['created_at']?></td>
                  <td>
                    <a class="btn btn-secondary" href="edit_task.php?id=<?php echo $row['id']?>">
                    <i class="fas fa-marker"></i>
                    </a>
                    <a class="btn btn-danger" href="delete_task.php?id=<?php echo $row['id']?>">
                    <i class="fas fa-trash-alt"></i>
                    </a>

                  </td>
                </tr>
              <?php } ?>
          </tbody>
        </table>
    </div>
  </div>
</div>


<?php include('includes/footer.php') ?>


  