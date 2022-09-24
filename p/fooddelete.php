<?php
$id= $_REQUEST['id'];
//echo $id;
include('connection.php');
$delete="delete from tbl_addfood where id='$id'";
mysql_query($delete);
header('location:foodmgmt.php');

?>