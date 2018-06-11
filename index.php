<?php
    session_start();
  
  $username = "user";
  $password = "pass";
  
  if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true)
  {
	  header("Location: success.php");
  }

  if(isset($_POST['username']) && isset($_POST['password']))
  {
	  if($_POST['username'] == $username && $_POST['password'] == $password)
	  {
		  $_SESSION['logged_in'] = $_POST['username'];
		  header("Location: success.php");
	  }
  }
?>
<!DOCTYPE HTML>
<html>
  <body>
	  <form method="post" action="index.php">
		  Username: <br/>
		  <input type="text" name="username"><br/>
		  Password: <br/>
		  <input type="password" name="password"><br/>
		  <input type="submit" value="login!">
	  </form>
	  <?php
	  //print_r($_SESSION);
	  //print_r($_POST);
	  ?>
  </body>
</html>