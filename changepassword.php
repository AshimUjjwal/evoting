<?php


   include("connect.php");
   include("functions.php");
   
	if(isset($_POST['savepass']))
	{
		
		$newpassword = $_POST['newPassword'];
		$confirmPassword = $_POST['passwordConfirm'];
		
	
		if(strlen($newpassword) < 8)
		{
			echo "<script>alert('Password length must be greater than 8 characters.')</script>";
	
		}	
	else if($newpassword !== $confirmPassword)
	{
		echo "<script>alert('Password does not matched.')</script>";
		
	}
	else
		
		{
			$newpassword = md5($newpassword);
			$email = $_SESSION['email'];
			if(mysqli_query($con, "UPDATE voter SET password = '$newpassword' WHERE email= '$email'"))
			{
				echo "<script>alert('Password changed Successfully.')</script>";
			}
		}
		
		
	}
   
   if(logged_in())
	   
	{
		   
	   ?>
	   
	   <!DOCTYPE html>
		 
		 <html lang ="en-us">
		 
		 <head>
		 
		 <title> || CHANGE PASSWORD || </title>
		 <link rel = "stylesheet"  type = "text/css" href = "css/bootstrap.css">
		 
		 </head>
		 
		 <body>
		 <script src = "js/bootstrap.js" type = "text/javascript"></script>  
		 <a href="logout.php" class="btn btn-danger pull-right" pull-right>Log Out</a>
		 
		 
         <a href="profile.php" target="_self">
		 <center><img src="image/header1.jpg" alt="" width="770" height="210" title="Profile"></center></a>
         
	     <ul align="middle">
		 <a href='profile.php'> ||  Profile  || </a>
		 </ul>
		
	   
	<center><form method = "post" action = "changepassword.php">
	   
	   <div class="form-group">

       <label for="pwd">New Password:</label>
    
       <input type="password" class="form-control" name="newPassword" required placeholder = "Enter password">

       </div> 
	   
	   <div class="form-group">
       
	   <label for="pwd">Confirm Password:</label>
    
       <input type="password" class="form-control" name="passwordConfirm" required placeholder = "Re-enter password">

       </div>

	 
	   
	   <input type = "submit" name = "savepass" value = "Save Changes" class = "btn btn-success">
	   
	   
	   </form></center>

	   
	   
	  
	   </body>
	   </html>
	   <?php 
	   
	   }else
		   
		   {
			   header("location:profile.php");
		   }
   
   ?>
    

    