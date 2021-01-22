<?php
	require_once '../includes/connection.php';
	$date = date('Y-m-d');
	$username = $_REQUEST['txtusername'];
	$password = $_REQUEST['txtpassword'];

	$STH = $conn->prepare("SELECT * FROM account_tbl WHERE cUsername=:username and cPassword=:password");
	$STH->bindparam(":username",$username);
	$STH->bindparam(":password",$password);
	$STH->execute();
	$ROW = $STH->fetch(PDO::FETCH_ASSOC);
	$CTR = $STH->rowCount();

	if($CTR<>0){
		if ($ROW['cLevel'] == '1') {
			session_start();
			$_SESSION['user']= $ROW['cID'];
			echo "<script>alert('SUCCESS')</script>";
			echo "<script>window.open('../admin/index.php','_self')</script>";
		}else{
			session_start();
			$_SESSION['user']=$ROW['cID'];

			$stmt = $conn->prepare("SELECT * FROM user_tbl WHERE cID = :id");
			$stmt->bindparam(":id", $_SESSION['user']);
			$stmt->execute();

			$row1 = $stmt->fetch(PDO::FETCH_ASSOC);

			$stmt = $conn->prepare("INSERT INTO logs_tbl (cFname, cLname, cDate)VALUES(:fname, :lname, :dat)");
			$stmt->bindparam(":fname", $row1['cFname']);
			$stmt->bindparam(":lname", $row1['cLname']);
			$stmt->bindparam(":dat", $date);
			$stmt->execute();

			echo "<script>alert('SUCCESS')</script>";
			echo "<script>window.open('../studentpage/homepage.php','_self')</script>";


		}
	}
	 else {
	echo "<script>alert('Username or Password Invalid')</script>";
	echo "<script>window.open('../index.php','_self')</script>";
	}

?>