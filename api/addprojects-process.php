<?php
	require_once '../includes/connection.php';
	$txtprojectname = $_POST['txtprojectname'];
	$txtcategory = $_POST['txtcategory'];
	$txtdescription = $_POST['txtdescription'];
	$txtauthor = $_POST['txtauthor'];
	$available = 1;
	$total = count($_FILES['upload']['name']);
	$chapter = "Chapter";


	$stmt = $conn->prepare("INSERT INTO item_tbl (cItem_name, cDescription, cAuthor, cAvailability, cCategory)VALUES(:txtprojectname, :txtdescription, :txtauthor, :available, :txtcategory)");
	$stmt->bindparam(":txtprojectname", $txtprojectname);
	$stmt->bindparam(":txtdescription", $txtdescription);
	$stmt->bindparam(":txtauthor", $txtauthor);
	$stmt->bindparam(":available", $available);
	$stmt->bindparam(":txtcategory", $txtcategory);
	$stmt->execute();
	$lastid = $conn->lastInsertId();

	for($i = 0; $i < $total; $i++){
		$a = $i;
		$a++;
		$chapternew = $chapter.' '.$a;
		$tmpFilePath = $_FILES['upload']['tmp_name'][$i];
		$newFilePath = "../uploads/" . $_FILES['upload']['name'][$i];
		if(move_uploaded_file($tmpFilePath, $newFilePath)){
			$stmt = $conn->prepare("INSERT INTO part_tbl(Project_id, cID_name, cPart, cContent)VALUES(:id, :name, :part, :content)");
			$stmt->bindparam(":id", $lastid);
			$stmt->bindparam(":name", $txtprojectname);
			$stmt->bindparam(":part", $chapternew);
			$stmt->bindparam(":content", $newFilePath);
			$stmt->execute();

		}


	}


	echo "<script>alert('SUCCESS')</script>";
	echo "<script>window.open('../admin/add_projects.php','_self')</script>";


?>