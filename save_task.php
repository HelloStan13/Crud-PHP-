<?php
include('db.php');
if(isset($_POST['save_task'])){
  $title = $_POST['title'];
  $description = $_POST['description'];
  $responsible = $_POST['responsible'];
  $query = "INSERT INTO task(title, description, responsible) VALUES ('$title', '$description', '$responsible')";
  $result = mysqli_query($connection, $query);
  if(!$result){
    die('Consulta fallida');
  }
  $_SESSION['message'] = 'Tarea guardada correctamente';
  $_SESSION['message_type'] = 'success';
  header('Location: index.php');
}
?>