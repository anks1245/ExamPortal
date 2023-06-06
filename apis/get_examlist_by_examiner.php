<?php
    include '../db_connect.php';
	session_start();

	extract($_POST);
	$type = '';
	$qry = $conn->query("SELECT quiz_list.id,quiz_list.title,quiz_list.start_time,quiz_list.end_time, quiz_list.user_id, u.name, u.email FROM `quiz_list` JOIN `users` as u ON quiz_list.user_id = u.id WHERE user_id=".$_POST["id"].";");
	if($qry->num_rows > 0){
		$ex = array();
		// $qry->fetch_all()
		$len = sizeof($qry->fetch_all());
		// for($i=0;$i<$len;$i++){
		// 	print_r($qry->fetch_all());
		// }
        echo json_encode(array("status"=>true,"data"=>$qry->fetch_assoc()));
	}else{
		echo json_encode(array("status"=>false,"data"=>"no data found"));
	}

?>