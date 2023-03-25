<?php

@include 'conn.php';

session_start();

if(!isset($_SESSION['merchent_name'])){
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>merchent page</title>

</head>
<body>
   <div>
      <h3>hi, <span>merchent</span></h3>
      <h1>welcome <span><?php echo $_SESSION['merchent_name'] ?></span></h1>
	  
  <a href="Add_products.php">add
      <input type="submit"/>
    </a>
	<br><br>
	   <a href="Delete_products.php">delete
      <input type="submit"/>
    </a>
	  <br><br>
	   <a href="view_products.php">view
      <input type="submit"/>
    </a>
	  
	  

      <a href="logout.php">logout</a>
   </div>

</div>

</body>
</html>