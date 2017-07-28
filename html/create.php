<?php 
include('conn.php');

if(isset($_POST['register']))
{
	$name=$_POST['uname'];
	$email=$_POST['email'];
	$mobno=$_POST['mobno'];
	$qry = "insert into employee (name, email,mobno) values ('$name','$email','$mobno')";
	if($conn->query($qry))
	{
	    echo "<br>New record created successfully";
	    header("Location: view.php");
	} else {
	    echo "Error: " . $qry . "<br>" . mysqli_error($conn);
	}

	$subject = "Confirm Registration ";
	$txt = "Thanks for registering with us.";
	mail($email,$subject,$txt);


}
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Simple Form Validation</title>
	<link rel="stylesheet" href="../css/view.css">
	<script type="text/javascript" src="../js/loginform.js"></script>
</head>
<body>
<form id="user-form" name="user-form" method="post" onSubmit="return validateIt();"> 
	<div class="Wrapper">
		<div class="rg">
		<div class="form newstyle">
			<div class="header">
			<h2>Register Here</h2>
			</div>
			<div class="content">
			<p>
			<label for="user-name">UserName</label>
			<input class="ip" type="text" id="user-name" name="uname" > 
			</p>
			<p>
			<label for="user-email">Email ID</label>
			<input class="ip" type="email" id="user-email" name="email"> 
			</p>
			<p>
			<label for="user-mobno">Mobile No.</label>
			<input class="ip" type="number" id="user-mobno" name="mobno"> 
			</p>
			<p>
			<input type="submit"  name="register" class="button" value="Register">
			<a href="../index.php"><input type="button"  name="back" class="button" value="Back">
			</a>
			</p>
			</div>
		</div>
		</div>
	</div>
	</form>
</body>
</html>

