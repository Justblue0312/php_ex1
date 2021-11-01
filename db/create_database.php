<?php  

$link = mysqli_connect("localhost","root", "");

$sql = "CREATE DATABASE ex1";
mysqli_query($link,$sql);
?>