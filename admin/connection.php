<?php
$conn =mysqli_connect('localhost','root','','Registrationdb');
// mysql_select_db('');

if(!$conn)
{
	echo "Database connection faild...";
} 
?>