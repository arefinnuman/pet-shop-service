<?php 
if(isset($_GET["delete"]))
{
	$servername="localhost";
	$username="root";
	$password="";
	$dbname="admindb";
}


function deleteCustomer($customer_id)

    {

        $sqlConnection = mysqli_connect("localhost", "root", "", "admindb") or die("Connection failed: " . mysqli_connect_error());

        $sql = "DELETE FROM registrated_user WHERE  = ''";

        $result = mysqli_query($sqlConnection, $sql) or die("Query failed: " . mysqli_error($sqlConnection));

        if($result) {

            return true;

        }

        else {

            return false;

        }

    }
?>