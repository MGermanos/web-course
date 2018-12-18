<?php
session_start();
require("./dbInfo.php");
foreach($_SESSION as $key =>$element){
  unset($_SESSION[$key]);
}
header('Location: ../login_register.php');
 ?>
