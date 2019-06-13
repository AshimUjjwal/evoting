<?php

   function email_exists($email,$con)
   {
	  
	 $result=mysqli_query($con, "SELECT id FROM voter WHERE email= '$email' ");
	
     if(mysqli_num_rows($result) == 1)	
		
	
	   {
		 return true;
	   }
	
	    else
	    {
		 return false;
	    }
	
	}
    
   function voter_exists($voter_id,$con)
   {
	  
	 $result=mysqli_query($con, "SELECT id FROM voter WHERE voter_id= '$voter_id' ");
	
     if(mysqli_num_rows($result) == 1)	
		
	
	   {
		 return true;
	   }
	
	    else
	    {
		 return false;
	    }
	
	}


	
    function logged_in()
	

	{
	if(isset($_SESSION['email']) || isset($_COOKIE['email']))
		
	    {
		return true;	
		}	
		else
		{
		return false;	
		}
		
		
	}
	function aadhar_exists($aadhar_id,$con)
	{
	   
	  
 
	  $result=mysqli_query($con, "SELECT id FROM voter WHERE aadhar_id= '$aadhar_id' ");
	 
	  if(mysqli_num_rows($result) == 1)	
		 
	 
		{
		  return true;
		}
	 
		 else
		 {
		  return false;
		 }
	 
	 }
 
	
 ?>
