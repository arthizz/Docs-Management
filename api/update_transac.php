<?php
	require_once '../includes/connection.php';
	$id = $_GET['id'];
	$item_name = $_GET['name'];
	$avail = 1;

	$stmt = $conn->prepare("UPDATE item_tbl SET cAvailability = :avail WHERE cItem_name = :name");
	$stmt->bindparam(":name", $item_name);
	$stmt->bindparam(":avail", $avail);
	$stmt->execute();

	$stmt = $conn->prepare("UPDATE transac_tbl SET cAvailability = :avail WHERE cID = :id");
	$stmt->bindparam(":id", $id);
	$stmt->bindparam(":avail", $avail);
	$stmt->execute();

	echo "<script>window.open('../admin/borrow_history.php','_self')</script>";

?>