

<html>
	<head>
	</head>
	<body>

		<form method="post" >
			Username: <input type="text" name="Username"><br><br>
			Password: <input type="password" name="Password"><br><br>
			<input type="submit" value="Login">
			<input type="reset" value="Cancel">
		</form>
	</body>
</html>
<?php
	if($_SERVER['REQUEST_METHOD'] == 'POST')
	{
		$a = $_POST['Username'];
		$b = $_POST['Password'];
		if(empty($a) || empty($b))
		{
			echo '<script>alert("Username or Password is empty")</script>';
		}
		else if($a =='arianit' && $b =='tershnjaku')
		{
			echo "<script>alert('Welcome!')</script>";
			// echo "<script>window.open('login1.php','_self')";
		}
		else
		{
			echo '<script>alert("Username and Password is incorrect!")</script>';
		}
	}
	
?>
