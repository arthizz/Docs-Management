<?php
	require_once '../includes/connection.php';
	$txtfname = $_POST['txtfname'];
	$txtlname = $_POST['txtlname'];
	$txtusername = $_POST['txtusername'];
	$txtpassword = $_POST['txtpassword'];
	$txtcourse = $_POST['txtcourse'];

	if($_POST['txtlevel'] == "Admin"){
		$txtlevel = 1;

	}else{
		$txtlevel = 0;

	}

	$stmt = $conn->prepare("INSERT INTO account_tbl (cUsername, cPassword, cLevel)VALUES(:username, :password, :level)");
	$stmt->bindparam(":username", $txtusername);
	$stmt->bindparam(":password", $txtpassword);
	$stmt->bindparam(":level", $txtlevel);
	$stmt->execute();

	$stmt = $conn->prepare("INSERT INTO user_tbl (cFname, cLname, cCourse)VALUES(:name, :lname, :course)");
	$stmt->bindparam(":name", $txtfname);
	$stmt->bindparam(":lname", $txtlname);
	$stmt->bindparam(":course", $txtcourse);
	$stmt->execute();

	echo "<script>alert('SUCCESS')</script>";
	echo "<script>window.open('../admin/add_account.php','_self')</script>";


?>