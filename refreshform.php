<?php
// Establishing MySQLi connection with server by passing "server_name", "user_id", "password" , "database_name".
$connection = mysqli_connect("localhost", "root", "", "no_load_mydba");

// Fetching Values from URL
$name2=$_POST['name1'];
$email2=$_POST['email1'];
$contact2=$_POST['contact1'];
$gender2=$_POST['gender1'];
$msg2=$_POST['msg1'];

//Insert query
$query = mysqli_query($connection, "insert into form_element(name, email, contact, gender, message) values ('$name2','$email2','$contact2','$gender2','$msg2')");
if($query){
echo "Data Submitted succesfully";
}
mysqli_close($connection); // Connection Closed.
?>
