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

	if(isset($_REQUEST['submit']))
	{	$code = $_SESSION['code'];
		if($code==$_REQUEST['captcha'])
		{	
		if(($_FILES["Document"]["type"]=="application/pdf"))
			{
				$Name = $_REQUEST['Name'];
				$Father = $_REQUEST['Father'];
				$dob = $_REQUEST['dob'];
				$Gender = $_REQUEST['Gender'];
				$Institution = $_REQUEST['Institution'];
				$Qualification = $_REQUEST['Qualification'];
				$Branch = $_REQUEST['Branch'];
				$Roll = $_REQUEST['Roll'];
				$Address = $_REQUEST['Address'];
				$Email = $_REQUEST['Email'];
				$Mobile = $_REQUEST['Mobile'];
				$TimePd = $_REQUEST['TimePd'];
				$from = $_REQUEST['from'];
				$to = $_REQUEST['to'];
					
				move_uploaded_file($_FILES["Document"]["tmp_name"],"documents/".$Roll."_".$Institution.".pdf");

				$sql = "INSERT INTO application (`Name`, `Father's Name`, `dob`, `Gender`, `Institution Name`, `Qualification`, `Branch`, `Roll No.`, `Address`, `Email`, `Mobile No.`, `Time Period`, `Fromdate`, `Todate`) VALUES ('$Name', '$Father', '$dob', '$Gender', '$Institution', '$Qualification', '$Branch', '$Roll', '$Address', '$Email', '$Mobile', '$TimePd','$from','$to')";	
					if(mysqli_query($conn,$sql))
						{
							echo "<div class='greenbox'>Application submitted succesfully</div>";
							header("Refresh:3; url=form_back.php");
						}
					else
					{
						echo '<div class="error"> Failed to submit. Please try again</div>';
					}

				

					}

			else
			echo '<div class="redbox"> File type did not match. Please upload file in PDF format! </div>';
	}
	else
		echo "<div class='redbox'> ❌ Incorrect Captcha </div>";
	}

 ?>



<!DOCTYPE html>
<html>
<head>
	<title>Application Form</title>
	<link rel="stylesheet" type="text/css" href="formstyle.css">
	<link rel="stylesheet" type="text/css" href="nav_bar.css">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
