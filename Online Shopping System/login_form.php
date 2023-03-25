<?php

@include 'conn.php';

session_start();

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $username = mysqli_real_escape_string($conn, $_POST['username']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);
   $cpass = md5($_POST['cpassword']);
   $user_type = $_POST['user_type'];

   $select = " SELECT * FROM users WHERE username = '$username' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $row = mysqli_fetch_array($result);

      if($row['user_type'] == 'admin'){

         $_SESSION['admin_name'] = $row['name'];
         header('location:admin_dash.php');

      }elseif($row['user_type'] == 'customer'){

         $_SESSION['customer_name'] = $row['name'];
         header('location:customer_dash.php');

      }
	  /*
	  elseif($row['user_type'] == 'merchent'){

         $_SESSION['merchent_name'] = $row['name'];
         header('location:merchent_dash.php');

      }elseif($row['user_type'] == 'staff'){

         $_SESSION['staff_name'] = $row['name'];
         header('location:staff_dash.php');

      }
     */
   }else{
      $error[] = 'incorrect username or password!';
   }

};
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <link rel="stylesheet" href="logstyle.css">
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>login form</title>


</head>
<body>
   


   <form action="" method="post">
    <h1> ONLINE SHOPPING</h1><img src="home.jpg" style=" margin:auto; display:block;" width="150" height="150">
	
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
	  <div class="top">
	  <fieldset>
      <h3>LOGIN</h3>
      Username: <input type="username" name="username" required placeholder="enter your username"><br><br>
      Password: <input type="password" name="password" required placeholder="enter your password"><br><br>
      <input type="submit" name="submit" value="Login">
      <p>don't have an account? <a href="registration.php">Register now</a></p>
   </fieldset>
   </div>
   </form>
   
   
   
 

</body>
</html>