<?php
	require_once '../includes/connection.php';
	$id = $_GET['id'];

	$stmt = $conn->prepare("DELETE FROM user_tbl WHERE cID = :id");
	$stmt->bindparam(":id", $id);
	$stmt->execute();

	$stmt = $conn->prepare("DELETE FROM account_tbl WHERE cID = :id");
	$stmt->bindparam(":id", $id);
	$stmt->execute();

	echo "<script>alert('SUCCESS')</script>";
	echo "<script>window.open('../admin/index.php','_self')</script>";


?>