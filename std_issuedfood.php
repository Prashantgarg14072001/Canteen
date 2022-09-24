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
<?php include('header1.php');?>
<!--menu end-->
<div class="col-sm-12"style="min-height:400px;background:#b2b2ff">
<div class="col-sm-12"style="color:black;font-size:25px;text-align:center;font-family:chut;margin-top:2%;margin-bottom:2%;"><b>Issued Book</b> </div>

<table border=1  class="table">
<tr>
<th><b style="font-family:chut;">Request By </b></th>
<th><b style="font-family:chut;">Book Name</b></th>
<th><b style="font-family:chut;">Book Type</b></th>
<th><b style="font-family:chut;">Book Author</b></th>
<th><b style="font-family:chut;">Issue</b></th>
</tr>
<?php

$i=1;
include('connection.php');
 $sql="select * from requestfood inner join tbl_addfood on requestfood.foodid=tbl_addfood.id where requestfood.reqstatus='issue' and requestfood.reqby='".$_SESSION['id']."'";

	$result = mysqli_query($conn, $sql);
	while($am=mysqli_fetch_array($result,MYSQLI_BOTH))
	
{
	?>
	<tr>
	<td><?php echo $am['reqby']?></td>
	<td><?php echo $am['bookname']?></td>
	<td><?php echo $am['booktype']?></td>
	<td><?php echo $am['bookauthor']?></td>
	<td>Issued</td>
		</tr>
	<?php
	$i++;
}
?>
</table>

</div>
<!--footer start-->
<?php include('footers.php');?>
<!--footer end-->

</body>
</html>