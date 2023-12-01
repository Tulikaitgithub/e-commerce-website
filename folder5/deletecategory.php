<?php
include 'connect.php';

$id = $_GET['id'];

$mysqli->query('DELETE FROM category WHERE id='.$id);
header("location:categorytable.php");
?>