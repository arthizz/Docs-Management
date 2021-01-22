<?php
	require_once '../includes/connection.php';
	$id = $_POST['id'];
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

	$stmt = $conn->prepare("UPDATE account_tbl SET cUsername =:username, cPassword=:password, cLevel=:level WHERE cID =:id");
	$stmt->bindparam(":id", $id);
	$stmt->bindparam(":username", $txtusername);
	$stmt->bindparam(":password", $txtpassword);
	$stmt->bindparam(":level", $txtlevel);
	$stmt->execute();

	$stmt1 = $conn->prepare("UPDATE user_tbl SET cFname =:fname, cLname=:lname, cCourse=:course WHERE cID = :id");
	$stmt1->bindparam(":id", $id);
	$stmt1->bindparam(":fname", $txtfname);
	$stmt1->bindparam(":lname", $txtlname);
	$stmt1->bindparam(":course", $txtcourse);
	$stmt1->execute();

	echo "<script>alert('SUCCESS')</script>";
	echo "<script>window.open('../admin/index.php','_self')</script>";


?>