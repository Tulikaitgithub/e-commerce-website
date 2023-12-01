<?php

if (session_id() == '' || !isset($_SESSION)){session_start();}
include 'connect.php';

if (isset($_POST['login'])) {

$email = $_POST['email'];
$password =md5($_POST['password']);

if ($email == '' || $password == ''){
echo "please fill details";
}else{
$result = $mysqli->query('SELECT email,password FROM register');

    if ($result === FALSE) {
    echo "details missmatch";
    }

if ($result){
    while ($obj = $result->fetch_object()){
    if($obj->email === $email && $obj->password === $password) {
    $_SESSION['email']=$email;
    $loginsuccess = 'true';
    break;
    }	
    }
if ($loginsuccess) {
                echo "You are Login";
                header("refresh: 3; url=e.php");
            } else {
                redirect();
            }
} 
}
}
function redirect(){
echo "invaled login";

}
?>