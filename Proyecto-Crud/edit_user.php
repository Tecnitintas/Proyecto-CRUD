<?php 

include('connection.php');
$con = connection();

$id = $_POST['id'];
$name = $_POST['name'];
$lastname = $_POST['lastname'];
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$celular = $_POST['celular'];

$sql = "UPDATE users SET name='$name', lastname='$lastname', username='$username', password='$password', email='$email', celular='$celular' WHERE id='$id'";
$query = mysqli_query($con, $sql);

if($query){
    header("Location: index.php");
} else {

}
?>