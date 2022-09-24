<!--
Into this file, we create a layout for registration page.
-->
<?php
include_once('n4.php');

?>

<link rel="stylesheet" type="text/css" href="css/f2.css">
<link href="css/bootstrap.min.css" rel="stylesheet"/>
<link href="css/bootstrap-theme.min.css" rel="stylesheet"/>
<link href="css/font-awesome.min.css" rel="stylesheet"/>
<link href="css/hover-min.css" rel="stylesheet"/>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<style>
  .op
  {
    min-height: 90px;
    background:linear-gradient( #f3a2b2,#f9b5b6);
    margin-top: 70px;

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
<div class="rr" style="margin-top: -110px;">
<div class="col-sm-12 op">
    <div class="row">
    <div class="col-sm-2 "></div>
    <div class="col-sm-8 mn"></div>
    <div class="col-sm-2 "></div>
  </div>
</div>
</div>
<div id="tration"  style="min-height: 650px;">
<form class="form-horizontal" action="registration_code.php" method="POST">
	<div class="col-sm-12">
   <div class="col-sm-2"></div>
   <div class="col-sm-8">
    <h1 style="margin-left: 120px; margin-top: 20px; margin-bottom: 30px; font-family: algerian; font-weight: bold; ">User<span style="color:#f4a6b2; font-family: algerian;
"> Registration <span class="fa fa-leaf fa-spin " style="color:red"></span></span> </h1>
    <div class="form-group">
    <label class="control-label col-sm-2" for="firstname">First Name:</label>
    <div class="col-sm-6">
      <input type="text" name="firstname" class="form-control" id="firstname" placeholder="Enter Firstname">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="lastname">Last Name:</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" name="lastname"  id="lastname" placeholder="Enter Lastname">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="lastname">Gender:</label>
    <div class="col-sm-6">
      <label class="radio-inline"><input type="radio" name="gender" value="Male">Male</label>
    <label class="radio-inline"><input type="radio" name="gender" value="Female">Female</label>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Email:</label>
    <div class="col-sm-6">
      <input type="email" name="email" class="form-control" id="email" placeholder="Enter email">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Password:</label>
    <div class="col-sm-6"> 
      <input type="password" name="password" class="form-control" id="pwd" placeholder="Enter password">
    </div>
  </div>
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" name="create"  style="height: 50px;width: 100px; margin-bottom: 10%; background: linear-gradient(to left, #fcbdb8,#ec8dad); color: #333; border-radius: 40px; padding: 1%; font-size: 20px; ">Submit</button>
    </div>
  </div>
</div> 
  </div>
  </div>
</form>
</div>
<?php  include ("footer.php");?>