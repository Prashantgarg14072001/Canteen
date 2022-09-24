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
<div class="col-sm-12"style="min-height:450px;background:#b2b2ff;">
<div class="col-sm-12"style="font-family:chut;font-size:25px;margin-top:2%;margin-bottom:1.5%;text-align:center;"><b>Issued foods</b></div>
<table border="1 px solid black"  class="table">
<tr style="font-family:chut;font-size:20px;">
<th>Request By</th>
<th>Food Name</th>
<th>Food Type</th>
<!-- <th>Food Author</th> -->
<th>Issue</th>
</tr>
<?php
$i=1;
include('connection.php');
 $select="select * from requestfood inner join tbl_addfood on requestfood.foodid=tbl_addfood.id where requestfood.reqstatus='issue'";
 $res=mysqli_query($select);
while($am=mysqli_fetch_array($res,MYSQLI_BOTH))
{
	?>
	<tr>
	<td><?php echo $am['reqby']?></td>
	<td><?php echo $am['foodname']?></td>
	<td><?php echo $am['foodtype']?></td>
	<td><?php echo $am['foodauthor']?></td>
	<td>Issued</td>
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