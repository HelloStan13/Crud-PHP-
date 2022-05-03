<?php
  include('db.php');
  if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "SELECT * FROM task WHERE id = $id";
    $result = mysqli_query($connection, $query);
    if(mysqli_num_rows($result) == 1){
      $row = mysqli_fetch_array($result);
      $title = $row['title'];
      $description = $row['description'];
      $responsible = $row['responsible'];
    }
    if(isset($_POST['update'])){
      $id = $_GET['id'];
      $title = $_POST['title'];
      $description = $_POST['description'];
      $responsible = $_POST['responsible'];
      $query = "UPDATE task set title = '$title', description = '$description', responsible = '$responsible' WHERE id = $id";
      mysqli_query($connection, $query);
      $_SESSION['message'] = 'Tarea actualizada!';
      $_SESSION['message_type'] = 'warning';
      header('Location: index.php');
    }
  }
?>
<?php include('includes/head.php')?>
<div class="container p-4">
  <div class="row">
    <div class="col-md-4 mx-auto">
      <div class="card card-body">
        <h5 class="mb-4">Actualizar tarea</h5>
        <form action="edit_task.php?id=<?php echo $_GET['id']?>" method="POST">
          <div class="mb-4">
            <input type="text" name="title" value="<?php echo $title?>" class="form-control" placeholder="Titulo">
          </div>
          <div class="mb-4">
            <textarea name="description" rows="2" class="form-control" placeholder="Update Description"><?php echo $description?></textarea>
          </div>
          <div class="mb-3">
          <input type="text" name="responsible" class="form-control" placeholder="Ingrese Responsable" value="Adryan Ynfante"  autofocus>
          </div>
          <button class="btn btn-success" name="update">Actualizar</button>
        </form>
      </div>
    </div>
  </div>
</div>

<?php include('includes/footer.php')?>
