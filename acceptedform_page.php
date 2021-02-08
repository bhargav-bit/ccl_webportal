<!DOCTYPE html>
<html>
<head>
	<title>forms</title>
	<link rel="stylesheet" type="text/css" href="nav_bar.css">
	<link rel="stylesheet" type="text/css" href="form_pagestyle.css">
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
	$result = mysqli_query($conn, $sql);
	?>
	<div class="table">
	<table>
		
			<th>Name</th>
			<th>Father's Name</th>
			<th>Date of Birth</th>
			<th>Gender</th>
			<th>Institution Name</th>
			<th>Qualification</th>
			<th>Branch</th>
			<th>Roll No.</th>
			<th>Address</th>
			<th>Email</th>
			<th>Mobile No.</th>
			<th>Time period</th>
			<th>from</th>
			<th>to</th>
			<th>Document</th>

	<?php
	while($row = mysqli_fetch_array($result))
	{			$ID = $row["id"];
				$Name = $row["Name"];
				$Father = $row["Father's Name"];
				$dob = $row["dob"];
				$Gender = $row["Gender"];
				$Institution = $row["Institution Name"];
				$Qualification = $row["Qualification"];
				$Branch = $row["Branch"];
				$Roll = $row["Roll No."];
				$Address = $row["Address"];
				$Email = $row["Email"];
				$Mobile = $row["Mobile No."];
				$TimePd = $row["Time Period"];
				$from = $row["Fromdate"];
				$to = $row["Todate"];
				// $accept = "<input class='submit-btn' type='submit' name='accept_".$ID."' value='accept'>";
				// $reject = "<input class='submit-btn' type='submit' name='reject_".$ID."' value='reject'>";
		echo "<tr>";
		echo "<td>".$Name."</td>"."<td>".$Father."</td>"."<td>".$dob."</td>"."<td>".$Gender."</td>"."<td>".$Institution."</td>"."<td>".$Qualification."</td>"."<td>".$Branch."</td>"."<td>".$Roll."</td>"."<td>".$Address."</td>"."<td>".$Email."</td>"."<td>".$Mobile."</td>"."<td>".$TimePd."</td>"."<td>".$from."</td>"."<td>".$to."</td>";
		$doc = "documents/".$row["Roll No."]."_".$row["Institution Name"].".pdf";
		echo "<td><a href = '".$doc."'>View</a></td>";
	echo "</tr>";

			}
?>			
	</table>
 	</div>
</body>
</html>