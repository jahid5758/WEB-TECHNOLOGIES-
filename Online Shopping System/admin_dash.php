<?php

@include 'conn.php';

session_start();

if(!isset($_SESSION['admin_name'])){
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <link rel="stylesheet" href="adminstyle.css">
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Admin page</title>

</head>
<body>
<fieldset>
   <div>
      <h1> ONLINE SHOPPING</h1><img src="home.jpg" style=" margin:auto; display:block;" width="150" height="150">
      <h2>WELCOME <span><?php echo $_SESSION['admin_name'] ?></span></h2>
      <h3>ADMIN DASHBOARD</h3>
	   <div class="topnav-right">
      <a href="logout.php">LOGOUT</a>
	  </div>
</fieldset>
<br>
<br>
<br>
<fieldset>
 <a  href="manage_cus.php">MANAGE CUSTOMER</a>
	<br> <br>
	<a  href="manage_staff.php">MANAGE CUSTOMER</a>
	<br> <br>
	<a  href="manage_merch.php">MANAGE CUSTOMER</a>
<br> <br>
</fieldset>	  
	  

      
   </div>

</div>

</body>
</html>