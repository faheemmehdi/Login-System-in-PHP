<?php
session_start(); 
include('conn.php');
$error = ''; 
if (isset($_POST['submit'])) {


// Define $username and $password
$username = $_POST['username'];
$password = $_POST['password'];
$query = "SELECT username, password from user where username=? AND password=? LIMIT 1";

$stmt = $conn->prepare($query);
$stmt->bind_param("ss", $username, $password);
$stmt->execute();
$stmt->bind_result($username, $password);
$stmt->store_result();
if($stmt->fetch()){ 
$_SESSION['login_user'] = $username;
header("location: profile.php"); 
}else{
  $error="Wrong username or password.";
  // echo "<script type='text/javascript'>alert('$error');</script>";
}
mysqli_close($conn); // Closing Connection
}

?>