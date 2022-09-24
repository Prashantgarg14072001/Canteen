<?php
error_reporting(0);
$msg=$_REQUEST['msg'];
if($msg==1)
{
	
	echo "<script>alert('your data added succesfully..')</script>";
}
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
<!--menu start-->
<?php include('menul.php');?>
<!--menu end-->
<div class="col-sm-12"style="min-height:450px;background:#b2b2ff">
<div class="col-sm-12"style="text-align:center;font-size:25px;margin-top:2%;font-family:chut;margin-bottom:1.5%;"><b>Requested foods</b></div>
<table border="1px solid black"  class="table">
<tr style="font-family:chut;font-size:20px;">
<th>Request By</th>
<th>Food Name</th>
<th>Food Type</th>
<th>Requested Date</th>
<th>Issue</th>
</tr>
<?php
$i=1;
include('connection.php');
 $select="select * from requestfood inner join tbl_addfood on requestfood.foodid=tbl_addfood.id where requestfood.reqstatus='pending'";
 $res=mysqli_query($select);
while($am=mysqli_fetch_array($res,MYSQLI_BOTH))
{
	?>
	<tr>
	<td><?php echo $am['reqby']?></td>
	<td><?php echo $am['foodname']?></td>
	<td><?php echo $am['foodtype']?></td>
	<td><?php echo $am['reqdate']?></td>
	<td><a onclick="return confirm('Are you sure want to issue')" href="issue.php?id=<?php echo $am['id']?>&&reqby=<?php echo $am['reqby']?>">Issue</a></td>
		</tr>
	<?php
	$i++;
}
?>
</table>

</div>
<!--footer start-->
<?php include('footerl.php');?>
<!--footer end-->

</body>
</html>