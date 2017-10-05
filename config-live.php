<?php
//define constants for connection info
define("MYSQLUSER","jcubitgr_ict");
define("MYSQLPASS","123zxc");
define("HOSTNAME","localhost");
define("MYSQLDB","jcubitgr_suncare");

//make connection to database
function db_connect()
{
	try{
	$connString="mysql:host=".HOSTNAME.";dbname=".MYSQLDB;
	$conn = new PDO($connString,MYSQLUSER,MYSQLPASS);
	}
	catch (PDOException $e) {
  		die( $e->getMessage() );
	}

	return $conn;
} 
?>