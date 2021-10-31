<html>
<body style="background-color:tomato;">
<title>Seller Login Form</title>

<hr>
<?php

  if(isset($_COOKIE['username']) and isset($_COOKIE['password']))
  {
	  $username = $_COOKIE['username'];
	  $pass = $_COOKIE['password'];
	  echo $username;
  }

?>
  <table align="Center"> 
  <h1 style="text-align:center">Login Form</h1>
  <hr>
  <form action="validate.php" method="post" >

  <tr>
    <td><label for="username">User Name:</label></td>
    <td><input type="text" name="username" required></td>
  </tr>
  
  <tr>
    <td><label for="password">Password:</label></td>
    <td><input type="password" name="password" required></td>
  </tr>
    
  <tr><td colspan="2" align="center">
  <input type="checkbox" name="remember" value="1">
  <span style='color:darkgreen'>Remember Me</td><tr> 
  
  <tr>
    <td colspan="2" align="center"><input type="submit" value="Login" name="login"></td>
  </tr>	
	
  </form>
  </table>

   <h4 style="text-align: center;"><a href="Registration.php">Click here</a> for registration.</h4>

 </body>
</html>