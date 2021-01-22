<?php
  require_once '../includes/connection.php';
  session_start();
  $id = $_GET['id'];
  $avail = 0;

  $stmt = $conn->prepare("UPDATE item_tbl SET cAvailability = :avail WHERE cID = :id");
  $stmt->bindparam(":avail", $avail);
  $stmt->bindparam(":id", $id);
  $stmt->execute();

  $stmt = $conn->prepare("SELECT * FROM item_tbl WHERE cID = :id");
  $stmt->bindparam(":id", $id);
  $stmt->execute();

  $row = $stmt->fetch(PDO::FETCH_ASSOC);

  $stmt1 = $conn->prepare("SELECT * FROM user_tbl WHERE cID = :id");
  $stmt1->bindparam(":id", $_SESSION['user']);
  $stmt1->execute();
  $row1 = $stmt1->fetch(PDO::FETCH_ASSOC);

  $name = $row1['cFname'].' '.$row1['cLname'];
    $datetoday = date('Y/m/d');
  $stmt = $conn->prepare("INSERT INTO transac_tbl (cStudent_name, cItem_name, cDat, cAvailability)VALUES(:name, :lname, :course, :avail)");
	$stmt->bindparam(":name", $name);
	$stmt->bindparam(":lname", $row['cItem_name']);
	$stmt->bindparam(":course", $datetoday);
  $stmt->bindparam(":avail", $avail);
	$stmt->execute();

  echo "<script>window.open('../studentpage/homepage.php','_self')</script>";

?>