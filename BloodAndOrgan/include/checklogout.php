<?php
session_start();
ob_start();
if(isset($_SESSION["logedIn"]) && !empty($_SESSION["logedIn"])){
header("Location: ../index.php");
exit();
}

 ?>
