<html>
<head>
<link href="css/bootstrap-theme.min.css" rel="stylesheet"/>
<link href="css/bootstrap.min.css" rel="stylesheet"/>
<link href="css/font-awesome.min.css" rel="stylesheet"/>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<style>
.outer
{
min-height:450px;
background:#b2b2ff;
}
.inner
	{
min-height:430px;
background:#cce8ff;
color:red;
font-size:40px;
padding-top:40px;
font-family:cute;
text-align:center;
margin-top:1%;
margin-bottom:2%;
}

</style>
</head>
<body>
<!--menu start-->
<?php include('menul.php');?>
<!--menu end-->
<div class="col-sm-12 outer">
<div class="col-sm-4"></div>
<div class="col-sm-4 inner">
Change Password 
<div class="col-sm-12" style="color:gray;font-size:15px;">
<div class="col-sm-12">
<div class="col-sm-1"></div>
<div class="col-sm-10"style="padding-top:30px;"><br>
<form action="chlpasscode.php" method="post">

<input type="password" placeholder="Enter your old password"class="form-control" name="password"/><br>
<input type="password" placeholder="Enter your new password"class="form-control" name="npassword"/><br>
<input type="password" placeholder="Confirm password"class="form-control"name="cpassword"/><br><br>
<input type="submit" class="form-control" style="color:white;background:red; border:#00a0dd;"value="Change Password"/>
</form>
</div>
<div class="col-sm-1"></div>
</div>
</div>
</div>
<div class="col-sm-4"></div>
</div>
<!--form end-->

<!--footer-->
<?php include('footerl.php');?>
<!--footer end-->
</body>
	</html>