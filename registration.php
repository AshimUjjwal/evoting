<?php

    include("connect.php");
	
	include("functions.php");

	include("captcha.php");

	
    
    if(isset($_POST['submit']))
    {
	   $firstname= mysqli_real_escape_string($con,$_POST['fname']);

	   $lastname= mysqli_real_escape_string($con,$_POST['lname']);
       
	   $email= mysqli_real_escape_string($con,$_POST['email']);

	   $voter_id= mysqli_real_escape_string($con,$_POST['card']);

	   $aadhar_id= mysqli_real_escape_string($con,$_POST['cards']);
	   
	   $password= mysqli_real_escape_string($con,$_POST['password']);
	   
	   $passwordConfirm=mysqli_real_escape_string($con,$_POST['passwordconfirm']);
	   
	   $gender= isset($_POST['gender']);
	   
	   $date= date("d D,F Y");

	   $time = date("h:i:s");
	   
	   $keep = isset($_POST['conditions']);

	   //you can use <mark>"keep or conditions"</mark> whatever you like for agree with term and conditions feature..
	   
	    if(strlen($firstname) < 3)
	    { 
			echo "<script>alert('First Name is too short')</script>";
		
		}
		if(strlen($lastname) < 3)
	    { 
			echo "<script>alert('Last Name is too short')</script>";
		
		}
		else if(firstname_exists($firstname,$con))
		{
			echo "<script>alert('Already registered with this First Name')</script>";
		}
		else if(lastname_exists($lastname,$con))
		{
			echo "<script>alert('Already registered with this Last Name')</script>";
		}
		else if(!filter_var($email,FILTER_VALIDATE_EMAIL))
	    {
	    echo "<script>alert('Please Enter a valid E-mail address')</script>";
		}
		else if(email_exists($email,$con))
		{
			echo "<script>alert('Already registered with this email address')</script>";
		}
		else if(strlen($voter_id) < 9)
	    {
	     echo "<script>alert('Invalid Voter Id Number')</script>";
		}
		else if(voter_exists($voter_id,$con))
	    {
	     echo "<script>alert('Already registered with this Voter id.')</script>";
		}
		else if(strlen($aadhar_id) < 12)
	    {
	     echo "<script>alert('Invalid Aadhar Number')</script>";
		}
		else if(aadhar_exists($aadhar_id,$con))
	    {
	     echo "<script>alert('Already registered with this Aadhar id.')</script>";
		}
	    else if(strlen($password) < 8)
	    {
	     echo "<script>alert('Password must be greater than 8 characters')</script>";
	    }
	    else if($password !== $passwordConfirm)
	    {
			echo "<script>alert('Password does not match')</script>";
	    }
        else if(!$keep)
		{
			echo "<script>alert('You have to agree with terms and conditions')</script>";
		}
		else
		{
	       $password = md5($password);
		     $insertQuery = "INSERT INTO voter(firstname,lastname,email,voter_id,aadhar_id,password,gender,date,time) 
			 VALUES('$firstname','$lastname','$email','$voter_id','$aadhar_id','$password','$gender','$date','$time')";
		     if(mysqli_query($con, $insertQuery))
		        
			      {
				    echo "<script>alert('Successfully registered')</script>";
			      }
		}
	
	}

?>


<!DOCTYPE html>

 <html lang= "en-us">

 <head>

  
 <link rel = "stylesheet"  type = "text/css" href = "css/bootstrap.min.css">
 <script src="https://www.google.com/recaptcha/api.js?render=6LfphZYUAAAAAHuw9ZHnzGyWOmICTUUhP_7p-fQ6"></script>

 <title>|| SIGN UP ||</title>

 </head>

 <body>

 <a href= "index.php" target= "_self" alt= "vote" title= "Home">
 <img src="image/header1.jpg" alt="evoting" width="770" height="210" align = "middle" title = Home></a>

	<ul align = "center">
		  <a href="index.php"> |  Home  |</a>
		  
		  <a href="login.php"> |  Vote Now |</a>
		
		  <a href="login.php" >|  Log In  |</a>
		  
		  <a href="contact.php" >|  Contact Us  |</a>
    </ul>	
		 

    <p style="text-align:center; color:#FF0000;"><strong><marquee  behavior="scroll">THIS REGISTRATION FORM IS FOR ELIGIBLE INDIAN WHO ARE ABOVE 18 YEARS OF AGE. </marquee></strong></p>

          
          
    <script src = "js/bootstrap.min.js" type = "text/javascript"></script>
 

 

 <div class="form-group">
    

</div>
 
<form method="post" action="registration.php" enctype="multipart/form-data" autocomplete= "on">
 
 <div class="form-group">

 <label for="first">First Name:</label>
    
    <input type="text" class="form-control" name="fname" required placeholder = "Enter Your First Name">

</div>


<label for="last">Last Name:</label>
    
    <input type="text" class="form-control" name="lname" required placeholder = "Enter Your Last Name">

</div>

<div class="form-group">
<label for="email">Email:</label>
    
    <input type="text" class="form-control" name="email" required placeholder = "Enter email">

</div>

<div class="form-group">

 <label for="voter">Voter Id No. :</label>
    
    <input type="text" class="form-control" name="card" required placeholder = "Enter Voter Id Card No.">

</div>

<div class="form-group">

 <label for="aadhar">Aadhar Id No. :</label>
    
    <input type="number" class="form-control" name="cards" required placeholder = "Enter Aadhar Id Card No.">

</div>

<div class="form-group">

<label for="pwd">Password:</label>
    
    <input type="password" class="form-control" name="password" required placeholder = "Enter password">

</div>

<div class="form-group">
<label for="pwd">Confirm Password:</label>
    
    <input type="password" class="form-control" name="passwordconfirm" required placeholder = "Re-enter password">

</div>

<div class="form-group">

<label for="sex">Gender:</label>

<input type= "radio" name= "gender" value= "Male" required> Male 
 
<input type= "radio" name= "gender" value= "Female" required> Female
    
</div>


<div class="g-recaptcha">
<input type = "hidden" data-sitekey="6LfphZYUAAAAAHuw9ZHnzGyWOmICTUUhP_7p-fQ6" id = "g-recaptcha-response" name = "g-recaptcha-response">
</div>

<div class="form-group form-check">
    <label class="form-check-label">
    <input class="form-check-input" type="checkbox" name = "conditions">By clicking Sign Up, you agree to our Terms, Data Policy and Cookie Policy.
    </label>
</div>

<input type = "submit" name = "submit" value = "Sign Up" class = "btn btn-success">
 
</form>
<div class="container">

<hr>


<footer>
    <div class="row">
        <div class="col-lg-12">
		<p>E-Voting  &copy; 2019 </p>
        </div>
    </div>
</footer>

</div>
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
	

    
</body>
</html>
