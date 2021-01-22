<?php
	require_once '../includes/connection.php';
	$id = $_GET['id'];

	$stmt = $conn->prepare("DELETE FROM item_tbl WHERE cID = :id");
	$stmt->bindparam(":id", $id);
	$stmt->execute();

	$stmt = $conn->prepare("DELETE FROM part_tbl WHERE Project_id = :id");
	$stmt->bindparam(":id", $id);
	$stmt->execute();

	echo "<script>alert('SUCCESS')</script>";
	echo "<script>window.open('../admin/project_table.php','_self')</script>";


?>