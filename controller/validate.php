<?php 
  $myusername = "Anik";
  $mypassword = "4444";
  
  if(isset($_POST['login']))
  {
	  $username = $_POST['username'];
	  $password = $_POST['password'];
	  
	  if( $username == $myusername and $password == $mypassword)
      {
		  if( isset($_POST['remember']))
          {
		    setcookie('username', $username, time()+60*60*7);
		  }
		  session_start();
		    $_SESSION['username'] = $username;
			header("location: Seller_home.php");
	  } 
      else
      {
		  echo "Username or Password is Invalid.<br> Click here to <a href='login.php'>Try again</a>";
	    }
	  
  }
  else
  {
	  header("location: login.php");
    }
  
?>