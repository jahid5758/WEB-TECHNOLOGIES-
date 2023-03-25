<?php

@include 'conn.php';

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

      $error[] = 'user already exist!';

   }else{
      if($pass != $cpass){
         $error[] = 'password not matched!';
      }else{
         $insert = "INSERT INTO users(name,username, email, password, user_type) VALUES('$name','$username','$email','$pass','$user_type')";
         mysqli_query($conn, $insert);
         header('location:login_form.php');
      }
   }

};


?>

<!DOCTYPE html>
<html lang="en">
<head>
   <link rel="stylesheet" href="regstyle.css">
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Register form</title>
   
   <script>

function validateform() {    
    let name = document.registration.name.value;
    let username = document.registration.username.value;  
    let password = document.registration.password.value;
    let email = document.registration.email.value; 
    let cpassword = document.registration.cpassword.value; 
   
   if(name == "") {
	   alert("Name must be filled out");
    return false;
	} 
     if(username == "") {
         alert("Username must be filled out");
    return false;
    } 
	 if(password == "") {
         alert("Password must be filled out");
    return false;
    } 
	
	if(email == "") {
         alert("Email must be filled out");
    return false;
	}
	 if(cpassword == "") {
        alert("Confirm Password  must be filled out");
    return false;
	}
	   
   return true;
 }   
   
</script>  
</head>
<body>
   
<div>

   <form name="registration" onsubmit="return validateform()" action="#" method="post">
   <h1 > ONLINE SHOPPING</h1><img src="home.jpg" style=" margin:auto; display:block;" width="150" height="150">
   
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
	  <div class="top">
	  <fieldset>
	  <h3>REGISTER</h3>
	
      Name: <input type="text" name="name" required placeholder="enter your name"><br><br>
	  Username: <input type="text" name="username" required placeholder="enter your username"><br><br>
      Email: <input type="text" name="email" required placeholder="enter your email"> <br><br>
      Password: <input type="password" name="password" required placeholder="enter your password"><br><br>
      Confirm password: <input type="password" name="cpassword" required placeholder="confirm your password"><br><br>
      User type: <select name="user_type">
         <option value="admin">admin</option>
		 <option value="customer">customer</option>
		 <!--<option value="merchent">merchent</option>-->
		 <!--<option value="staff">staff</option>-->
      </select>
	  <br><br>
	  
      <input type="submit" name="submit" value="Register">
      <p>Already have an account? <a href="login_form.php">login now</a></p>
	
	   </fieldset>
</div>
   </form>


</body>
</html>