<?php 

include 'connect.php';

if(isset($_POST['submit'])){
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $mobileno = $_POST['mobileno'];
    $country = $_POST['country'];
    $password = md5($_POST['password']);

    if($firstname == '' || $lastname == '' || $email == '' || $mobileno == '' || $country == '' || $password == ''){
        echo 'please fill details';
    }else

    $conn = $mysqli->query("INSERT INTO register(firstname, lastname, email, mobileno, country, password) VALUES('$firstname', '$lastname', '$email', '$mobileno', '$country', '$password')");

    if($conn){
        echo 'success';
    }else{
        echo 'failed';
    }
}


?>