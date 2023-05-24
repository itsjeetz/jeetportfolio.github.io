<?php
if(isset($_POST['submit'])){
$name = $_POST['name'];
$email = $_POST['email'];
$phnum = $_POST['phnenum'];
$message = $_POST['message'];

$host = 'localhost';
$user = 'root';
$pass = '';
$dbname = 'portfolio';

$conn = mysqli_connect($host,$user,$pass,$dbname);
$sql = "INSERT INTO contact(name,email,subject,message) values ('$name','$email','$phnum','$message')";
mysqli_query($conn,$sql);

}
?>