<?php 
include('connection.php');
$con = connection();

$id = null;
$name = $_POST['name'];
$lastname = $_POST['lastname'];
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$celular = $_POST['celular'];

$sql = "INSERT INTO users VALUES('$id', '$name', '$lastname', '$username', '$password', '$email', '$celular')";
$query = mysqli_query($con, $sql);

if($query){
    header("Location: index.php");
};

?>