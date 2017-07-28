<?php 
include('conn.php');
 
		if(isset($_GET['id'])!="")
			{
				$delete=$_GET['id'];
				$qry= "delete from employee where id=$delete";
				if($conn->query($qry))
				{
					echo "record deleted successfully";
					header("Location: view.php");
				}
				else {
				   	 echo "Error: " . $qry . "<br>" . mysqli_error($conn);
				}
			}
		

?>
