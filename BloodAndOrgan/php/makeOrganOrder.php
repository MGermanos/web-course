<?php
require("..\include\dbInfo.php");
session_start();

$id=(int)$_POST['id'];

$x = $mysqli->prepare('update organ set taken=1, donatedTo=? where idOrgan= ?');
	$x->bind_param('si',$_SESSION['email'] ,$id);
    $x->execute();

    header('Location: ../index.php');
?>