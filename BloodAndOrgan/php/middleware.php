<?php

session_start();
ob_start();
if(isset(!$_SESSION[is_login] || !$_SESSION['is_login'])
header('Location: ../login_register.php');

?>