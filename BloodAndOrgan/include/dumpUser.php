<?php
require(".\include\dbInfo.php");
$email=$_SESSION['email'];

$x = $mysqli->prepare('select email,isBloodDonor,isOrganDonor,bloodType,rhesus,name,score from users where email = ? ');
	$x->bind_param('s', $email);
	$x->execute();
	$x->store_result();
    $x->bind_result($e, $bd,$od,$bt,$r,$n,$s);
    if($x->fetch()){
        $_SESSION['name']=$n;
        $_SESSION['email']=$e;
        $_SESSION['bloodDonor']=$bd;
        $_SESSION['organDonor']=$od; 
        $_SESSION['bloodType']=$bt; 
        $_SESSION['rhesus']=$r;
        $_SESSION['score']=$s;
    }
?>
