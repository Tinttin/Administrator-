



<?php 


$server="fdb1033.awardspace.net";
$user="4428097_auth";
$pass="admin123(*)";
$database="4428097_auth";
$conn=mysqli_connect($server,$user,$pass,$database);



?>



<?php

try {
    $host = "fdb1033.awardspace.net";
    
    $user = "4428097_auth";
    $password = "admin123(*)";
 $dbname = "4428097_auth";
    $con = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // if($conn){
    //     echo 'Connected to DB';
    // }
} catch (PDOException $err) {
    echo $err->getMessage();
}

if (isset($_POST['login'])) {
	# code...
$username = $_POST['email'];
$password = $_POST['password'];

$stmt = $con->prepare("SELECT * FROM auth WHERE email = ?");
$stmt->execute([$_POST['email']]);
$user = $stmt->fetch();
if ($user && password_verify($password, $user['password']))
{

$username =$_POST['email'];
 
$sql = "SELECT id FROM authentication WHERE email = ? ";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();
 
// Step 3: Process the result
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $id = $row["id"];
 
    // Step 4: Display the ID


echo '<script>window.location.href="dashboard.php";</script>';
   
}
 
} else {
    $msg="Invalid credentials";
    header("location: index.php?msg=$msg");
}
}
?>




