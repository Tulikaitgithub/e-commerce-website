<?php
include 'connect.php';

$id = $_GET['id'];

$mysqli->query('DELETE FROM boxd WHERE id='.$id);
header("location:ptable.php");
?>