<?php
$foodid=$_POST['foodid'];
echo $foodid."<br>";

$reqby=$_POST['reqby'];
echo $reqby."<br>";

$reqdate=$_POST['reqdate'];
echo $reqdate."<br>";

$reqstatus=$_POST['reqstatus'];
echo $reqstatus."<br>";

include('connection.php');
$insert="insert into tbl_foodrequest(foodid,reqby,reqdate,reqstatus,)
values('$foodid','$reqby','$reqdate','$reqstatus')";
mysql_query($insert);
header('location:foodrequest.php?msg=1');

?>