<?php

//To import PHP database - search using xamp under user account.  This is a must to connect to database an then work on it

$databaseHost 			=	'localhost';
$databaseName				= 'database1';
$databaseUsername		= 'root';
$dataPassword				= '';

//mainly used when you are trying to connect to something for example trying to access a database
try{
	//PDO //best practice if you use this it prevents hackers accessing your database through std queries
	//what is your databse stem mysql salsrv, postgres, mangodb
	$dbConn = new PDO ("mysql:host={$databaseHost};dbname={$databaseName}", $databaseUsername, $dataPassword);
	
	$dbConn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	
	//echo "You are successful";
	
	echo "<br>";
	
	
	//$results = $dbConn->query("select * from employee");
	//print_r($results);
	
	
	//foreach($dbConn->query("select * from employee") as $row) {
		//print_r($row);
	//}
		
}catch (PDOException $e){//If there is a problem with connection to debug to find out what it is
		
		echo "Connection Error :" .$e->getMessage();
		
	}



?>