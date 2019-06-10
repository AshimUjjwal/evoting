<!DOCTYPE html>
<html>

<head>

<title>|| RESULT ||</title>


</head>

<body align=center>


<a href = "changepassword.php" style="float:right; padding:5px; margin-right:20px; background-color:silver; color:black; text-decoration:none">Change Password</a><br><br>
<a href = "logout.php" style="float:right; padding:5px; margin-right:20px; background-color:silver; color:black; text-decoration:none;">Log Out</a>



<img src="image/header1.jpg" alt="" width="770" height="210">


   
	 
	 
	 <ul>
          <a href="index.php"> |  Home  | </a>
		
		  <a href="profile.php"> |  Profile  | </a>
	
		  <a href="leader.php" > |  Vote Now  | </a>
		
		  
	 </ul>
    
	<p style="text-align:center; color:#FF0000;"><strong><marquee  behavior="scroll">
    THIS VOTING SYSTEM IS FOR ELEGIBLE INDIAN WHO ARE ABOVE 18 YEARS OF AGE. 
    </marquee></strong></p>

  <?php 

   $con = mysqli_connect("localhost","root","","evoting");
 
   $detail = mysqli_query($con,"SELECT * FROM election_votes");
   
   while($row=mysqli_fetch_assoc($detail))

   {
	 $store1 =  $row['n_modi'];
	 
	 $store2 =  $row['r_gandhi'];
	 
	 $result = $store1 + $store2;
	
	 $per_n_modi= round($store1*100/$result).'%';
	 
	 $per_r_gandhi= round($store2*100/$result).'%';
	
	
	 echo "<img src = 'image/pm-modi-will-visit-iran-niharonline.jpg' style='width:300px;height:300px'>&nbsp;&nbsp;&nbsp;&nbsp;$store1($per_n_modi)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
	
	 echo "<img src = 'image/4074.jpg' style='width:300px;height:300px'>&nbsp;&nbsp;&nbsp;&nbsp;$store2($per_r_gandhi)";
	
	
   }

   ?>
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