</head>
<body>
	<nav id="header">
		<div>
			<img src="ccl_logo.png">;
		</div>
	</nav>
	<div class="box">
	<div class="form">
		<h1 align="center">Application Form</h1>
	</div>
	<div>
		<form action="" method="POST" enctype="multipart/form-data">
			<div class="form">
			<div>
				<label>
				Name <span style="color: red">*</span>
				<input type="Text" name="Name" value = "<?php if(isset($_POST['Name'])){echo htmlentities($_POST['Name']);}?>" required >
			 </label>
			</div>
			 <div>
			 	<label>
			 	Father's Name <span style="color: red">*</span> 
			 	<input type="Text" name="Father" value = "<?php if(isset($_POST['Father'])){echo htmlentities($_POST['Father']);}?>" required>
			 </label>
			 </div>
			 <div>
			 	<label>
			 	Date of Birth <span style="color: red" >*</span> 
			 	<input type="Date" name="dob" value = "<?php if(isset($_POST['dob'])){echo htmlentities($_POST['dob']);}?>" required>
			 </label>
			 </div>
			</div>
			 <div class="radio">
			 	<label>
			 		Gender <span style="color: red">*</span>
			 		<br><br>
			 	<label for a>Male</label>
				<input id="a" type="radio" name="Gender" value="male" required>   
				<label for b>Female</label>
				<input type="radio" id="b" name="Gender" value="female" required>
				<label for c>Other</label>
				<input type="radio" id="c" name="Gender" value="other" required>
			</label>
			 </div>
			 <div class="form">
			 <div>
			 	<label>
			 	Institution Name <span style="color: red">*</span> 
			 	<input type="Text" name="Institution" value = "<?php if(isset($_POST['Institution'])){echo htmlentities($_POST['Institution']);}?>"required>
			 </label>
			 </div>
			 <div>
			 	<label>
			 	Qualification <span style="color: red">*</span> 
			 	<input type="Text" name="Qualification" value = "<?php if(isset($_POST['Qualification'])){echo htmlentities($_POST['Qualification']);}?>" required>
			 </label>
			 </div>
			 <div>
			 	<label>
			 	Branch <span style="color: red">*</span> 
			 	<input type="Text" name="Branch" value = "<?php if(isset($_POST['Branch'])){echo htmlentities($_POST['Branch']);}?>" required>
			 </label>
			 </div>
			  <div>
			 	<label>
			 	Roll No <span style="color: red">*</span> 
			 	<input type="Text" name="Roll" value = "<?php if(isset($_POST['Roll'])){echo htmlentities($_POST['Roll']);}?>" required>
			 </label>
			 </div>
			  <div>
			 	<label>
			 	<br>
			 	Address <span style="color: red">*</span> 
			 	<textarea name="Address" value = "<?php if(isset($_POST['Address'])){echo htmlentities($_POST['Address']);}?>" required></textarea>
			 </label>
			 </div>
			   <div>
			 	<label>
			 	Email Id <span style="color: red">*</span> 
			 	<input type="Email" name="Email" value = "<?php if(isset($_POST['Email'])){echo htmlentities($_POST['Email']);}?>" required>
			 </label>
			 </div>
			 <div>
			 	<label>
			 	Mobile No. <span style="color: red">*</span> 
			 	<input type="text" name="Mobile" value = "<?php if(isset($_POST['Mobile'])){echo htmlentities($_POST['Mobile']);}?>" required pattern="[0-9]{10,10}" title="Enter 10 numeric digits only (dont add +91)">
			 </label>
			 </div>
			 <div>
			 	<label>
			 		Time Period <span style="color: red">*</span>
			 		<select name="TimePd" value = "<?php if(isset($_POST['TimePd'])){echo htmlentities($_POST['TimePd']);}?>">
			 			<option>28 days</option>
			 			<option>90 days</option>
			 			<option>12 months</option>
			 		</select> 
			 	</label>
			 </div>
			 <div class="fromto">
			 	<label>
			 	from<span style="color: red">*</span>
			 	<input type="Date" name="from" value = "<?php if(isset($_POST['from'])){echo htmlentities($_POST['from']);}?>"required>
			 	</label>
			 	<label>
			 	to<span style="color: red">*</span>
			 	<input type="Date" name="to" value = "<?php if(isset($_POST['to'])){echo htmlentities($_POST['to']);}?>"required>
			 	</label>
			 </label>
			 </div>
			 <div>
			 	<label>
			 		Upload Document <span style="color: red">*</span> (Please upload attached copy of Adhar , Training/Internship permission letter and College ID in one PDF file )
			 		<input type="file" name="Document" accept=".pdf" value = "<?php if(isset($_POST['Document'])){echo htmlentities($_POST['Document']);}?>" required>
			 	</label>
			 </div>
			 <div class="captcha">
			 	<label for="captcha">
			 		Captcha <span style="color: red">*</span>
			 	</label>
			 	<br><br>
			 		<img src="captcha.php" id="captcha">
			 		<a href="#" onclick="document.getElementById('captcha').src = 'captcha.php?'+ Math.random(); return false"><img src="pictures/refresh.png" width="25px" height="25px"></a>
			 		<input type="text" name="captcha" placeholder="Enter Captcha" id="captcha">
			 </div>
			 </div>
			 <div>
			 	<input class="submit-btn" type="submit" name="submit" value="Submit form">
			 	<button class="refresh-btn" onClick="window.location.href=window.location.href">Refresh</button>
			 </div>
		</form>
	
</div>
</div>
</body>
</html>