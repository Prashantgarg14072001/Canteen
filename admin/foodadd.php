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
<div class="col-sm-4"></div>
<form action="foodaddcode.php" method="POST">
<div class="col-sm-4">
<div class="col-sm-12"style="text-align:center;font-size:25px;margin-top:2%;font-family:chut;margin-bottom:5%;"><b>Add foods here</b></div>

<div class="input-group">
<span class="input-group-addon" style="color:black;"><span>Food Id</span></span>
<input type="text" class="form-control" placeholder="Please enter food id"name="foodid">
</div></br>

<div class="input-group">
<span class="input-group-addon" style="color:black;"><span>Food name</span></span>
<input type="text" class="form-control" placeholder="Please enter food name"name="foodname">
</div></br>

<div class="input-group">
<span class="input-group-addon" style="color:black;"><span>Food type</span></span>
<select name="foodtype"class="form-control">
<option value="select book type">Select Food type</option> 
<option value="piza">piza</option>
<option value="coffie">coffie</option>
<option value="green tea">green tea</option>
<option value="tea">tea</option>
<option value="sweet">sweet</option>
</select>
</div></br>


<div class="input-group">
<span class="input-group-addon" style="color:black;"><span>Book image</span></span>
<input type="file" class="form-control"placeholder="select book image" name="foodpdf">
</div></br>

<input type="submit" class="form-control" 
style="color:white;background:black;border:solid red;"/>
</div>
</form>
<div class="col-sm-4"></div>

</div>
<!--footer start-->
<?php include('footerl.php');?>
<!--footer end-->

</body>
</html>