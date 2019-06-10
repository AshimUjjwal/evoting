<?php
  
  $con = mysqli_connect("localhost","root","","evoting");
   
   if(isset($_COOKIE['vote']))
   {
	   
	   echo "You can't vote again until next election is held.";
	   
   }
   
   else
   {
	   
   
   
   if(isset($_POST['submit']))
   {   
   
    $name = 'vote';
	
	$value = 'true';
	
	setcookie($name,$value,time()+(5*365*24*60*60));
	
	$n_modi = mysqli_query($con, "UPDATE election_votes SET n_modi= n_modi+1");
	
	if($n_modi)
	{
		
		echo "<script>alert('Your vote is cast for BJP.')</script>";
		
	}
   
   }
   
   if(isset($_POST['submit2']))
   {   
    $name = 'vote';
	
	$value = 'true';
	
	setcookie($name,$value,time()+(5*365*24*60*60));

	$r_gandhi = mysqli_query($con, "UPDATE election_votes SET r_gandhi= r_gandhi+1");
	
	if($r_gandhi)
	{
		
		echo "<script>alert('Your vote is cast for CONGRESS.')</script>";
		
	}
   }

}


?>

<!DOCTYPE html>
<html>

<head>

<title>|| ELECTION SYSTEM ||</title>
<style>

table, th, td 
{
    border: 1px solid orange;
    border-collapse: collapse;
}
th, td 
{
    padding: 5px;
    text-align: center;
}
</style>

</head>

<body align="center">

<a href = "changepassword.php" style="float:right; padding:5px; margin-right:20px; background-color:silver; color:black; text-decoration:none">Change Password</a><br><br>

<a href = "logout.php" style="float:right; padding:5px; margin-right:20px; background-color:silver; color:black; text-decoration:none;">Log Out</a>

<img src="image/header1.jpg" alt="" width="770" height="210"><br><br>
   
	<ul>
         
		 <a href="index.php"> |  Home  |</a>
		 
		 <a href="profile.php"> |  Profile  |</a>
		
		  <a href="result.php">|  Result  |</a>
		
	
	
	</ul>
    
	<p style="text-align:center; color:#FF0000;"><strong><marquee  behavior="scroll">
    THIS VOTING SYSTEM IS FOR ELIGIBLE INDIAN WHO ARE ABOVE 18 YEARS OF AGE. 
    </marquee></strong></p>

         <form method= "post" action = "leader.php">
    
         <table style= "width:70%;margin-left:15%">
            <tr>
              
			  <th>IMAGE<th>
			  <th>CANDIDATE NAME</th>
              <th>PARTY</th>
			  <th>VOTE NOW</th>
             
            </tr>
            
			<tr>
              
			  <td><img src="image/pm-modi-will-visit-iran-niharonline.jpg" alt="" width="177" height="218"></td>
              <td>&nbsp;</td>
			  <td>MR. NARENDRA MODI </td>
			  <td>BJP</td>
			  <td><input type="submit" name="submit" value="VOTE" ></td> 
		   
		    </tr>
             
			  
			<tr>
              
			  <td><img src="image/4074.jpg" alt="" width="180" height="182"></td>
              <td>&nbsp;</td>
			  <td>MR.RAHUL GANDHI</td>
			  
			  
			  <td>CONGRESS</td>
			  
              
			  
              
			  <td><input type="submit" name="submit2" value="VOTE" ></td>
			
			</tr>
			
          
		  </table>
		  
		  </form>
      
		  <div class="container">

<hr>


<footer>
    <div class="row">
        <div class="col-lg-12">
            <p>E-Voting 2019 &copy; </p>
        </div>
    </div>
</footer>

</div>

	  </body>

	  </html>
	  
	  
	
