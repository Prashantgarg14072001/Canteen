<?php
session_start();
$foodname=$_REQUEST['id'];
$id = $row["ID"];
include('connection.php');
mysqli_query("insert into requestfood(foodid,reqby,reqdate,reqstatus) values('$foodname','$reqby',curdate(),'pending')");
header("location:requestforfood.php");
?>