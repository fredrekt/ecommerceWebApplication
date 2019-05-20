<html>
<body>
	<head>
		<link rel="stylesheet" type="text/css" href="styles/regcss.css">
	</head>
	<form action="register.php" method="post">
		<center>
		<table>
			<th>Registration</th>
			<tr>
				<td><input type="text" name="username" placeholder="Enter Username" required></td>
			</tr>
			<tr>
				<td><input type="text" name="password" placeholder="Enter Password" required></td>
			</tr>
			<tr>
				<td><input type="text" name="firstname" placeholder="Enter Firstname" required></td>
			</tr>
			<tr>
				<td><input type="text" name="lastname" placeholder="Enter Lastname" required></td>
			</tr>
			<tr>
				<td><input type="text" name="birthdate" placeholder="Enter Birthdate" required></td>
			</tr>
			<tr>
				<td><input type="text" name="address" placeholder="Enter Address" required></td>
			</tr>
			<tr>
			<td><input type="submit" value="Create Account" name="submitit" required></td>
			</tr>
		</table>
	</center>
	</form>
<?php
$conn = new mysqli("127.0.0.1","root","","freddb");
#VARIABLES HEHE
$username = $_POST['username'];
$password = $_POST['password'];
$fname = $_POST['firstname'];
$lname = $_POST['lastname'];
$bdate = $_POST['birthdate'];
$addrs = $_POST['address'];
if(!$conn){
	die("Error 404: Connection has failed!");
}
$qry = "INSERT INTO users(user_id,user_password,user_firstname,user_lastname,user_bdate,user_address) VALUES ('$username','$password','$fname','$lname','$bdate','$addrs')";
$qryCheck = "SELECT * FROM users WHERE user_id = '$username'";

$checkVer = mysqli_query($conn,$qryCheck);

$checker = mysqli_num_rows($checkVer);
if ($checker>0) {
	echo "<center><h4 style='font-family:courier; color:red;'>Username Already Taken</h4></center>";
}
if($conn->query($qry)==TRUE){
	//mysqli_query($conn,$qry);
	echo "<script type='text/javascript'>";
	echo 'alert("Registration Successful!")';
	echo "</script>";
	echo "<center><img src='images/greencheck.png' width='40px;'></center>";
	header("refresh: 2;	URL=http://localhost/revised/login.html");
	echo "<center><h4 style='color:	#64991e;font-family:courier;'>Account Created!</h4></center>";
	}
else{
	header("refresh:1; URL=http://localhost/activityecommerce/registration.html");
	echo "<center><h4 style='font-family:courier; color:red' >Failed to Create an Account!</h4></center>";
}
?>
</body>
</html>