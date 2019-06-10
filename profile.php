<?php

    include("connect.php");
	include("functions.php");
	
	
	
	if(logged_in())
	{

		
	?>
    

<!DOCTYPE html>

<html lang= "en-us">

<head>

<title> || ELECTION || </title>

</head>

<body align= "center"> 


<a href = "changepassword.php" style="float:right; padding:5px; margin-right:20px; background-color:silver; color:black; text-decoration:none">Change Password</a><br><br>
<a href = "logout.php" style="float:right; padding:5px; margin-right:20px; background-color:silver; color:black; text-decoration:none;">Log Out</a>



<a href = "index.php" target = "_self" alt ="Profile" title = "Home"><img src="image/header1.jpg" alt="" width="770" height="210"></a>
  
	<ul>
		<a href="index.php"> |  Home  |</a>
		
        <a href="result.php">|  Result  |</a>
	</ul>
              
             
              <h1>Lok Sabha Election</h1>
			  
			  <a href= "leader.php">VOTE NOW </a>
    

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

</body>

</html>

<?php
      	  }
     else
    {
		
	 header("location:login.php");
	 exit();
	 
	
	}

?>