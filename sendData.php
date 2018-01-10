<?php include("conn.php");

$signUp = $_GET['signUp'];

$sql = "INSERT INTO users (user) VALUES ('$signUp');";
mysqli_query($conn, $sql);  
