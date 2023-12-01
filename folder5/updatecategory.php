<?php
include 'connect.php';

$status = $_GET['status'];
$id = $_GET['id'];

if($status == 1){
    $mysqli->query('UPDATE category SET status= 0 WHERE id='.$id);
    header("location:categorytable.php");
}
else if($status == 0){
    $mysqli->query('UPDATE category SET status= 1 WHERE id='.$id);
    header("location:categorytable.php");
}

else 
 echo "something wrong!";
 header("location:categorytable.php");
 ?>