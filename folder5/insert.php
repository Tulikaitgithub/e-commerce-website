<?php
$username="root";
$password="";
$hostname="localhost";
$dbname="tulika";
$mysqli = new mysqli($hostname,$username,$password,$dbname);
if(mysqli_connect_error()){
    die("connection failed" . mysqli_connect_error ());
}
$conn = $mysqli -> query("INSERT INTO users(firstname,lastname,email,mobile,comment)
VALUES('abcd','ddsdfd','abc@gmail.com','8858791522','jhfsjh')");

if($conn){
    echo "success";
}else{
    echo "failed";
}
?>