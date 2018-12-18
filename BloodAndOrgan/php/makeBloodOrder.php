<?php
require("..\include\dbInfo.php");
session_start();

$id=(int)$_POST['id'];

$x = $mysqli->prepare('update blood set taken=1, donatedTo=? where idBlood = ?');
	$x->bind_param('si',$_SESSION['email'] ,$id);
    $x->execute();
    
    header('Location: ../index.php');
?>