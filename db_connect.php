<?php

include 'constants.php';

// $db = new Constants();
// $dbName = $db->DBNAME;
// $dbPass = $db->DBPASS;
// $dbUser = $db->DBUSER;

$conn= new mysqli('localhost',DBUSER,DBPASS,DBNAME)or die("Could not connect to mysql".mysqli_error($con));
// $conn= new mysqli('localhost','root','Ankit@s2k','u544703970_s2k')or die("Could not connect to mysql".mysqli_error($con));

?>