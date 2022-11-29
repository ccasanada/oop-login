<?php

include ('../../connection.php');

class Register extends Connection{
  public function registration($name, $username, $email, $password, $confirmpassword, $position){
    $duplicate = mysqli_query($this->conn, "SELECT * FROM tblaccount WHERE username = '$username' OR email = '$email'");
    if(mysqli_num_rows($duplicate) > 0){
      return 10;
      // Username or email has already taken
    }
    else{
      if($password == $confirmpassword){
        $query = "INSERT INTO tblaccount VALUES('', '$name', '$username', '$email', '$password', '$position')";
        mysqli_query($this->conn, $query);
        return 1;
        // Registration successful
      }
      else{
        return 100;
        // Password does not match
      }
    }
  }
}

?>