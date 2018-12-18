<?php
require("..\include\dbInfo.php");
session_start();

$units=(int) $_POST['unitsDonated'];
$email=$_SESSION['email'];
$x = $mysqli->prepare('select score from users where email = ?');
	$x->bind_param('s', $email);
	$x->execute();
	$x->store_result();
	$x->bind_result($s);
    $x->fetch();
    $s=(int)$s;
    $u=$units;
    while( $units>0){
        $units=$units-0.5;
        $s=$s+1;
    }  
   


    $x=$mysqli->prepare(' UPDATE users SET score=? WHERE email=?');
    $x->bind_param('is',$s, $email);
    $x->execute();
    $x=$mysqli->prepare(' UPDATE users SET score=? WHERE email=?');
    $x->bind_param('is',$s, $email);
    $x->execute();

    $x = $mysqli->prepare('Insert INTO  blood (type,rhesus,unit,email) VALUES(?,?,?,?)');
	$x->bind_param('ssis', $_SESSION['bloodType'], $_SESSION['rhesus'], $u,$_SESSION['email']);
	$x->execute();
    
	$msg = "Hello!\nThank you for donating today! \nYou are saving lives. \n\nBest,\nGive Life Team";
    $msg = wordwrap($msg,70);
    mail($email,"Donating blood",$msg);
    
     header('Location: ../index.php');
    exit();
?>