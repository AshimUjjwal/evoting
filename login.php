
<?php

  include("connect.php");
  include("captcha.php");
  include("functions.php");

  if(logged_in())
		
		{
			header("location:profile.php");
			exit();
		}
  
  if(isset($_POST['submit']))
  {
	 $email=mysqli_real_escape_string($con,$_POST['email']);
	 $password=mysqli_real_escape_string($con,$_POST['password']);
	 $checkBox= isset($_POST['keep']);
	 
	 if(email_exists($email,$con))
	 
	    {
	  
	  
	     $result= mysqli_query($con, "SELECT password FROM voter WHERE email= '$email'");
	     $retrievepassword= mysqli_fetch_array($result);
	  
	  
	     if(md5($password) !==  $retrievepassword['password'])
	       {
		    echo "<script>alert('Password is incorrect')</script>";  
		   }
	       else
		
		   {
			  $_SESSION['email']= $email;
			
			   if($checkBox == "on")
			  {
				setcookie("email",$email,time()+3600);
			  }
			
			  header("location:profile.php");
			
		   }
	   }
	  
	   else
	    {
		echo "<script>alert('Wrong E-mail Address.')</script>";
		
        }
	}
?>
	<!DOCTYPE html>

 <html lang= "en-us">

 <head>

 <link rel = "stylesheet"  type = "text/css" href = "css/bootstrap.min.css">
 
 <script src="https://www.google.com/recaptcha/api.js?render=6LfphZYUAAAAAHuw9ZHnzGyWOmICTUUhP_7p-fQ6"></script>

 <title>|| LOG IN ||</title>

 </head>

 <body>

 <script src = "js/bootstrap.min.js" type = "text/javascript"></script>

 <a href= "index.php" target= "_self" alt= "vote" title= "Home">
 <center><img src="image/header1.jpg" alt="evoting" width="770" height="210" align="middle"></center></a>

	<ul align = "center">
		  <a href="index.php"> |  Home  |</a>
		   
		  <a href="registration.php"> |  Sign Up  |</a>
		
		  <a href="login.php" >|  Log In  |</a>
		  
		  <a href="contact.php" >|  Contact Us  |</a>
    </ul>	
		 

    <p style="text-align:center; color:#FF0000;"><strong><marquee  behavior="scroll">THIS REGISTRATION FORM IS FOR ELIGIBLE INDIAN WHO ARE ABOVE 18 YEARS OF AGE. </marquee></strong></p>
	<script src = "js/bootstrap.min.js" type = "text/javascript"></script>
	<form method="post" action="login.php">          
 
 <div class="form-group">
 
 <label for="email">Email:</label>
    
 <input type="text" class="form-control" name="email" required placeholder = "Enter email">

 </div>

<div class="form-group">

<label for="pwd">Password:</label>
    
    <input type="password" class="form-control" name="password" required placeholder = "Enter password">

</div>
<div class="g-recaptcha">
<input type = "hidden" data-sitekey="6LfphZYUAAAAAHuw9ZHnzGyWOmICTUUhP_7p-fQ6" id = "g-recaptcha-response" name = "g-recaptcha-response">
</div>
 
<div class="form-group form-check">
    <label class="form-check-label">
      <input class="form-check-input" type="checkbox" name = "conditions"> Remember Me
    </label>
  </div>


<input type = "submit" name = "submit" value = "Sign In" class = "btn btn-success">
 </form>
 <script>
  grecaptcha.ready(function() {
      grecaptcha.execute('6LfphZYUAAAAAHuw9ZHnzGyWOmICTUUhP_7p-fQ6', {action: 'homepage'})
	  .then(function(token) 
	  {
		//console.log(token);
		document.getElementById('g-recaptcha-response').value = token;
      });
  });
  </script>   
          
        
    

<footer>
 
		<p>E-Voting  &copy; 2019 </p>
   
</footer>


    
</body>
</html>