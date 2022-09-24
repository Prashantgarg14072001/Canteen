<?php
 session_start();
// $email=$_SESSION[''];
$email = $_SESSION['email'];
$id = $_SESSION['id'];
include('connection.php');
$select="select * from tbluser where emailid='$email'";
$res=mysqli_query($select);
if($row=mysqli_fetch_array($res,MYSQLI_BOTH))
	
?>
<html>
<head>
<link href="css/bootstrap.min.css" rel="stylesheet"/>
<link href="css/bootstrap-theme.min.css" rel="stylesheet"/>
<link href="css/font-awesome.min.css" rel="stylesheet"/>
<link href="css/hover-min.css" rel="stylesheet"/>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<style>

</style>
<body>
<!--menus start-->
<?php include('menul.php')?>
<!--menus end-->

<div class="col-sm-12"style="background:#b2b2ff;min-height:450px;">
<div class="col-sm-12"style="color:black;text-align:center;font-family:chut;font-size:25px;margin-top:2%;
margin-bottom:1.5%;"><b>Canteen mgmt</b></div>
<div class="col-sm-2"></div>
<table border="1 px solid black"  class="table">
<tr style="font-family:chut;font-size:20px;">
<th>Firstname</th>
<th>Lastname</th>
<th>Gender</th>
<th>Email</th>
<th>Password</th>
<th>Date</th>
<th>Delete</th>
</tr>
<?php
$i=1;
include('connection.php');
 $select="select * from tbluser";
 $res=mysqli_query($select);
while($am=mysqli_fetch_array($res,MYSQLI_BOTH))
{
	?>
	<tr>
	<td><?php echo $am[1]?></td>
	<td><?php echo $am[2]?></td>
	<td><?php echo $am[3]?></td>
	<td><?php echo $am[4]?></td>
	<td><?php echo $am[5]?></td>
	<td><?php echo $am[6]?></td>
	<td><?php echo $am[7]?></td>
	<td><a onclick="return confirm('Are you sure want to delete')" href="delete.php?id=<?php echo $am[0]?>">delete</a></td>
		</tr>
	<?php
	$i++;
}
?>
</table>
</div>

</div>

<?php include('footerl.php')?>
</body>
</html>