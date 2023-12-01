<?php
include 'connect.php';
if(isset($_POST['submit'])) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $comment = $_POST['comment'];
    
    if ($firstname == '' || $lastname == '' || $email == '' || $mobile == '' || $comment == ''){
        echo "please fill all details";
}else {
$conn = $mysqli -> query("INSERT INTO users(firstname,lastname,email,mobile,comment) VALUES(
'$firstname','$lastname','$email','$mobile','$comment')");

if ($conn){
    echo "success";
}else{
    echo"failed";
}
}
}
?>