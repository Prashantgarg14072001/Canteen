<?php
error_reporting(all);
session_start();
// $email=$_SESSION['id'];
echo $email;

$op=$_POST['password'];
echo $op."<br>";
$np=$_POST['npassword'];
echo $np."<br>";
$cp=$_POST['cpassword'];
echo $cp."<br>";
include('connection.php');
echo $select="select password from tbl_admin where email='$email'";


$res=mysqli_query($select);
echo $res;
if($row=mysqli_fetch_array($res,MYSQLI_BOTH))
{
$pp=$row['password'];
echo $pp;
}
if($pp==$op)
{
if($np==$cp)
{
$update=("update tbl_admin set password='$np' where email='$email'");
mysqli_query ($update);
echo("<script>alert('Password Updated Successfully.');window.location.href='chlpass.php';</script>");
}
else
{
header("location:chlpass.php");
}
}
else
  {
 header("location:chlpass.php");
  }

?>