<html>
<head>
<link href="css/bootstrap.min.css" rel="stylesheet"/>
<link href="css/bootstrap-theme.min.css" rel="stylesheet"/>
<link href="css/font-awesome.min.css" rel="stylesheet"/>
<link href="css/hover-min.css" rel="stylesheet"/>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>

<style>
.spart{
background:#045696;
min-height:200px;
border:1px solid black;
}
.services3{
min-height:400px;
padding:40px;

}
.servi{
min-height:450px;
}

.services1
{
padding-top:25px;
}

</style>
</head>
<body>
<!--Menu start-->
<?php include('menul.php');?>
<!--Menu end-->

<div class="col-sm-12 servi">

<div class="col-sm-12 services">
<div class="col-sm-1"></div>
<div class="col-sm-10">
<div class="col-sm-3">
<div class="col-sm-12 spart">
<div class="col-sm-12" style="margin-top:7%;font-size:90px;text-align:center;color:white;text-shadow:1px 1px 1px black;">
<span class="fa fa-th"style="padding-top:18px;">
</div>
<div class="col-sm-12" style="padding-top:2%;font-size:20px;text-align:center;color:white;text-shadow:1px 1px 1px black;">
<a href="libraryzone.php"><span style="color:white;font-family:chut;">Dashboard</a>
</div>
</div>
</div>

<div class="col-sm-3">
<div class="col-sm-12 spart">
<div class="col-sm-12" style="margin-top:9%;font-size:90px;text-align:center;color:white;text-shadow:1px 1px 1px black;">
<span class="fa fa-book"style="padding-top:18px;"></span>
</div>
<div class="col-sm-12" style="margin-top:2%;font-size:20px;text-align:center;color:white;text-shadow:1px 1px 1px black;">
<a href="bookadd.php"><span style="color:white;font-family:chut;">Add books</a>
</div>
</div>
</div>

<div class="col-sm-3">
<div class="col-sm-12 spart">
<div class="col-sm-12" style="margin-top:9%;font-size:90px;text-align:center;color:white;text-shadow:1px 1px 1px black;">
<span class="fa fa-edit"style="padding-top:18px;"></span>
</div>
<div class="col-sm-12" style="margin-top:2%;font-size:20px;text-align:center;color:white;text-shadow:1px 1px 1px black;">
<a href="bookrequest.php"><span style="color:white;font-family:chut;">Requested book</a>
</div>
</div>
</div>

<div class="col-sm-3">
<div class="col-sm-12 spart">
<div class="col-sm-12" style="margin-top:9%;font-size:90px;text-align:center;color:white;text-shadow:1px 1px 1px black;">
<span class="fa fa-pencil"style="padding-top:18px;"></span>
</div>
<div class="col-sm-12" style="margin-top:2%;font-size:20px;text-align:center;color:white;text-shadow:1px 1px 1px black;">
<a href="chlpass.php"><span style="color:white;font-family:chut;">Change password</a>
</div>
</div>
</div>

</div>

<div class="col-sm-1"></div>

</div>
<div class="col-sm-12 services1">
<div class="col-sm-1"></div>
<div class="col-sm-10">
<div class="col-sm-3">
<div class="col-sm-12 spart">
<div class="col-sm-12" style="margin-top:9%;font-size:90px;text-align:center;color:white;text-shadow:1px 1px 1px black;">
<span class="fa fa-comments"style="padding-top:18px;"></span>
</div>
<div class="col-sm-12" style="padding-top:2%;font-size:20px;text-align:center;color:white;text-shadow:1px 1px 1px black;">
<a href="issuedbook.php"><span style="color:white;font-family:chut;">Issued book</a>
</div>
</div>
</div>

<div class="col-sm-3">
<div class="col-sm-12 spart">
<div class="col-sm-12" style="margin-top:9%;font-size:90px;text-align:center;color:white;text-shadow:1px 1px 1px black;">
<span class="fa fa-user"style="padding-top:18px;"></span>
</div>
<div class="col-sm-12" style="margin-top:2%;font-size:20px;text-align:center;color:white;text-shadow:1px 1px 1px black;">
<a href="studentmgmt.php"><span style="color:white;font-family:chut;">Student mgmt</a>
</div>
</div>
</div>

<div class="col-sm-3">
<div class="col-sm-12 spart">
<div class="col-sm-12" style="margin-top:9%;font-size:90px;text-align:center;color:white;text-shadow:1px 1px 1px black;">
<span class="fa fa-folder-open"style="padding-top:18px;"></span>
</div>
<div class="col-sm-12" style="margin-top:2%;font-size:20px;text-align:center;color:white;text-shadow:1px 1px 1px black;">
<a href="bookmgmt.php"><span style="color:white;font-family:chut;">Books mgmt</a>
</div>
</div>
</div>

<div class="col-sm-3">
<div class="col-sm-12 spart">
<div class="col-sm-12" style="margin-top:9%;font-size:90px;text-align:center;color:white;text-shadow:1px 1px 1px black;">
<span class="fa fa-sign-out"style="padding-top:18px;"></span>
</div>
<div class="col-sm-12" style="margin-top:2%;font-size:20px;text-align:center;color:white;text-shadow:1px 1px 1px black;">
<a href="alogin.php"><span style="color:white;font-family:chut;">Logout</a>
</div>
</div>
</div>

</div>
<div class="col-sm-1"></div>
</div>
</div>

<!--footer start-->
<?php include('footerl.php');?>
<!--footer start-->
</body>
</html>