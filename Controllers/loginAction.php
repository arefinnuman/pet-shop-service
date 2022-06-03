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