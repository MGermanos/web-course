<?php
ob_start();
session_start();
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login/Register</title>
    <link rel="stylesheet" href="./css/style.css" media="screen" title="no title">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="./javascript/login.js" defer ></script>

  </head>
  <body class="login">

      <form class='register-form <?php if (isset($_SESSION["FailedRegister"]) && $_SESSION['FailedRegister'])
  echo "";
  else{
    echo "hide";
  } ?> '
  action="./php/register.php" method="POST">
  <span class='invalid <?php if (isset($_SESSION["FailedRegister"]) && $_SESSION['FailedRegister'])
  echo "";
  else{
    echo "hide";
  } ?> '> Failed to register </span><br>
      <h1>Register</h1>
      <input name="name" class="i" type="text" placeholder="name"/>
      <input name = "email" class="i" type="email" placeholder="email address"/>
      <input name="password" class="i" type="password" placeholder="password"/>
        Select blood type and rhesus
        <br>
      <select name="bloodType">
          <option  value="O">O</option>
          <option  value="A">A</option>
          <option  value="B">B</option>
          <option  value="AB">AB</option>
        </select>

        <select name="rhesus">
            <option  value="pos">Positive</option>
            <option  value="neg">Neagtive</option>
          </select>
          <br>
      <br>
      <input type="submit" class="button" name="register" value="register" />
      <p class="message">Already registered? <a onclick="hideRegister();" href="#">Sign In</a></p>
    </form>

    <form class='login-form <?php if (isset($_SESSION["FailedRegister"]) && $_SESSION['FailedRegister']){
    echo "hide";}
  else{
    echo "";
  } ?>' action="./php/login.php" method="POST">

      <span class='invalid  <?php if (isset($_SESSION["failedLogin"]) && $_SESSION['failedLogin']){
    echo "";}
  else{
    echo "hide";
  } ?>'>Failed to login</span>
      <br>
        <h1>Login</h1>
      <input name="email" class="i" type="email" placeholder="email"/>
      <input name="password" class="i" type="password" placeholder="password"/>
      <button>Login</button>
      
      <p class="message">Not registered? <a onclick="hideLogin();" href="#">Create an account</a></p>
    </form>
  </div>

  <?php
  $_SESSION["failedLogin"]=false;
  $_SESSION["FailedRegister"]=false;
  ?>
  </body>
</html>
