<?php 
	include '../db_connect.php';
	session_start();

	extract($_POST);
	$type = '';
	$qry = $conn->query("SELECT * FROM users where email='$email' and password = '$password' $type ");
	if($qry->num_rows > 0){
        echo json_encode(array("status"=>true,"data"=>$qry->fetch_assoc()));
	}else{
		echo json_encode(array("status"=>false,"data"=>"invalid credential"));
	}
?>