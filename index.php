<?php
include('login.php'); // Includes Login Script
if(isset($_SESSION['login_user'])){
header("location: profile.php"); // Redirecting To Profile Page
}
?>
<!DOCTYPE html>
<html>
<head>
<title>admin login</title>
<link rel="stylesheet" href="style.css">

</head>
<body>
	
	<div class="box">
	    <h2>Login</h2>
	    <form class="form" action="" method="POST" autocomplete="off">
	    	<div class="input-box">
		        <input id="name" name="username" type="text" required>
		        <label for="">Username</label>
	      	</div>
	      	<div class="input-box">
		        <input  name="password" type="password" required>
		        <label for="">Password</label>
	      	</div>
		        <input class="login" name="submit" type="submit" value=" Login ">
		        <span><?php echo $error; ?></span>
	    </form>
  	</div>

  	
</body>
</html>