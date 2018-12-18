<?php
require("..\include\dbInfo.php");
session_start();

$x = $mysqli->prepare('select idOrgan,email,bloodType,rhesus,organ from organ where bloodType = ? and rhesus = ? and organ = ? and taken=0 LIMIT 5');
$x -> bind_param('sss', $_POST['type'], $_POST['rhesus'], $_POST['organ']);
$x -> execute();
$x -> store_result();
$x -> bind_result($i,$e, $t,$r,$o);

$y=[];

while($x->fetch()){
$y=array_merge($y,[$i,$e, $t,$r,$o]);
}
$_SESSION['organRequestQuery']=$y;

header('Location: ../index.php');
exit();
 ?>