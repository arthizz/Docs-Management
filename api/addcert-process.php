<?php
	require_once '../includes/connection.php';
	$txtcertname = $_POST['txtcertname'];
	$txtcategory = $_POST['txtcategory'];
	$txtdate = $_POST['txtdate'];

	$target_dir = "../uploads/";
	$target_file = $target_dir . basename($_FILES["txtfile"]["name"]);
	$uploadOk = 1;
	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
	    move_uploaded_file($_FILES["txtfile"]["tmp_name"], $target_file);



	$stmt = $conn->prepare("INSERT INTO cert_tbl (cCertname, cCategory, cPhoto, cDate)VALUES(:txtcertname, :txtcategory, :txtfile, :txtdate)");
	$stmt->bindparam(":txtcertname", $txtcertname);
	$stmt->bindparam(":txtcategory", $txtcategory);
	$stmt->bindparam(":txtfile", $target_file);
	$stmt->bindparam(":txtdate", $txtdate);
	$stmt->execute();


	echo "<script>alert('SUCCESS')</script>";
	echo "<script>window.open('../admin/add_certificate.php','_self')</script>";


?>