<?php
// update the edited task
$id = $_POST['id'];
$task = $_POST['task'];
include 'C:\xampp\htdocs\PHP Programming\To_Do_List_2\php\database.php';
$sql = "UPDATE tasks SET task='$task' WHERE id=$id";
$result = mysqli_query($connection, $sql);
if ($result) {
    header('location: ../pages/index.php');
}
