<?php
session_start();
require("../include/dbInfo.php");
$age=(int)$_POST['age'];
if($age>=18 && $_POST['tattooed'] == "false" && $_POST['antibiotics']=="false" && $_POST['africa']=="false"){

    $x = $mysqli->prepare('update users set isBloodDonor=1 where email= ?');
	$x->bind_param('s',$_SESSION['email']);
    $x->execute();
    $msg = "Hello!\nYou are now a blood donor! \nYou're ready to save lives. \n\nBest,\nGive Life Team";
    $msg = wordwrap($msg,70);
    mail($email,"Blood Donor!",$msg);
}
else{
    var_dump($_POST);
    exit();
}

header('Location: ../index.php');
?>