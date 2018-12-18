<?php 
ob_start();
require(".\include\dbInfo.php");
session_start();
require(".\include\checklogin.php");
require(".\include\dumpUser.php");

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Welcome!</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/styleHome.css" media="screen" title="no title">
    <script type="text/javascript" src="./javascript/index.js" defer></script>
    
  </head>
  <body>
    <!-- Start of header for PC-->
    <div class="header">
    <div><a  href="#profile">Profile</a></div>
    <div><a  href="#register">Register</a></div>
    <div><a  href="#donate">Donate</a></div>
    <div><a  href="#request">Request</a></div>
    </div>
    <!-- Header for phones -->
    <div class="header1">
    <div><a class="icon" href="#profile"> <img src="./images/home.PNG"/> </a></div>
    <div><a class="icon" href="#register"> <img src="./images/add.PNG"/> </a></div>
    <div><a class="icon" href="#donate"> <img src="./images/donate.PNG"/> </a></div>
    <div><a class="icon" href="#request"> <img src="./images/request.PNG"/> </a></div>
  </div>
<img class="change-color" id="donate-blood"src="./images/donateBlood1.jpg"/>
<hr>


<!---------------- Start of profile --------------------->
<h1 class="p">Your Profile</h1>
<div id="profile">

  <div>
  <img src="./images/images1.png" /> 
</div>
<div>
  <br>
  Hello <?php echo $_SESSION['name']?>!
   <br>
  So far, your score is <?php echo $_SESSION['score']?> in saving lives <br>

  <span id="registered-blood" class = <?php if ($_SESSION['bloodDonor']==0)
  echo "";
  else{
    echo "hide";
  } ?> >You are not a regisered blood donor. Register below and save lives!</span> <br>
  <span id="registered-organs" class = <?php if ($_SESSION['organDonor']==0)
  echo "";
  else{
    echo "hide";
  } ?> 
  >You are not a registered organ donor. Register below and save lives!</span>
  <form action="./include/logout.php">
  <button class="b1" type="submit">LogOut</button>
  </form>
</div>
  </div>
  <hr>

  <!-- End of profile -->
  <!-- Start of register -->

<div id="register" class="change-color 
 <?php 
 if($_SESSION['organDonor']==1 && $_SESSION['bloodDonor']==1)
{
echo "hide";
};
 ?>">
  <div id="highlight">
  <h1>Register now</h1>
  <div class=<?php if ($_SESSION['bloodDonor']==0)
  echo "";
  else{
    echo "hide";
  } ?> >
<h2>Become a blood donor</h2>
Fill <a class="#" onclick="rb();"  href="#">THIS FORM</a> to become an official blood donor
<form class="registerBlood hide" action="./php/bloodDonation.php" method="POST">

<label for="age"><h4>age:</h4></label>
  <input name="age" type="number"  style="width: 50px"
       placeholder="16" step="1" /><br>
      have you gotten a tattoo or piercing in the last 6 months
       <select name="tattooed">
          <option  value="true">YES</option>
          <option  value="false">NO</option>
        </select><br>
      are you on any kind of anitbiotics
       <select name="antibiotics">
          <option  value="true">YES</option>
          <option  value="false">NO</option>
        </select>
        <br>
      have you traveled to africa in the last 5 years
       <select name="africa">
          <option  value="true">YES</option>
          <option  value="false">NO</option>
        </select>
        <br>
        <br>
       <button class="b1" type="submit">register as blood donor</button>
</form>
</div>
<div class=<?php if ($_SESSION['organDonor']==0)
  echo "";
  else{
    echo "hide";
  } ?> >
<h2>Give Life to others</h2>
Fill <a class="#"  onclick ="ro();" href="#">THIS FORM</a> to become an official organ donor

<br>
<form class="registerOrgan hide" action="./php/organDonation.php" method="POST">
<label for="age"><h4>age:</h4></label>
  <input name="age" type="number"  style="width: 50px"
       placeholder="10" step="1" /><br>
      would you like to donate your kidneys
       <select name="kidney">
          <option  value="true">YES</option>
          <option  value="false">NO</option>
        </select> <br>
        would you like to donate your heart 
       <select name="heart">
          <option  value="true">YES</option>
          <option  value="false">NO</option>
        </select> <br>
        would you like to donate your lungs 
       <select name="lung">
          <option  value="true">YES</option>
          <option  value="false">NO</option>
        </select> <br>
        would you like to donate your pancreas 
       <select name="pancreas">
          <option  value="true">YES</option>
          <option  value="false">NO</option>
        </select><br>
        <br>
        <button class="b1" type="submit">register as organ donor</button>
</form>
</div>
  </div>
  <hr>
</div>

  
<!-- End of register -->
<!-- Start of donate -->
<h1 class="p">Donate Blood</h1>
<div id="donate">

