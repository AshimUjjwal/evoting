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

<body> 


<a href = "changepassword.php" style="float:right; padding:5px; margin-right:20px; background-color:silver; color:black; text-decoration:none">Change Password</a><br><br>
<a href = "logout.php" style="float:right; padding:5px; margin-right:20px; background-color:silver; color:black; text-decoration:none;">Log Out</a>



<a href = "index.php" target = "_self" alt ="Profile" title = "Home">
<center><img src="image/header1.jpg" alt="" width="770" height="210"></center></a>
  
	<ul align="middle">
		<a href="index.php"> |  Home  |</a>
		
        <a href="result.php">|  Result  |</a>
	</ul>
              
             
              <h1 align="middle">Lok Sabha Election</h1>
			  
			  <a href= "leader.php"><center>VOTE NOW</center></a>
    

			  <div class="container">

<hr>
<footer>
    <div class="row">
        <div class="col-lg-12">
		&nbsp;
		&nbsp;
		&nbsp;
		&nbsp;
		&nbsp;
		&nbsp;
		&nbsp;
		&nbsp;
		&nbsp;
		&nbsp;
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