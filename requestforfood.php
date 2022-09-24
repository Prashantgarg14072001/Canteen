
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
<?php include('header1.php')?>
<!--menus end-->
<div class="col-sm-12" style="min-height:410px;background:url('images/image6.jpg');background:rgba(0,0,255,.3);">

<div class="col-sm-12"style="margin-top:2%;">
<div class="col-sm-12"style="color:black;text-align:center;font-family:chut;font-size:30px;
padding-bottom:20px;"><b>Request for Book</b></div>
<div class="col-sm-2"></div>

<table border="1px solid black"  class="table">
<tr style="font-size:20px;">
	<th><b style="font-family:chut;"> Id</b></th>
<th><b style="font-family:chut;">Book Id</b></th>
<th><b style="font-family:chut;">Book Name</b></th>
<th><b style="font-family:chut;">Book Type</b></th>
<th><b style="font-family:chut;">Book Image</b></th>
<th><b style="font-family:chut;">Request</b></th>
</tr>
<?php
$i=1;
include('connection.php');
 $sql = "SELECT * FROM tbl_addfood";
	$result = mysqli_query($conn, $sql);
{
	while($am=mysqli_fetch_array($result,MYSQLI_BOTH))
	?>
	<tr>
	<td><?php echo $am[1]?></td>
	<td><?php echo $am[2]?></td>
	<td><?php echo $am[3]?></td>
	<td><?php echo $am[4]?></td>
	<td><?php echo $am[5]?></td>
	<td><a onclick="return confirm('Are you sure want to request')" href="request.php?id=<?php echo $am[0]?>">Request</a></td>
		</tr>

	<?php
	$i++;
}
?>
</table>
</div>
</div>
</div>

<?php include('footers.php')?>
</body>
</html>