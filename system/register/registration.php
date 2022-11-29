<?php
require 'registration_func.php';

if(!empty($_SESSION["id"])){
  header("Location: ../index.php");
}

$register = new Register();

if(isset($_POST["submit"])){
  $result = $register->registration($_POST["name"], $_POST["username"], $_POST["email"], $_POST["password"], $_POST["confirmpassword"], $_POST["position"]);

  if($result == 1){
    echo
    "<script> alert('Registration Successful'); </script>";
	header("Location:../login/login.php");
  }
  elseif($result == 10){
    echo
    "<script> alert('Username or Email Has Already Taken'); </script>";
  }
  elseif($result == 100){
    echo
    "<script> alert('Password Does Not Match'); </script>";
  }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Registration</title>
	  <!--<link rel="stylesheet" href=../style.css>-->
  </head>
  <body>
	<div class="signup">
    <h2>Registration</h2>
    <form class="" action="" method="post" autocomplete="off">
	  <p>
      <label for="">Name: </label>
      <input type="text" name="name" id="name" required value=""> 
	  </p>
		
	  <p>
      <label for="">Username: </label>
      <input type="text" name="username" id="username" required value=""> 
	  </p>
		
	  <p>
      <label for="">Email: </label>
      <input type="email" name="email" id="email" required value="">
      </p>
		
      <p>
      <label for="">Password: </label>
      <input type="password" name="password" id="password" required value=""> 
	  </p>
		
	  <p>
      <label for="">Confirm Password: </label>
      <input type="password" name="confirmpassword" id="confirmpassword" required value=""> 
	  </p>
		
      <button type="submit" name="submit">Register</button>
	  <p class="small">Already have an account? <a href="../login/login.php">LOGIN HERE!</a></p>
    </form>
	</div>
  </body>
</html>
