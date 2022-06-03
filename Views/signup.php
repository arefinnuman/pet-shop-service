<?php 
if(isset($_POST["signup"]))
{
	$servername="localhost";
	$username="root";
	$password="";
	$dbname="admindb";
	$uname=$_POST["user_name"];
	$firstname=$_POST["first_name"];
	$lastuname=$_POST["last_name"];
	$useremail=$_POST["email_address"];
	$userpass=$_POST["password"];
	$con=new mysqli($servername,$username,$password,$dbname);
	if($con->connect_error)
		die("Connection failed:".$con->connect_error);
	else
	{
		//$q="INSERT INTO Reg_user (Name,Email,Password) VALUES('Sadia','sadia@aiub.edu','234')";
		$q="INSERT INTO registrated_user (user_name,first_name,last_name,email_address,password) VALUES('".$uname."','".$firstname."','".$lastuname."','".$useremail."','".$userpass."')";
		$res=$con->query($q);
		header ("Location: login.php") ;
	}
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ms+Madi&family=Nunito+Sans:wght@200&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="Css/signup.css">
</head> 
<body>
	
	<div class="box">
		
		<form onsubmit="return validate()" method="post" action="#"> 
			<h1>Register Here </h1> <br>
        
           
			<input class="text" id="user_name" type="text" name="user_name" placeholder="Username" ><br><br>
		
			<input class="text" id="first_name" type="text" name="first_name" placeholder="First Name" ><br><br>
			
			<input class="text" id="last_name" type="text" name="last_name" placeholder="Last Name" ><br><br>
		
			<input class="text" id="email_address" type="text" name="email_address" placeholder="Email Address" ><br><br>
           
			<input class="text" id="password" type="password" name="password" placeholder="Password" ><br><br>
           
			<input class="button" id="button" type="submit" value="Signup" name="signup"><br><br>

            <a href="login.php">Click Here to Login</a><br><br>
		</form>

	<script>
			
	  function validate()
	  {
		 
		var username=document.getElementById('user_name');
		 var firstname=document.getElementById('first_name');
		 var lastname=document.getElementById('last_name');
		 var emailaddress=document.getElementById('email_address');
		 var pass=document.getElementById('password');

		 if(username.value=="" || firstname.value=="" || lastname.value=="" || emailaddress.value=="" || pass.value=="")
		 {
			 alert('This filled cannot be empty');
			 return false;
		 }
		 else
			 return true;
	  }
	</script>
	</div>
</body>
</html>