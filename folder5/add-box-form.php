<?php 

include 'connect.php';

$filename = $_FILES['image']['name'];
$filetype = $_FILES['image']['type'];
$title = $_POST['title'];
$category = $_POST['category'];
$sub_category = $_POST['sub_category'];
$price = $_POST['price'];
$status = $_POST['status'];


if ($filetype == 'image/jpeg' or $filetype == 'image/jpg' or $filetype == 'image/png') {
    move_uploaded_file($_FILES['image']['tmp_name'],'upload/'.$filename);
    $filepath="upload/".$filename;
}

if ($mysqli -> query("INSERT INTO boxd(image,title,category,sub_category,price,status) VALUES('$filename','$title','$category','$sub_category','$price','$status')")){
     echo "data inserted";
     header("location:ptable.php");

}
header("location:ptable.php");
?>

