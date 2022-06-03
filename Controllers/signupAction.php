<?php 
if(isset($_POST["signup.php"]))
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