<!DOCTYPE html>
<html>
<head>
	<title>Admin Page</title>
	<link rel="stylesheet" type="text/css" href="nav_bar.css">
	<link rel="stylesheet" type="text/css" href="front_page.css">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
</head>
<body>
	<nav id="header">
	<img src="ccl_logo.png">
	<div class="nav-bar">
				<a href="admin_page.php">Home</a>
		<a href="form_page.php">Forms</a>
		<a href="acceptedform_page.php">Accepted Forms</a>
		<a href="rejectedform_page.php">Rejected Forms</a>
		<a href="changepsd.php">Change Password</a>
		<a href="logout.php">logout</a>
	</div>
</nav>
	<div class="formstatus">
		<h3>Form Status</h3>
		<p>Forms Processed&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
		<?php
		session_start();
		error_reporting(0);
		$db_host = "localhost";
	$db_user = "root";
	$db_psd = "";
	$db_name = "forms";

	$conn = mysqli_connect($db_host,$db_user,$db_psd,$db_name);
	if(!$conn)
	{
		die("Some Internal error occured....Please try again after sometime.");
	}

	$userprofile = $_SESSION['user_name'];
	if($userprofile==true)
	{

	}

	else
	{
		header('location:index.php');

	}

	$sql = "SELECT * FROM accepted" ;
	$result1 = mysqli_query($conn, $sql);
	$row1 = mysqli_num_rows($result1); 
	$sql = "SELECT * FROM rejected";
	$result2 = mysqli_query($conn, $sql);
	$row2 = mysqli_num_rows($result2);
	$total = $row1+$row2; 
		if($result1&&$result2)
		{
			echo $total;
		}
		?>
	</p>
		<p>Forms Unprocessed &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
		<?php

		$db_host = "localhost";
	$db_user = "root";
	$db_psd = "";
	$db_name = "forms";

	$conn = mysqli_connect($db_host,$db_user,$db_psd,$db_name);
	if(!$conn)
	{
		die("Some Internal error occured....Please try again after sometime.");
	}

	$sql = "SELECT * FROM application" ;
	$result = mysqli_query($conn, $sql);
	$row = mysqli_num_rows($result); 
		if($result)
		{
			echo $row;
		}
		?></p>
	</div>
</body>
</html>