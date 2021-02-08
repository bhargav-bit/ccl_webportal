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
?>



<!DOCTYPE html>
<html>
<head>
	<title>Change Password</title>
	<link rel="stylesheet" type="text/css" href="loginstyle.css">
	<link rel="stylesheet" type="text/css" href="nav_bar.css">
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
	<form action="" method="POST" enctype="multipart/form-data">
<div class="form">
	<table>
		<tr>
			<th><h1>Change Password</h1></th>
		</tr>
		<tr>
			<td>
				<label for username><img src="pictures/user.png" height="30px" width="30px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Username</label>
				<input type="text" id="username" name="username" placeholder="Enter Username" class="field">
			</td>
		</tr>
		<tr>
			<td>
				<label for password><img src="pictures/psd.png" height="30px" width="30px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Current Password</label>
				<input type="password" name="password" id="password" placeholder="Enter current password" class="field">
			</td>
		</tr>
		<tr>
			<td>
				<label for password><img src="pictures/psd.png" height="30px" width="30px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;New Password</label>
				<input type="password" name="new_password" id="new_password" placeholder="Enter New password" class="field">
			</td>
		</tr>
	<tr>
	<td><input type="submit" class="login-btn" name="login" value="Confirm"></td>
</tr>
</div>
</table>

</form>

<?php 

	$userprofile = $_SESSION['user_name'];
	if($userprofile==true)
	{

	}

	else
	{
		header('location:index.php');

	}
	
	if(isset($_POST['login']))
	{
		$user = $_POST['username'];
		$pwd = $_POST['password'];
		$npwd = $_POST['new_password'];
		$query = "SELECT * FROM login WHERE username='$user' && password='$pwd'";
		$data = mysqli_query($conn,$query);
		$total = mysqli_num_rows($data);
		if($total==1)
		{
			$query2 = "UPDATE `login` SET `password`= ('$npwd') WHERE `username` = ('$user')";
			if(mysqli_query($conn,$query2))
						{
							echo "<div class='greenbox'>Password Changed successfully</div>";
							header("Refresh:3; url=logout.php");
						}
		}

		else
		{
			echo "<div class='redbox'>Incorrect Username or Password</div>";
		}
	}
 ?>
</body>
</html>