<?php 
$host= "localhost";
$username="root";
$password="";
$dbname="ajaxtest";

$conn = mysqli_connect($host,$username,$password,$dbname);

$user = isset($_POST['user']) ? $_POST['user'] : null;

	 $query = "SELECT username FROM registrations WHERE username='$user'";
     $result = mysqli_query($conn, $query);
     $count = mysqli_num_rows($result);
     if($count!=0){

     echo "Provided username is already in use.";
	}

?>