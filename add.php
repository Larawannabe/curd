<?php
//create this file to add an addition form to your database...read up on the below so it makes more sense later on!!!

include_once('config.php');
if(isset($_POST['Submit'])){

	$first_name = $_POST['first_name'];//to test input 'NULL' here ad comment out the header
	$last_name = $_POST['last_name'];
	$job_title = $_POST['job_title'];
	$salary = $_POST['salary'];
	$notes = $_POST['notes'];

	
	
try{	
$sql = "INSERT INTO employee

					(first_name, last_name, job_title, salary, notes)
					VALUES
					(:first_name, :last_name, :job_title, :salary, :notes)";
	
					$query = $dbConn->prepare($sql);
					$query->bindparam (':first_name' ,$first_name);
					$query->bindparam (':last_name' ,$last_name);
					$query->bindparam (':job_title' ,$job_title);
					$query->bindparam (':salary' ,$salary);
					$query->bindparam (':notes' ,$notes);
					$query->execute();
					header("Location:index.php");

					
	
}catch (PDOException $e){//If there is a problem with connection to debug to find out what it is
		
		echo "It has failed to add " .$e->getMessage();
		
	}
		
	
					

	
}



?>