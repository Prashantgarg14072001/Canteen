<?php
error_reporting(0);
$msg=$_REQUEST['msg'];
if($msg==1)
{
	
	echo "<script>alert('your data added succesfully..')</script>";
}
?>

<link href="css/bootstrap.min.css" rel="stylesheet"/>
<link href="css/bootstrap-theme.min.css" rel="stylesheet"/>
<link href="css/font-awesome.min.css" rel="stylesheet"/>
<link href="css/hover-min.css" rel="stylesheet"/>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<style>
.header3
{
	min-height:200px;
	font-size:25px;
	margin-top:10%;
	/*background:rgba(0,0,0,.4);*/
	
}
.bgimage
{
	min-height:400;
background: #fff
}
  .op
  {
    min-height: 90px;
    background:linear-gradient( #f3a2b2,#f9b5b6);
    margin-top: 75px;

  }
  .mn
  {
    height: 0px;
    border-left: 110px solid #f4a6b3;
    border-right: 110px solid #f6abb4;
    border-top: 100px solid #f8b2b6;
    border-bottom: 90px solid white;
  }
</style>
</head>
<body>

<!--Menu start-->
<?php include('n4.php');?>
<!--Menu end-->




<!--header3 start-->
<div class="rr" style="margin-top: -130px;">
<div class="col-sm-12 op">
    <div class="row">
    <div class="col-sm-2 "></div>
    <div class="col-sm-8 mn"></div>
    <div class="col-sm-2 "></div>
  </div>
</div>
</div>
<div class="col-sm-12" style="margin-bottom:2%; background: #fff; min-height: 800px;">

<div class="col-sm-6 bgimage" style="margin-top: 10%;">

<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14239.751826908898!2d80.9842291!3d26.8419256!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xbd9320ac65c4ba45!2sSsak+Solutions+Services+Pvt.+Ltd.!5e0!3m2!1sen!2sin!4v1491978162542" width="400" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>

</div>
<div class="col-sm-6 header3">
<p style="color: #faa59e;">shiv sambhu cant
  een Majhuli Sankarpur <br>
Ballia-  277203, uttar pradesh<br>

Mobile No. : 7881125100<br>
Email Id : prashantvikash100@gmail.com</p><br>
</div>
<div class="col-sm-4">
<span style="margin-left:140px;font-size:23px;font-family:chut; background: #ffff; ">Enquiry box</span><br>
<form action="contectcode.php" method="POST">
Name:<input type="text" class="form-control" name="name" required="required">
Contact no.:<input type="number"class="form-control" name="contactus">
E-mail:<input type="email"class="form-control" name="email">
</div>
<div class="col-sm-12">
<div class="col-sm-4"></div>
<div class="col-sm-8" style="align-items: center;">
Message:<textarea name="message"class="form-control"></textarea><br>
<input type="submit" name="contact"  value="submit" style="height: 50px;width: 100px; margin-bottom: 2%; background: linear-gradient(to left, #fcbdb8,#ec8dad); color: #333; border-radius: 40px; padding: 1%; font-size: 20px;">
</div>
</div>
</form>


</div>
</div>
</body>

<!--footer start-->
<?php include('footer.php');?>
<!--footer end-->
