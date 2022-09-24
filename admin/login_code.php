<?php


include('connection.php');

$email = $_POST['email'];
$pwd = $_POST['password'];
$sql = "SELECT * FROM tbl_admin WHERE email='$email' AND password='$pwd'";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result) > 0)
{
	while($row = mysqli_fetch_assoc($result))
	{
	   
		$id = $row["id"];
		$email = $row["email"];
		session_start();
		$_SESSION['id'] = $id;
		$_SESSION['email'] = $email;
	}
	header("Location: libraryzone.php");
}
else
{
	echo "Invalid email nd password";
}
?>