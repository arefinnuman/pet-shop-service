<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Pet Shop Services</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Akshar:wght@300&family=Ms+Madi&family=Nunito+Sans:wght@200&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="Css/profile.css">
</head>
<body>
	<!-- <div class="wrapper">
			<nav class="navbar">
				<img class="logo" src="img/logo.png">
				<ul>
                    <li><a href="homepage.php">Home</a></li>
                    <li><a href="dashboard.php">Dashboard</a></li>
                    <li><a class="active" href="#">View Your Profiles</a></li>
					<li><a href="about.php">About</a></li>
					<li><a href="contact.php">Contact Us</a></li>
					
				</ul>
			</nav>
	</div> -->
	<div>

	<?php
            $servername="localhost";
            $username="root";
            $password="";
            $dbname="admindb";

			// Create connection
			$con=new mysqli($servername,$username,$password,$dbname);

            // Check connection
			if($con->connect_error)
		    die("Connection failed:".$con->connect_error);

            // read all row from database table
			$sql = "SELECT * FROM 'registrated_user' WHERE 'user_name' = 'Safa'";
			$result = $con->query($sql);

			if (!$result) {
				die("Invalid query: " . $con->error);
			}

            // read data of each row
			while($row = $result->fetch_assoc()) {
                echo "<tr>
                    <td>" . $row["id"] . "</td>
                    <td>" . $row["user_name"] . "</td>
                    <td>" . $row["first_name"] . "</td>
                    <td>" . $row["last_name"] . "</td>
                    <td>" . $row["email_address"] . "</td>
                    <td>" . $row["password"] . "</td>
					</tr>";
            }
			

            $con->close();
            ?>
	</div>
</body>
</html>