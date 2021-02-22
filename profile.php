<?php
include('session.php');
// include('conn.php');
if(!isset($_SESSION['login_user'])){
header("location: index.php"); 
}
?>
<html>
<head>
	<meta charset="UTF-8">
	<title>profile</title>
</head>
<body>
	<p>login sucess</p>
	<br>
	<b id="logout"><a href="logout.php">Log Out</a></b>
</body>
</html>