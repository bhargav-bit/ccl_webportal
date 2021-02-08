<!DOCTYPE html>
<html>
<head>
	<title>rejected</title>
	<link rel="stylesheet" type="text/css" href="nav_bar.css">
	<link rel="stylesheet" type="text/css" href="rejectedstyle.css">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
</head>
<body>
	<nav id="header">
<img src="ccl_logo.png">
	<div class="nav-bar">
		<a href="admin_page.php">Home</a>
		<a href="form_page.php">Forms</a>
		<a href="">Change Password</a>
		<a href="">logout</a>
	</div>
</nav>
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

	$sql = "
			INSERT INTO rejected SELECT * FROM application WHERE id = '$_GET[id]';
			DELETE FROM application WHERE id = '$_GET[id]';

			";

	if(mysqli_multi_query($conn, $sql))
	{	header("refresh:1; url=form_page.php");


?>
<div class="redbox">
	❌&nbsp;&nbsp;&nbsp;&nbsp;Application form rejected
</div>
<?php
}

else
		echo '<div class="error">Internal Error....Please try again</div>';

?>
</body>
</html>