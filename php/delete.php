<?php
// delete id
include 'C:\xampp\htdocs\PHP Programming\To_Do_List_2\php\database.php';
$id = $_GET['del_id'];
$sql = "DELETE FROM tasks WHERE id=$id";
$result = mysqli_query($connection, $sql);
if ($result) {
    header('location: ../pages/index.php');
}
