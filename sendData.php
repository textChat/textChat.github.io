<?php include("conn.php");

$username = $_GET['username'];
$email = $_GET['email'];
$password = $_GET['password'];
if(empty($username)||($email)||($password)){
  header("Location: ../signup.html?signup=empty");
  exit();
}else{
  if(!filter_var($email, FILTER_VALIDATE_EMAIL))
    header("Location: ../signup.html?signup=email");
    exit();
}else{
  $sql = "SELECT * FROM users WHERE username='$username'";
	$result = mysqli_query($conn, $sql);
	$resultCheck = mysqli_num_rows($result);

	if ($resultCheck > 0) {
    header("Location: ../signup.html?signup=usertaken");
	  exit();
  }else{      
$sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password');";
mysqli_query($conn, $sql);  
  }
