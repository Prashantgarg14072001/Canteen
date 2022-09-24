<?php
$id= $_REQUEST['id'];
//echo $id;
include('connection.php');
$delete="delete from tbluser where id='$id'";
mysql_query($delete);
header('location:studentmgmt.php');

?>