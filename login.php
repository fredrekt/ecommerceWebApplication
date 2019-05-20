<!DOCTYPE HTML>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="styles/regcss.css">
	<script type="text/javascript" src="script/login.js"></script>
</head>
<body>
	<form>
		<center>
		<table>
			<th>Login</th>
				<tr>
					<td><input type="text" placeholder="Username" name="username"></td>
				</tr>
				
				<tr>
					<td><input type="text" placeholder="Password" name="password"></td>
				</tr>

				<tr>
					<td><input type="submit" value="Login" name="submit"></td>
				</tr>
				<tr>
					<td><center><img style='padding:5px;' id="checkimg" src="images/graycheck.png" width="40px"></center></td>
				</tr>	
		</table>
		</center>
	</form>

<?php
	session_start();
	//variables
	$username = $_POST['username'];
	$password = $_POST['password'];
	$conn = mysqli_connect("127.0.0.1","root","","freddb");
		if (!$conn) {
		echo "Connection Failed";
		}
			
		$qry = "SELECT * FROM users WHERE user_id='$username' and user_password='$password'";
		$result = mysqli_query($conn,$qry);
			
			if(mysqli_num_rows($result)>0){
		 	
		 	$_SESSION['user'] = $username;
		 	# to be undone echo "<center><img id='checkimg' src='images/imggreen.jpg' width='30px;'></center>";
		 	#javascript wink wink haha
		 	echo "<script>alert('Welcome " .$_SESSION['user']."')</script>";
		 	#echo "<script type='text/javascript'> chngeTxt()</script>";
		 	echo "<script>chngeImg2()</script>";
		 	echo "<center><p style='font-family:courier; color:#64991e'>User Validated!</p></center>";
		 	#echo "<center><img src='images/graycheck.png'></center>";
		 	echo "<script>logout()</script>";
		 	header("refresh: 1;	URL=http://localhost/ecommercewebapplication/index.php");
		 	//exit;
		 	#echo "<script type='text/javascript'> chngeImg() </script>";
		 	#echo "<script>chngeImg2()</script>";

			}
			
			
		#mysqli_close($conn);
		else{
			header("refresh: 1; URL=http://localhost/ecommercewebapplication/login.html");
			echo "<center><h4 style='color:red; font-family:courier;'>User Doesn't Exist!</h4></center>";
		}
		
		 




	
	
?>

</body>
</html>
