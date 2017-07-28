<?php 
include('conn.php');

?>
<!DOCTYPE html>
<html>
<head>
	<title>Simple Form Validation</title>
	<link rel="stylesheet" href="../css/view.css">
	
</head>
<body>
<form id="user-form" name="user-form" method="post" onSubmit="return viewdata();"> 
	<div class="Wrapper">
		<div class="rg">
		<p>
		<a href="create.php"><input type="button"  name="create" class="button" value="New Registration"></a>
		<a href="../index.php"><input type="button"  name="back" class="button" value="Back">
		</a></p>

		<div class="form viewstyle">
		<table>
		<tr>
		<th>ID</th>
		<th>Name</th>
		<th>Email</th>
		<th>Mobile No.</th>
		<th>Update</th>
		<th>Delete</th>
		</tr>
	<?php 
		$qry1="select * from employee";
		$result=$conn->query( $qry1);
		if ($result->num_rows > 0) {
	    // output data of each row

	    while($row = $result->fetch_assoc()) {
	        $rowid=$row["id"];
    ?>
        <tr>
        <td><?php echo $row["id"] ?></td>
        <td><?php echo $row["name"] ?></td>
        <td><?php echo $row["email"] ?></td>
        <td><?php echo $row["mobno"] ?></td>
        <td><a href="update.php?id=<?php echo $row["id"]; ?>"><input type="button"  name="register" class="button" value="Update"></a></td>
        <td><a href="delete.php?id=<?php echo $row["id"]; ?>"><input type="button"  name="delete" class="button" value="Delete">
			</a></td>
        </tr>
       

	<?php  
	    }
	} else {
	    echo "0 results";
	}
		

	
	?>

		</table>
		</div>
		</div>
	</div>
	</form>
</body>
</html>

