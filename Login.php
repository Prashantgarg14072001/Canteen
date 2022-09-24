<!--
Into this file, we create a layout for login page.
-->

<link rel="stylesheet" type="text/css" href="css/f2.css">
<link href="css/bootstrap.min.css" rel="stylesheet"/>
<link href="css/bootstrap-theme.min.css" rel="stylesheet"/>
<link href="css/font-awesome.min.css" rel="stylesheet"/>
<link href="css/hover-min.css" rel="stylesheet"/>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>

<?php
include_once('n4.php');

?>
<style>
  .op
  {
    min-height: 90px;
    background:linear-gradient( #f3a2b2,#f9b5b6);
 

  }
  .mn
  {
    height: 0px;
    border-left: 110px solid #f4a6b3;
    border-right: 110px solid #f6abb4;
    border-top: 100px solid #f8b2b6;
    border-bottom: 90px solid white;
  }
  .b
{
font-size:32px;
color:#f3a4b2;
text-align:center;
padding-top:10%;
font-family: algerian;
min-height: 150px;
}


</style>
<div class="rr" style="margin-top: -50px;">
<div class="col-sm-12 op">
    <div class="row">
    <div class="col-sm-2 "></div>
    <div class="col-sm-8 mn"></div>
    <div class="col-sm-2 "></div>
  </div>
</div>
</div>
<div style="min-height: 620px; background:#fff ">
<div id="frmRegistration" >
<form class="form-horizontal" method="POST" action="login_code.php">
	
	<div class="col-sm-12">

  <div class="col-sm-7 b" >
    <b>WELCOME <i style="color:black;">TO -<span style="color:#f3a4b2;"> Jyoypra</span>
<span class="fa fa-pagelines" style="color:red"></span>Cantten
</i></b>
     
    </div>

  
     <div class="col-sm-4 "  > 
      <h1 style="font-family: algerian; font-weight: bold;">User <span style="color:#f4a6b2; font-family: algerian;
"> Login <span class="fa fa-leaf fa-spin " style="color:red"></span></span></h1>
 
            <div class="" style="height: 5px; width: 130px; margin-right : 60px; border: 2px solid#9c00e6;"></div>
            <div class="" style="height: 5px; width: 120px; margin: 1% 80px; border: 2px solid #f45e91;margin-bottom:2px;"></div>
      <div class="form-group" >
 <label class="control-label"  for="email" style="font-size: 30px; color: #333">Email <span style="color: red; font-size: 25px">(*)</span></label>
    <input type="email" class="form-control" name="email" id="email" placeholder="Enter email" >
  </div>
      <div class="form-group">
    <label class="control-label" for="pwd"style="font-size: 30px; color: #333"> Password <span style="color: red; font-size: 25px">(*)</span></label>
   <input type="password" class="form-control" name="password" id="pwd" placeholder="Enter password">
 </div>
       <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" name="login"  style="height: 50px;width: 100px; margin-bottom: 2%; background: linear-gradient(to left, #fcbdb8,#ec8dad); color: #333; border-radius: 40px; padding: 1%; font-size: 20px;" >Login</button>
    </div>
     </div>
  </div>
</form>
</div>
</div>
<?php  include ("footer.php");?>