<?php
require("..\include\dbInfo.php");
session_start();
$unit=(int)$_POST['unit'];
if ($unit >0){
$x = $mysqli->prepare('select idBlood,email,type,rhesus,unit from blood where type = ? and rhesus = ? and unit >= ? and taken=0 LIMIT 5');
$x -> bind_param('ssi', $_POST['type'], $_POST['rhesus'],$unit);
$x -> execute();
$x -> store_result();
$x -> bind_result($i,$e, $t,$r,$u);

$y=[];

while($x->fetch()){
$y=array_merge($y,[$i,$e, $t,$r,$u]);
}
$_SESSION['bloodRequestQuery']=$y;
}

header('Location: ../index.php');
exit();
 ?>