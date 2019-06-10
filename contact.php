<?php 

    if(isset($_POST['submit']))
		
	
	{
		
		$to         = "ashim.ujjwal619@gmail.com";
		
		$from_name  = $_POST['name'];
		
		$contact    = $_POST['contact'];
		
		$email      = $_POST['email'];
		
		$message    = $_POST['message'];
		
		$headers    = "From:{$from_name}{$contact}{$email}{$message}";
		
		$result     = mail($to, $contact , $message ,$headers);
		
		if(!$result)
		{
			echo "Failed";
			
		}
		else
		{
			echo "SENT.";
		}
    
    }
	 

 
?>

<!DOCTYPE html>
<html lang="en">

<head>

<link rel = "stylesheet"  type = "text/css" href = "css/bootstrap.min.css">

    <title>|| CONTACT ||</title>

 </head>
       
     <body>
   
     
     
             
<a href= "index.php" target= "_self" alt= "vote" title= "Home">
<center><img src="image/header1.jpg" alt="evoting" width="770" height="210"></center></a>
                    
                    <ul align="center">
        <a href="index.php"> |  Home  |</a>
		
		<a href="registration.php">|  Sign Up  |</a>
		
		<a href="login.php"> |  Vote Now |</a>
		
		<a href="login.php" >|  Log In  |</a>
		
	
	</ul>	
    <p style="text-align:center; color:#FF0000;"><strong><marquee  behavior="scroll">THIS REGISTRATION FORM IS FOR ELIGIBLE INDIAN WHO ARE ABOVE 18 YEARS OF AGE. </marquee></strong></p>
	<script src = "js/bootstrap.min.js" type = "text/javascript"></script>
             
<form name="sentMessage" id="contactForm" method= "post" autocomplete="on" action="contact.php">

<div class="form-group">

<label for="name">Your Name:</label>
<input type="text" name="name" class="form-control" placeholder="Your Name" id="name" required data-validation-required-message="Please enter your name.">
</div>
<div class="form-group">
<label for="email">Your Email:</label>                           
<input type="email" name="email" class="form-control" placeholder="Your Email" id="email" required data-validation-required-message="Please enter your email address.">
</div>
<div class="form-group">
<label for="phone">Your Phone:</label>  
<input type="text" name="contact" class="form-control" placeholder="Your Phone" id="phone" required data-validation-required-message="Please enter your phone number.">
</div>
<div class="form-group">
<label for="message">Your Message:</label>                            
<textarea name="message" class="form-control" placeholder="Your Message *" id="message" required data-validation-required-message="Please enter a message."></textarea>
</div>                                                       
<input type="submit" name= "submit" value = "Send Message" class= "btn btn-success">
</form>
       




<footer>
   
        <p>E-Voting  &copy; 2019 </p>
      
</footer>



</body>

</html>
