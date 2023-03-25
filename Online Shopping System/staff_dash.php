<?php

@include 'conn.php';

session_start();

if(!isset($_SESSION['staff_name'])){
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Staff page</title>

</head>
<body>
   <div>
      <h3>hi, <span>Staff</span></h3>
      <h1>welcome <span><?php echo $_SESSION['staff_name'] ?></span></h1>
	  
  <a href="Manage_Orders.php">
      <input type="submit"/>order
    </a>
	<br><br>
	   <a href="Manage_Accounts.php">accounts
      <input type="submit"/>
    </a>

	  
	  

      <a href="logout.php">logout</a>
   </div>

</div>

</body>
</html>