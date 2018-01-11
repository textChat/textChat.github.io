<?php include("conn.php");

$username = $_GET['username'];

$sql = "INSERT INTO users (username) VALUES ('$username');";
mysqli_query($conn, $sql);  