<div>
  <h2 style="text-align: start">Benefits of donating blood:</h2>
  <ul>
    <li>reduced stress</li>
    <li>improved emotional well-being</li>
    <li>improved physical health</li>
    <li>Lower risk of heart disease</li>
    <li>Lower risk of cancer</li>
  </ul>
</div>
<div class="disapear">
  <img src="./images/heart.png"/>
</div>
</div>
<form style="text-align: center" action="./php/addDonation.php" method="POST">
  <label for="unit"><h4>Units Donated (Liters):</h4></label>
  <input name="unitsDonated" type="number"  style="width: 50px"
       placeholder="0.5L increments" step="0.5" /><br>
       <button class="b1" type="submit">Add to my donations</button>
  </form>

</div>
<hr>

<!-- End of donate -->


<!-- Start of request -->
<h1 class="p">Request blood or organ delivery</h1>
<div id="blood" style="text-align: center">

<form style="text-align: center" action="./php/orderBlood.php" method="POST">
  Please enter the blood type
   <select name="type">
    <option value="O">O</option>
    <option value="A">A</option>
    <option value="B">B</option>
    <option value="AB">AB</option>
  </select>

  ,  the rhesus <select name="rhesus">
  <option value="pos">+</option>
  <option value="neg">-</option>
  </select>
  , and the minimum number of units
  <input  style="width: 50px"  type="number" id="requestUnit" name="unit"
       placeholder="Units" step="0.5" /><br>
  <button class="searchButton" type=submit>Search</button>
  <br>


  <br>
  </form>

  <?php

if(isset($_SESSION['bloodRequestQuery'])){
  $arr=$_SESSION['bloodRequestQuery'];
}
else{
  $arr=0;
}

if($arr!=0){
  if(count($arr)==0){
    echo "<span>we did not find any units that match your demand in our database</span>";
  }
  else{
echo "
<form action='./php/makeBloodOrder.php' method='POST'>
<table style='align-self: center' >
  <tr>
    <th>Select</th>
    <th>email of donor</th>
    <th>BloodType</th> 
    <th>Units</th>
  </tr>
  <tr>";
  for($i=0;$i<count($arr);$i=$i+5) {
    echo "<tr>";
    echo "<td><input type='radio' name='id' value=". $arr[$i] ."></td>";

       echo "<td>".$arr[$i+1]."</td>";
       echo "<td>".$arr[$i+2]." " .$arr[$i+3]."</td>";
       echo "<td>".$arr[$i+4]."</td>";
       echo "</tr>";
   }
echo "</table>
<br>
<button type='submit' class='b1'>Request</button>";
unset($_SESSION['bloodRequestQuery']);
echo "</form>";
  }
  }
?>

</div>
<br>

<div id="organ"  style="text-align: center">

  <form style="text-align: center" action="./php/orderOrgan.php" method="POST">
    Please enter the blood type
    <select name="type">
      <option value="O">O</option>
      <option value="A">A</option>
      <option value="B">B</option>
      <option value="AB">AB</option>
    </select>

    ,  the rhesus <select name="rhesus">
    <option value="pos">+</option>
    <option value="neg">-</option>
    </select>
    , and the organ
    <select name="organ">
      <option value="heart">heart</option>
      <option value="lung">lung</option>
      <option value="kidney">kidney</option>
      <option value="pancreas">pancreas</option>
    </select>

    <button class="searchButton" type=submit>Search</button>
    <br>
    </form>


    <?php

    if(isset($_SESSION['organRequestQuery'])){
    $arr=$_SESSION['organRequestQuery'];
    }
else{
  $arr=0;
}

if($arr!=0){
  if(count($arr)==0){
    echo "<span>we did not find any organ that matches your demand in our database</span>";
  }
  else{
echo "
<form action='./php/makeOrganOrder.php' method='POST'>
<table style='align-self: center'>
  <tr>
    <th>Select</th>
    <th>email of donor</th>
    <th>BloodType</th> 
    <th>Organ</th>
  </tr>
  <tr>";
  for($i=0;$i<count($arr);$i=$i+5) {
    echo "<tr>";
    echo "<td><input type='radio' name='id' value=". $arr[$i] ."></td>";
       echo "<td>".$arr[$i+1]."</td>";
       echo "<td>".$arr[$i+2]." " .$arr[$i+3]."</td>";
       echo "<td>".$arr[$i+4]."</td>";
       echo "</tr>";
   }
echo "</table>
<br>
<button type='submit' class='b1'>Request</button>";
unset($_SESSION['bloodRequestQuery']);
echo "</form>";
  }
  }
?>
</div>
<br>
<!-- End of request -->
<footer>
Manuella Germanos
</footer>
</body>
</html>