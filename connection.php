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
    $guest = $_POST['guests'];
    $email = $_POST['mail'];
    $time = $_POST['time'];
    $req = $_POST['requirements'];
    

    $query = "INSERT into reservation(name, number, guests, mail, time, requirements) values('$name', '$number', '$guest', '$email', '$time', '$req')";
    
    $result = mysqli_query($conn, $query);
    
   
}
if($result){
    header('location:index.html');
}
