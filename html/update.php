<?php 
include('conn.php');

if(isset($_POST['update']))
{
	$uid=$_POST['uid'];
	$name=$_POST['uname'];
	$email=$_POST['email'];
	$mobno=$_POST['mobno'];

	$qry1="select * from employee where id='$uid'";
	$result=$conn->query( $qry1);
	if ($result->num_rows > 0) 
	{
		$qry = "update employee set name='$name', mobno='$mobno', email='$email' where id='$uid'";
		
		if ($conn->query($qry)) {
		    echo "<br>Record Updated successfully";
		    header("Location: view.php");
		} 
		else 
		{
		    echo "Error: " . $qry . "<br>" . mysqli_error($conn);
		}
	}
	else
	{
		echo "<br>There is no such record found with id=".$uid.".";
	}
}

$vid="";
$vname="";
$vemail="";
$vmobno="";



if(isset($_GET['id']))
{
	$uid=$_GET['id'];
	$qry1="select * from employee where id='$uid'";
	$result=$conn->query( $qry1);
	if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $vid=$row["id"];
        $vname=$row["name"];
		$vemail=$row["email"];
		$vmobno=$row["mobno"];

    }
} else {
    echo "0 results";
}
	

}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Simple Form Validation</title>
	<link rel="stylesheet" type="text/css" href="../css/view.css">
	<script type="text/javascript" src="../js/script.js"></script>
</head>
<body>
<form id="user-form" name="user-form" method="post" onSubmit="return viewdata();"> 
	<div class="Wrapper">
		<div class="rg">
		<div class="form newstyle">
			<div class="header">
			</div>
			<div class="content">
			<p>
			<label for="user-id">UserID</label>
			<input class="ip" type="text" id="user-id" name="uid" placeholder="Please enter id" value='<?php echo $vid; ?>'>
			</p>
			<p>
			<label for="user-name">UserName</label>
			<input class="ip" type="text" id="user-name" name="uname" value='<?php echo $vname; ?>' > 
			</p>
			<p>
			<label for="user-email">Email ID</label>
			<input class="ip" type="email" id="user-email" name="email" value='<?php echo $vemail; ?>'> 
			</p>
			<p>
			<label for="user-mobno">Mobile No.</label>
			<input class="ip" type="number" id="user-mobno" name="mobno" value='<?php echo 
			$vmobno; ?>'> 
			</p>
			<p>
			
			<a href="view.php"><input type="submit"  name="update" class="button" value="Update"></a>
			<a href="view.php"><input type="button"  name="back" class="button" value="Back">
			</a>
			</p>
			</div>
		</div>
		</div>
	</div>
	</form>
</body>
</html>