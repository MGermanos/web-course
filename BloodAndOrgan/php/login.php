<?php
require("..\include\dbInfo.php");
session_start();

if(isset($_POST['email'])== false ||isset($_POST['password'])== false){
     header('Location: ../login_register.php');
}

$email = $_POST['email'];
$password =  hash("sha256", $_POST['password']);

	$x = $mysqli->prepare('select email,name from users where email = ? and password = ?');
	$x->bind_param('ss', $email, $password);
	$x->execute();
	$x->store_result();
	$x->bind_result($e, $n);

	if($x->fetch()){
	$_SESSION['logedIn']=true;
	$_SESSION['name']=$n;
	$_SESSION['email']=$e;
	
	$_SESSION["failedLogin"]=false;
	header('Location: ../index.php');
	}
	else{
		$_SESSION["failedLogin"]=true;
		header('Location: ../login_register.php');
	}
