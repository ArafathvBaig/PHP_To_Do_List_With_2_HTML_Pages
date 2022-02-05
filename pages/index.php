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
	<form method="post" action="../php/submit.php" class="input_form">
		<input type="text" name="task" class="task_input" placeholder="Enter Your ToDo List Task" required>
		<button value="submit" type="submit" name="submit" id="add_btn" class="add_btn">Add Task</button>
	</form>
	<table>
		<thead>
			<tr>
				<th>S.No</th>
				<th>Tasks</th>
				<th>Action</th>
			</tr>
		</thead>

		<tbody>
			<?php
			include 'C:\xampp\htdocs\PHP Programming\To_Do_List_2\php\database.php';
			// select all tasks if page is visited or refreshed
			$sql = "SELECT * FROM tasks";
			$result = mysqli_query($connection, $sql);
			$i = 1;
			while ($row = mysqli_fetch_array($result)) { ?>
				<tr>
					<td class="serialNumber"> <?php echo $i; ?> </td>
					<td class="task"> <?php echo $row['task']; ?> </td>
					<td class="edit_delete">
						<a href="../php/edit.php?edit_id=<?php echo $row['id'] ?>">Edit</a>
						<a href="../php/delete.php?del_id=<?php echo $row['id'] ?>">X</a>
					</td>
				</tr>
			<?php $i++;
			} ?>
		</tbody>
	</table>
</body>

</html>