<?php
include 'connect.php';

$status = $_GET['status'];
$id = $_GET['id'];

if($status == 1){
    $mysqli->query('UPDATE boxd SET status= 0 WHERE id='.$id);
    header("location:ptable.php");
}
else if($status == 0){
    $mysqli->query('UPDATE boxd SET status= 1 WHERE id='.$id);
    header("location:ptable.php");
}

else 
 echo "something wrong!";
 header("location:ptable.php");
 ?>


