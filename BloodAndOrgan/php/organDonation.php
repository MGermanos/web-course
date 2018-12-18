<?php
session_start();
require("../include/dbInfo.php");

$age=(int)$_POST['age'];
$bloodType=$_SESSION['bloodType'];
$rhesus=$_SESSION['rhesus'];
$email=$_SESSION['email'];
$vd=0;
if($age>=18){
    $score=0;
    $x = $mysqli->prepare('update users set isOrganDonor=1 where email= ?');
	$x->bind_param('s',$_SESSION['email']);
    $x->execute();

    if($_POST['heart']=="true"){
        $organ="heart";
        $x = $mysqli->prepare('Insert INTO organ (organ,bloodType,rhesus,email,taken) VALUES(?,?,?,?,?)');
	    $x->bind_param('ssssi',$organ,$bloodType,$rhesus,$email,$vd);
        $x->execute();
        $score=$score+50;
    }
    if($_POST['kidney']=="true"){
        $organ="kidney";
        $x = $mysqli->prepare('Insert INTO organ (organ,bloodType,rhesus,email,taken) VALUES(?,?,?,?,?)');
        $x->bind_param('ssssi',$organ,$bloodType,$rhesus,$email,$vd); 
        $x->execute();
        $score=$score+25;
    }
    if($_POST['lung']=="true"){
        $organ="lung";
        $x = $mysqli->prepare('Insert INTO organ (organ,bloodType,rhesus,email,taken) VALUES(?,?,?,?,?)');
        $x->bind_param('ssssi',$organ,$bloodType,$rhesus,$email,$vd);
        $x->execute();
        $score=$score+30;
    
    }
    if($_POST['pancreas']=="true"){
        $organ="pancreas";
        $x = $mysqli->prepare('Insert INTO organ (organ,bloodType,rhesus,email,taken) VALUES(?,?,?,?,?)');
        $x->bind_param('ssssi',$organ,$bloodType,$rhesus,$email,$vd);
        $x->execute();
        $score=$score+35;
    }
    $s=$_SESSION['score']+$score;
    $email=$_SESSION['email'];
    $_SESSION['score']=$s;
    $x=$mysqli->prepare(' UPDATE users SET score=? WHERE email=?');
    $x->bind_param('is',$s, $email);
    $x->execute();

    $msg = "Hello!\nThank you for registering as an organ donor! \nYou are saving lives. \n\nBest,\nGive Life Team";
    $msg = wordwrap($msg,70);
    mail($email,"Organ Donor",$msg);
    }

   header('Location: ../index.php');
?>