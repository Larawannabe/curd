<?php
include_once("config.php");

$id = $_GET['id'];

$sql = "select * from employee where id=:id";
$query = $dbConn->prepare($sql);
$query->execute(array(':id'=>$id));
$row = $query->fetch();
echo $row['first_name'];


?>



<!doctype html>
<html>
<head>
<meta charset="utf-8">
	
	<title>Bootstrap CRUD Data Table for Database with Modal Form</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	
<title>Untitled Document</title>
</head>

<body>


	
		<!-- Edit Modal HTML -->
	<div id="addEmployeeModal" class="">
		<div class="modal-dialog">
			<div class="modal-content">
				<form action="update.php" method="POST">
					<input type="hidden" name = "id" value="<?php echo $row['id']; ?>">
					<div class="modal-header">						
						<h4 class="modal-title">Add Employee</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">					
						<div class="form-group">
							<label>First Name</label>
							<input  name="first_name" type="text" class="form-control" value="<?php echo $row['first_name'];?>" required>
							<label>Last Name</label>
							<input name="last_name" type="text" class="form-control" value="<?php echo $row['last_name'];?>" required>
						</div>
						<div class="form-group">
							<label>Job Title</label>
							<input name="job_title" type="text" class="form-control" value="<?php echo $row['job_title'];?>" required>
						</div>
						<div class="form-group">
							<label>Salary</label>
							<textarea name="salary" class="form-control" required><?php echo $row['salary'];?></textarea>
						</div>
						<div class="form-group">
							<label>Notes</label>
							<input name="notes" type="text" class="form-control" value="<?php echo $row['notes'];?>"  required>
						</div>					
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
						<input name="Submit" type="submit" class="btn btn-success" value="Add">
					</div>
				</form>
			</div>
		</div>
	</div>
	
	

	
</body>
</html>