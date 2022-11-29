<?php
require 'login_func.php';

if(!empty($_SESSION["id"])){
  header("Location: ../index.php");
}

$login = new Login();

if(isset($_POST["submit"])){
  $result = $login->login($_POST["usernameemail"], $_POST["password"]);

  if($result == 1){
    $_SESSION["login"] = true;
    $_SESSION["id"] = $login->idUser();
    header("Location: ../index.php");
  }
  elseif($result == 10){
    echo
    "<script> alert('Wrong Password'); </script>";
  }
  elseif($result == 100){
    echo
    "<script> alert('User Not Registered'); </script>";
  }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
	  <!--<link rel="stylesheet" href=../style.css>-->
  </head>
  <body>
    <div class="login">
	<h2>Login</h2>
    <form class="" action="" method="post" autocomplete="off">
	  <p>
      <label for="">Username or Email : </label>
      <input type="text" name="usernameemail" required value=""> <br>
      </p>
	  <p>
	  <label for="">Password</label>
      <input type="password" name="password" required value=""> <br>
	  </p>
      <button type="submit" name="submit">Login</button>
    
    <br>
	<p class="small">Doesn't have an account? <a href="../register/registration.php">REGISTER HERE!</a></p>
	</form>
    </div>
  </body>
</html>
