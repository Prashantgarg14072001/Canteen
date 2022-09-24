<?php
session_start();
$bookid=$_REQUEST['id'];
$reqby=$_REQUEST['reqby'];
include('connection.php');
mysqli_query("update requestfood set reqstatus='issue' where reqby='$reqby' and foodid='$foodid'");
header("location:foodrequest.php");
?>