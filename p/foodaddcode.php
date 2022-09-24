<?php
$foodid=$_POST['foodid'];
echo $foodid."<br>";

$foodname=$_POST['foodname'];
echo $foodname."<br>";

$foodtype=$_POST['foodtype'];
echo $foodtype."<br>";

$foodpdf=$_POST['foodpdf'];
echo $foodpdf."<br>";

include('connection.php');
$sql = "INSERT INTO tbl_addfood(foodid,foodname,foodtype,foodpdf,date)
values('$foodid','$foodname','$foodtype','$foodpdf',curdate())";
$result = mysqli_query($conn, $sql);
if($result)
{
	header("Location: foodadd.php");
}
else
{
	echo "Error :".$sql;
}
