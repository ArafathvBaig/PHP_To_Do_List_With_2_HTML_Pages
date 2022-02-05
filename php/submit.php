<?php
include 'C:\xampp\htdocs\PHP Programming\To_Do_List_2\php\database.php';
// insert a quote if submit button is clicked
$task = $_POST['task'];
$sql = "INSERT INTO tasks (task) VALUES ('$task')";
$result = mysqli_query($connection, $sql);
if ($result) {
    header('location: ../pages/index.php');
} else {
    echo "Fill in the Task to Add";
}
