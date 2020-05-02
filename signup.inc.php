<?php
    
    include_once 'dbh.inc.php';
	
	$wardnum = $_POST['wardid'];
	$wardtype = $_POST['wardtype'];
	$patientid = $_POST['patientid'];
	
	
	$sql= "INSERT  INTO ward(ward_no,ward_type,pid) VALUES ($wardnum,'$wardtype',$patientid);";
	$result= mysqli_query($conn,$sql);
	
	header("Location:../ward.html?signup=success");
	
	
	
	