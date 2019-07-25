<?php 
$host= "localhost";
$username="root";
$password="";
$dbname="ajaxtest";

$conn = mysqli_connect($host,$username,$password,$dbname);

$email = isset($_POST['email']) ? $_POST['email'] : null;

	 $query = "SELECT email FROM registrations WHERE email='$email'";
     $result = mysqli_query($conn, $query);
     $count = mysqli_num_rows($result);
     if($count!=0){

     echo "Provided Email is already in use.";
	}

?>