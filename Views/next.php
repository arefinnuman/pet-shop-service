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

else{
	$q="select * from registrated_user";
	$res=$con->query($q);
	$output='<table border="1" width=100%> <tr><th>User name</th> <th>First Name</th> <th>Last Name</th><th>Email</th><th>Password</th></tr>';
	if($res->num_rows>0)
	{
		while($row=$res->fetch_assoc())
		{
			$output.='<tr>
                <td>'.$row["user_name"].'</td>
                <td>'.$row["first_name"].'</td>
                <td>'.$row["last_name"].'</td>
                <td>'.$row["email_address"].'</td>
                <td>'.$row["password"].'</td>';
		}
		$output.='</table>';
		echo $output;
	}
	else
		echo "No data";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Ajax</title>
</head>
<body>
	
</body>
</html>
