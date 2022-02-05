<!DOCTYPE html>
<html>

<head>
    <title>ToDo List Application PHP and MySQL</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>

<body>
    <div class="heading">
        <h2>ToDo List Application PHP and MySQL database</h2>
    </div>
    <?php
    include 'C:\xampp\htdocs\PHP Programming\To_Do_List_2\php\database.php';
    $id = $_GET['edit_id'];
    $sql = "SELECT * FROM tasks WHERE id=" . $id;
    $result = mysqli_query($connection, $sql);
    if ($result) {
        $row = mysqli_fetch_assoc($result);
        $task = $row['task'];
    }
    ?>
    <form method="post" action="../php/update.php" class="input_form">
        <input type="text" name="task" class="task_input" value="<?php global $task;
        echo $task ?>" placeholder="Edit Your ToDo Task" Required>
        <input type="hidden" name="id" id="id" value="<?php echo $id ?>">
        <button value="update" type="submit" name="update" id="add_btn" class="add_btn">Update</button>
    </form>
</body>

</html>