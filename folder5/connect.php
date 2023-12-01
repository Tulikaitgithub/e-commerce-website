<?php
$username="root";
$password="";
$hostname="localhost";
$dbname="tulika";
$mysqli=new mysqli($hostname,$username,$password,$dbname);
if(mysqli_connect_error()){
    die("connection failed" .mysqli_connect_error ());
}
?>