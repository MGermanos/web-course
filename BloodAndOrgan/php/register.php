<?php
	ob_start();
	require('../include/dbInfo.php');
	session_start();

	if ($_POST["name"]==""||$_POST["email"]==""||$_POST["password"]==""){	
		header('Location: ../login_register.php');
		exit();
	}
	$name = $_POST['name'];
	$email = $_POST['email'];
	$password = hash("sha256", $_POST['password']);
	$bloodType=$_POST['bloodType'];
	$rhesus=$_POST["rhesus"];
    // to make sure that the email is not already registered
    $x = $mysqli->prepare('select email from users where email = ? ;');
	$x->bind_param('s', $email);
	$x->execute();
	$x->store_result();
	$x->bind_result($n);
	if($x->fetch()){
		$_SESSION["FailedRegister"]=true;
		header('Location: ../login_register.php');
		exit();
    }
	// add the email to the database
	$zero=0;
	$y = $mysqli->prepare('Insert INTO `users` (name,email,password,bloodType,rhesus,isBloodDonor,isOrganDonor) VALUES (?,?,?,?,?,?,?);');
	$y->bind_param("sssssii", $name, $email, $password,$bloodType,$rhesus,$zero,$zero);
	$y->execute();
	$y->store_result();
	$y->fetch();

	$msg = "Hello ".$name."!\nOn the behalf of our team we would like to welcome you to our family of life savers! \n\nBest,\nGive Life Team";
	$msg = wordwrap($msg,70);
	mail($email,"Welcome!",$msg);
	$_SESSION["FailedRegister"]=false;
	header('Location: ../login_register.php');
	exit();
    

?>