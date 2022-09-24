<html>
<head>
<link href="css/bootstrap.min.css" rel="stylesheet"/>
<link href="css/bootstrap-theme.min.css" rel="stylesheet"/>
<link href="css/font-awesome.min.css" rel="stylesheet"/>
<link href="css/hover-min.css" rel="stylesheet"/>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>

<style>
.spart
{background:black;min-height:200px;border:2px solid black;}
.services3{
min-height:400px;
padding:30px;

}
.services3{
min-height:500px;
background:url('images/z2.jpg');
background-attachement:fixed;
background-repeat:no-repeat;
background-size:cover;
background:rgba('255,255,255,.5');
}
.services
{
margin-top:5px;

}
.services1
{
padding-top:20px;

}
.ds
{
	margin-top:9%;
	font-size:90px;
	text-align:center;
	color:white;
	text-shadow:10px 1px 10px rgba(0,0,0,.3);
	height: 100px;

}
.ds:hover
{
	background: ;
	color:red;
	
}
</style>
</head>
<body>
<!--Menu start-->
<?php include('header1.php');?>
<!--Menu end-->

<div class="col-sm-12 services3">

<div class="col-sm-12 services">
<div class="col-sm-1"></div>
<div class="col-sm-10">
<div class="col-sm-4">
<div class="col-sm-12 spart">
<div class="col-sm-12" style="margin-top:7%;font-size:90px;text-align:center;color:white;text-shadow:1px 1px 1px black;">
<span class="fa fa-th"></span>
</div>
<div class="col-sm-12" style="padding-top:2%;font-size:20px;text-align:center;color:white;text-shadow:1px 1px 1px black;">
<a href="studentzone.php"><span style="color:white;font-family:chut;">Dashboard</a>
</div>
</div>
</div>

<div class="col-sm-4">
<div class="col-sm-12 spart">
<div class="col-sm-12 ds" >
<span class="fa fa-book"></span>
</div>
<div class="col-sm-12" style="margin-top:2%;font-size:20px;text-align:center;color:white;text-shadow:1px 1px 1px black;">
<a href="requestforbook.php"><span style="color:white;font-family:chut;">Requested for book</a>
</div>
</div>
</div>

<div class="col-sm-4">
<div class="col-sm-12 spart">
<div class="col-sm-12" style="margin-top:9%;font-size:90px;text-align:center;color:white;text-shadow:1px 1px 1px black;">
<span class="fa fa-edit"></span>
</div>
<div class="col-sm-12" style="margin-top:2%;font-size:20px;text-align:center;color:white;text-shadow:1px 1px 1px black;">
<a href="changepass.php"><span style="color:white;font-family:chut;">Change password</a>
</div>
</div>
</div>

</div>

<div class="col-sm-1"></div>
</div>

<div class="col-sm-12 services1">
<div class="col-sm-1"></div>
<div class="col-sm-10">
<div class="col-sm-4">
<div class="col-sm-12 spart">
<div class="col-sm-12" style="margin-top:9%;font-size:90px;text-align:center;color:white;text-shadow:1px 1px 1px black;">
<span class="fa fa-comments"></span>
</div>
<div class="col-sm-12" style="padding-top:2%;font-size:20px;text-align:center;color:white;text-shadow:1px 1px 1px black;">
<a href="std_issuedbook.php"><span style="color:white;font-family:chut;">Issued book</a>
</div>
</div>
</div>

<div class="col-sm-4">
<div class="col-sm-12 spart">
<div class="col-sm-12" style="margin-top:9%;font-size:90px;text-align:center;color:white;text-shadow:1px 1px 1px black;">
<span class="fa fa-user"></span>
</div>
<div class="col-sm-12" style="margin-top:2%;font-size:20px;text-align:center;color:white;text-shadow:1px 1px 1px black;">
<a href="myprofile.php"><span style="color:white;font-family:chut;">My profile </a>
</div>
</div>
</div>

<div class="col-sm-4">
<div class="col-sm-12 spart">
<div class="col-sm-12" style="margin-top:9%;font-size:90px;text-align:center;color:white;text-shadow:1px 1px 1px black;">
<span class="fa fa-lock"></span>
</div>
<div class="col-sm-12" style="margin-top:2%;font-size:20px;text-align:center;color:white;text-shadow:1px 1px 1px black;">
<a href="logout.php"><span style="color:white;font-family:chut;">log out</a>
</div>
</div>
</div>

</div>
<div class="col-sm-1"></div>
</div>
</div>
<!--footer2start-->
<?php include('footers.php');?>
<!--footer2end-->
</body>
</html>