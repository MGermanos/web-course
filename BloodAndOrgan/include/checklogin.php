<?php
require("dbInfo.php");
ob_start();
if(!isset($_SESSION["logedIn"]) || !($_SESSION["logedIn"])   ){
	header('Location: ../index.php');
}
 ?>
