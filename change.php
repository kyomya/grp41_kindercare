<?php
require('PHP/connection.php');
$id=$_GET['p_id'];
$status=$_GET['STATUS'];
$sql="update pupilregister set STATUS=$status where p_id=$id";
mysqli_query($dbconnect,$sql);
header('Location: listpupils.php')

?>