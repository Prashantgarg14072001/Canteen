<?php 
$name="";
$email="";
$errors= array();

$db = mysqli_connect('localhost','root','','Registrationdb');
if (isset($_POST['contact'])) {
	$name=($_POST['name']);
	$contactus=($_POST['contactus']);
	$email=($_POST['email']);
	$message=($_POST['message']);
	if (count($errors)==0) {
		$sql = "INSERT INTO cont(name,contactus,email,message) VALUES ('$name','$contactus','$email','$message')";
		mysqli_query($db, $sql);
	}
	if ($db) {
	echo "<script>alert('your data added succesfully..')</script>";
}
else
{
	echo "<script>alert('your data added not succesfully..')</script>";
}
}
 header('location:index.php');
?>