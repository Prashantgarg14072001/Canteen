<!--
this is second header file which is visible after login.
-->

<?php
include_once('link.php');
include_once('session.php');
?>
<style>
.header{
	background:#de9439;
	min-height:50px;
	text-align:center;
	font-family:chut;
	font-size:40px;
}

.h{
	min-height:40px;
}

.m{
	padding-top:5px;
	margin-top:5px;
}

#bs-example-navbar-collapse-1 ul li a{
	text-decoration:none;
	color:black;
	font-family:chut;
	font-size:17px;
    text-align:left;
	}#bs-example-navbar-collapse-1 ul li a:hover{background:lightgray;color:blue;}

</style>
<div class="col-sm-12"style="min-height:2px;"></div>

<div class="col-sm-12 header">
<div class="col-sm-2"></div>
<div class="col-sm-8">
<span style="color:black;font-family:chut;">Welcome</span><span style="color:white;"> to User zone</span>
<div class="dropdown navbar-right" id="right" style="margin: 2%; ">
  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"><?php echo $email;?>
  <span class="caret"></span></button>
  <ul class="dropdown-menu">
  	<li><a href="account.php">Account</a></li>
    <li><a href="logout.php">Logout</a></li>
  </ul>
</div>
	</div>
</div>
<div class="col-sm-2"></div></div>
<!--menu start-->
<div class="col-sm-12 h"style="background:black;">
<div class="co-sm-12 m">
<div class="row menu1">
<nav class="navbar navbar-default" id="menu"style="background:;border:1px solid black;">
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
        <li><a href="dashboard.php">DASHBOARD</a></li>
        <li><a href="requestforbook.php">  REQUEST FOR BOOK</a></li>
        <li><a href="std_issuedbook.php">  ISSUED BOOKS</a></li>
        <li><a href="myprofile.php">  MY PROFILE</a></li>
		<li><a href="changepass.php">  CHANGE PASSWORD</a></li>
        <li><a href="logout.php">  LOGOUT</a></li>
   

	 
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