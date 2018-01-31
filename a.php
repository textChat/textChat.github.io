<?php include("conn.php");



$username = htmlspecialchars($_GET['username']);

$email = htmlspecialchars($_GET['email']);

$password = htmlspecialchars($_GET['password']);

if(empty($username)||($email)||($password)){

  header("Location: ../index.html?signup=empty");

  exit();

}else{

  if(!filter_var($email, FILTER_VALIDATE_EMAIL)){

    header("Location: ../index.html?signup=email");

    exit();

}else{

  	$sql = "SELECT * FROM user WHERE username='$username'";

	$result = mysqli_query($conn, $sql);

	$resultCheck = mysqli_num_rows($result);



	if ($resultCheck > 0) {

    header("Location: ../index.html?signup=usertaken");

	  exit();

  }else{      

$sql = "INSERT INTO user (username, email, password) VALUES ('$username', '$email', '$password');";

mysqli_query($conn, $sql);
		exit();  
		}
?>
