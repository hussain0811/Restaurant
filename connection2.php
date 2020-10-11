<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "bookings";
$conn = mysqli_connect($host, $user, $pass, $dbname);
if($conn){

}

if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $number = $_POST['number'];
    $email = $_POST['mail'];
    $feedback = $_POST['feedback'];
    
    $query = "INSERT into feedback(name, number,  mail, feedback) values('$name', '$number', '$email', '$feedback')";
    
    $result = mysqli_query($conn, $query);
    
}
if($result){
    header('location:index.html');
}
