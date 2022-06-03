<!DOCTYPE html>
<html>
<head>
	<title>Login | Pet Shop</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ms+Madi&family=Nunito+Sans:wght@200&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="Css/login.css">
</head>
<body>
	<?php
		if(isset($_POST['btnSubmit']))
		{
			$username = $_POST['user_name'];
			$password = $_POST['password'];

			$conn = new mysqli("localhost", "root", "", "admindb");
	        if($conn->connect_error){
	            die("Connection failed: " . $conn->connect_error);
	        }
	        else{
	            $sql = "select user_name, password  from registrated_user where user_name='".$username."' and password='".$password."'";
	            $result = mysqli_query($conn, $sql) or die("Query failed: " . mysqli_error($conn));
	            if(mysqli_num_rows($result) > 0) {
					header ("Location: homepage.php") ;
	            }
	            else {
	               echo "Invalid username or password!";
	            }
	        }
		}
	?>
	<div class="box">
		<form id="form" action="#" onsubmit="return validate()" method="post">
			<h1> Login Here </h1>
			<br>
			<div class="form-control" id="form-control">
			<input class="text" id="user_name" type="text" name="user_name" placeholder="Username"><br>
			<small id="username-err">Username cannot be empty.</small>
			<br><br>
			<input class="text" id="password" type="password" name="password" placeholder="Password"><br>
			<small id="password-err">Password cannot be empty.</small>
			<br><br>
			<input id="btnSubmit" class="button" type="submit" name="btnSubmit" value="Login"><br><br>

			<a href="signup.php"><div style="font-size: 14px;margin: 10px;color: white;">Click Here to Signup</div></a><br><br>
		</form>
	</div>
	<script type="text/javascript">
		function validate()
		{
			const usernametext = document.getElementById('user_name');
			const passwordtext = document.getElementById('password');
			const usernameerror = document.getElementById('username-err');
			const passworderror = document.getElementById('password-err');
			if(usernametext.value == "")
			{c
				usernameerror.style.visibility = 'visible';
				return false;
			}
			if(passwordtext.value == "")
			{
				passworderror.style.visibility = 'visible';
				return false;
			}
			if(usernametext.value != "" && passwordtext.value != "")
			{
				return true;
			}
		}
	</script>
</body>
</html>