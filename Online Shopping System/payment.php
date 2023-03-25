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
   <link rel="stylesheet" href="paymentstyle.css">
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>PAYMENT</title>

</head>
<body>
<fieldset>
   <div>
      <h1> ONLINE SHOPPING</h1><img src="home.jpg" style=" margin:auto; display:block;" width="150" height="150">
      <h2>WELCOME <span><?php echo $_SESSION['customer_name'] ?></span></h2>
      <h3>PAYMENT</h3>
</fieldset>

<fieldset>

TRx ID:<input type="text" name="trxid" required placeholder="enter the trxid"><br><br>
Phone No: <input type="text" name="mobile" required placeholder="enter the Mobileno"><br><br>
 <input type="submit" name="submit" value="PAY">



<br>
<br>
<br>