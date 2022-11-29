<?php

include ('../connection.php');

class Select extends Connection{
  public function selectUserById($id){
    $result = mysqli_query($this->conn, "SELECT * FROM tblaccount WHERE id = $id");
    return mysqli_fetch_assoc($result);
  }
}

?>