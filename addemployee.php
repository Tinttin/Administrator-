<?php
$conn=mysqli_connect("fdb1033.awardspace.net","4428097_auth","admin123(*)","4428097_auth");
if (isset($_POST['add'])) {
	# code...

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$address=$_POST['address'];
$position=$_POST['position'];
$num=$_POST['num'];

$query=mysqli_query($conn,"insert into employee (fname,lname,address,position,num) VALUES ('$fname','$lname','$address','$position','$num')");
if ($query) {
	echo '<script>alert("new employee added successfully");window.location.href="dashboard.php";</script>';
}
else{
	echo '<script>alert("Something went wrong");window.location.href="dashboard.php";';
}
}

?>

