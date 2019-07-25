
<?php 
// You can access the values posted by jQuery.ajax
// through the global variable $_POST, like this:
$user = isset($_POST['user']) ? $_POST['user'] : null;
$email = isset($_POST['email']) ? $_POST['email'] : null;



$host= "localhost";
$username="root";
$password="";
$dbname="ajaxtest";

$conn = mysqli_connect($host,$username,$password,$dbname);

if($conn){
        echo "success";
}

$query= "INSERT INTO `registrations` (username, email) VALUES ('$user', '$email');";
if(mysqli_query($conn,$query)){
        echo "insert success";
}
?>