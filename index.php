<?php 
session_start();
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
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="loginstyle.css">
	<link rel="stylesheet" type="text/css" href="nav_bar.css">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
</head>
<body>
	<nav id="header">
		<div>
			<img src="ccl_logo.png">;
		</div>
	</nav>
	<form action="" method="POST" enctype="multipart/form-data">
<div class="form">
	<table>
		<tr>
			<th><h1>Admin Login</h1></th>
		</tr>
		<tr>
			<td>
				<label for username><img src="pictures/user.png" height="30px" width="30px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Username</label>
				<input type="text" id="username" name="username" placeholder="Enter Username" class="field">
			</td>
		</tr>
		<tr>
			<td>
				<label for password><img src="pictures/psd.png" height="30px" width="30px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Password</label>
				<input type="password" name="password" id="password" placeholder="Enter password" class="field">
			</td>
		</tr>
	<tr>
	<td><input type="submit" class="login-btn" name="login" value="login"></td>
</tr>
</div>
</table>

</form>

<?php 
	if(isset($_POST['login']))
	{
		$user = $_POST['username'];
		$pwd = $_POST['password'];
		$query = "SELECT * FROM login WHERE username='$user' && password='$pwd'";
		$data = mysqli_query($conn,$query);
		$total = mysqli_num_rows($data);
		if($total==1)
		{
			$_SESSION['user_name']=$user;
			header("location:admin_page.php");
		}

		else
		{
			echo "<div class='redbox'>Incorrect Username or Password</div>";
		}
	}
 ?>
</body>
</html>