<?php


if (isset($_POST['register'])) {
	# code...
$password=$_POST['password'];



$con=mysqli_connect("fdb1033.awardspace.net","4428097_auth","admin123(*)","4428097_auth");
$fullname=$_POST['fullname'];
$email=$_POST['email'];


$password=password_hash($password, PASSWORD_DEFAULT);

$sql=mysqli_query($con,"SELECT * FROM auth WHERE email ='$email'");
if ($sql->num_rows>0) {
$mg="email already exist";
 header("location: index.php?mg=$mg");
}
else{
$query= mysqli_query($con,"INSERT INTO auth (fullname,email,password) VALUES('$fullname','$email','$password')");
if ($query) {

	$mg="You are registered successfully";
header("location: index.php?msg=$mg");

}else{
	$mg="Failed to register";
header("location: index.php?mg=$mg");
}

}}


?>