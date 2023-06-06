<?php

include 'constants.php';

// $db = new Constants();
// $dbName = $db->DBNAME;
// $dbPass = $db->DBPASS;
// $dbUser = $db->DBUSER;

$conn= new mysqli('localhost',DBUSER,DBPASS,DBNAME)or die("Could not connect to mysql".mysqli_error($con));
// $conn= new mysqli('localhost','id20801102_anks1245','Ankit@2002','id20801102_quiz_db')or die("Could not connect to mysql".mysqli_error($con));
// if(!$conn){
//     die("Connection failed: " . mysqli_connect_error());
// }else{
//     echo "connected";
// }

?>