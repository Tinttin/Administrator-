<?php
$conn=mysqli_connect("fdb1033.awardspace.net","4428097_auth","admin123(*)","4428097_auth");
if (isset($_POST['update'])) {

$id=$_POST['id'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$address=$_POST['address'];
$position=$_POST['position'];

	$update=mysqli_query($con,"Update employee set fname='$fname',lname='$lname',address='$address',position='$position' where id ='$id'");
	if ($update) {
		echo '<script>alert("Data updated successfully");window.location.href="dashboard.php";</script>';
	}
}
else if (isset($_POST['delete'])) {
		$id=$_POST['id'];
		$delete=mysqli_query($con,"delete from employee where id ='$id'");
		if ($delete) {
			echo '<script>alert("Data deleted successfully");window.location.href="dashboard.php";</script>';
		}
	}else{
		echo "not";

	}


?>