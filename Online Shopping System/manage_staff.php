<!DOCTYPE html>
<html>
<head>
 
  <title>Manage STAFF</title>
  <style>
table, th, td {
  border: 2px solid;
  border-color:red;
  text-align: center;

}

table {
  width: 100%;
}
fieldset{
	
	text-align:center;
	border: 2px solid # 000000;
	border-width:10px;
	width: 400px;
	display: inline-block;
	margin:auto
	
}
.top{
	text-align: center;
}
</style>
</head>
<body>
<h1 style="text-align:center;"> ONLINE SHOPPING</h1><img src="home.jpg" style=" margin:auto; display:block;" width="150" height="150">
<div class="top">
<fieldset>
<?php

@include 'conn.php';
if($_SERVER["REQUEST METHOD"]=="POST"){
$username=$_POST['username'];
	
$sql1 = "DELETE FROM users WHERE username=$username";
$query_run=mysqli_query($conn,$sql1);
if($query_run)
{
	header("location:manage__staff");
	
}
else{
	echo'Not Deleted';
}
}
?>
<?php
$sql = "SELECT name,username, email FROM users WHERE user_type='staff'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr> <th>Name</th> <th>Username</th> <th>Email</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr > 
        <td>" . $row["name"]. "</td> 
         <td>" . $row["username"]. "</td>
         <td>" . $row["email"]. "</td>
     
        </tr>";

    }
    echo "</table>";
} else {
    echo "0 results";
}
?>



</fieldset>
<br><br>
Username: <input type="text" name="username" required placeholder="enter username"><br><br>

<button type="submit" name="delete">Delete </button>
<br><br>

<a href="admin_dash.php">Go back to Admin Dashboard </a>
</div>

</body>
</html>