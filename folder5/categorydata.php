<?php 

include 'connect.php';
if(isset($_POST['submit'])){
$category = $_POST['category'];
$status = $_POST['status'];

if ($mysqli -> query("INSERT INTO category(category,status) VALUES('$category', '$status')")){
    echo "data inserted";

header("location:categorytable.php");
}
}
header("location:categorytable.php");

?>



