<!DOCTYPE html>
<html>
	<head>
	<link rel="stylesheet" type="text/css" href="Horizontal.css">
<link href="https://fonts.googleapis.com/css?family=Cairo|Caveat|Crete+Round|Lobster" rel="stylesheet">
	</head>
  <style>
    body
    {
        background-image:url("images/yellow.jpg");
        background-repeat:no-repeat;
        background-size: cover;
        margin-left:200px;
        margin-right:200px;
        margin-top:100px;
    }
    .button1
    {
      
    }

    p
     {
      
      text-align: center;
      font-size: 35px;
      font-family: 'Caveat', cursive;

      
    }
    .pwork
     {
        margin-top: 200px;
      font-family: 'Lobster', cursive;
      font-size: 35px;
      
    }

  



  </style>
	<body>
  <!-- 
	<center><img src="images/scholarship.jpg" width="86%" height="86%"></center> -->
		<ul>
  			<li style="float:left"><a class="active"href="Home.php">Home</a></li>
  			<li><a href="">About</a></li>
  			<li><a href="Signin.php">Application</a></li>
  			<li><a href="AdminLog.php">Admin</a></li>
  			<li><a href="DonorSignin.php">Donate</a></li>
        <li><a href="SponsorSignin.php">Sponsor</a></li>
  			<li><a href="contact.php">Contact Us</a></li>
  			<li><a href="">FAQ</a></li>
  			<li><a href="">Feedback</a></li>
		</ul>
  
     
                   <p class="pwork">Thanks for registring with us!!!</p> 
                 <p>  We will notify you regarding your status <br>
                    to the registered email and phone number.
                      <br> <br><br>

   </p>
  <form method="POST">
  <center><input type="submit" class="button1" name="Sponsor" value="Click Here"></center><br>

    </form>
	</body>
	

</html>
<?php 
  if (isset($_POST['Sponsor'])) {
    header("Location: home.php");
  }
 






 ?>