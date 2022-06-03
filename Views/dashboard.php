<DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Dashboard | Pet Shop Service</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Akshar:wght@300&family=Ms+Madi&family=Nunito+Sans:wght@200&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="Css/dashboard.css">
</head>
<body>

	<div class="first">
			<nav class="navbar">
            <img class="logo" src="img/logo.png">
				<ul>
                    <li><a href="homepage.php">Home</a></li>
                    <li><a class="active" href="#">Dashboard</a></li>
                    <!-- <li><a href="profile.php">Profile</a></li> -->
					<li><a href="about.php">About Us</a></li>
					<li><a href="contact.php">Contact Us</a></li>
					
				</ul>
			</nav>
		</div>
        <div class="second">
        <h1>List of Employees</h1>
    <br>
    <table class="table">
        <thead>
			<tr>
				<th>ID</th>
				<th>User Name</th>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Email Address</th>
				<th>Password</th>
				<th>Action</th>
			</tr>
		</thead>

        <tbody>
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
			$sql = "SELECT * FROM registrated_user";
			$result = $con->query($sql);

            if (!$result) {
				die("Invalid query: " . $connection->error);
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
                    
                    <td>
                        // <a  href='update.php'>Update</a>
                        <a  href='delete.php'>Delete</a>
                    </td>
                </tr>";
            }

            $con->close();
            ?>
        </tbody>
    </table>
        </div>
</body>
</html>