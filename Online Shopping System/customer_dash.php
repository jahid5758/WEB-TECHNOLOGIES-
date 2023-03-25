<?php

@include 'conn.php';

session_start();
if(!isset($_SESSION['customer_name'])){
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <link rel="stylesheet" href="customerstyle.css">
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Customer page</title>

</head>
<body>
<fieldset>
   <div>
      <h1> ONLINE SHOPPING</h1><img src="home.jpg" style=" margin:auto; display:block;" width="150" height="150">
      <h2>WELCOME <span><?php echo $_SESSION['customer_name'] ?></span></h2>
      <h3>Customer DASHBOARD</h3>
	   <div class="topnav-right">
      <a href="logout.php">LOGOUT</a>
	  </div>
</fieldset>
<br>
<br>
<br>
<fieldset>
 <a  href="buy.php">BUY PRODUCT</a>
	<br> <br>
	<a  href="payment.php">PAYMENT</a>
	<br> <br>

</fieldset>	  
	  

      
   </div>

</div>

</body>
</html>