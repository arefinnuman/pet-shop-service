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