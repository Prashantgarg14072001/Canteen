<?php
session_start();
$email = $_SESSION['email'];
$id = $_SESSION['id'];
if($email=="")
{
	header('location:login.php');
}
?>
<style>
.h{
	min-height:40px;
}

.m{
	padding-top:5px;
	
}
#bs-example-navbar-collapse-1 ul li a{
	text-decoration:none;
	color:white;
	font-family:chut;
	font-size:17px;
    text-align:right;
	}#bs-example-navbar-collapse-1 ul li a:hover{background:gray;color:blue;}
	
.b{
	font-size:50px;
	font-family:chut;
}
</style>
<div class="col-sm-12" style="background:black;min-height:10px;"></div>
<div class="col-sm-12">
<div class="col-sm-4">
<img src="images/logo2.jpeg"/>
</div>
<div class="col-sm-7 b">
<span style="color:red;">Librarian</span> Zone
</div>
</div>

<!--menustart-->

<div class="col-sm-12 h">
<div class="row">
<div class="col-sm-12">
<div class="co-sm-12 m">
<div class="row menu1">
<nav class="navbar navbar-default" id="menu"style="background:black;border: 1px solid black;">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="libraryzone.php ">Dashboard</a></li>
        <li><a href="foodadd.php">  Add foods</a></li>
        <li><a href="foodrequest.php">  Requested foods</a></li>
        <li><a href="issuedfood.php">  Issued foods</a></li>
		<li><a href="studentmgmt.php">  Student Mgmt</a></li>
        <li><a href="foodmgmt.php">  foods Mgmt</a></li>
        <li><a href="chlpass.php">  Change password</a></li>
        <li><a href="logout.php">  Logout</a></li>
		
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
</div>
</menu>
</div>
</div>
</div>
</div>
<!--menu end-->