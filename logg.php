<?php include('n4.php');?>
 <link href="css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/hover-min.css" rel="stylesheet" type="text/css"/>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
  <link rel="stylesheet" href="css/loo.css">
<style>
	.op
	{
		height: 190px;
		background:linear-gradient(#f3a2b2,#f9b5b6);
		margin-top: 60px;

	}
	.mn
	{
		 height: 10px;
 
    border-left: 110px solid #f4a6b3;
    border-right: 110px solid #f6abb4;
    border-top: 100px solid #f8b2b6;
    border-bottom: 90px solid white;
	}
</style>
<div class="col-sm-12 op">
		<div class="row">
		<div class="col-sm-2 "></div>
		<div class="col-sm-8 mn"></div>
		<div class="col-sm-2 "></div>
	</div>
</div>
 <h1 style="text-align: center; font-weight: bold; font-family: algerian; font-size: 40px;">&nbsp;Registration Page!.....</span> </h1>
            <div class="" style="height: 5px; width: 250px; margin: 0 auto; border: 2px solid #f45e91;"></div>
            <div class="" style="height: 5px; width: 230px; margin: 0 auto; border: 2px solid #9c00e6;"></div>
            <div class="" style="height: 5px; width: 200px; margin: 0 auto; border: 2px solid #f45e91;"></div>
            <div class="col-sm-12" style="min-height: 700px; background: #fff">
                <div class="col-sm-4"></div>
                <div class="col-sm-4" style="min-height: 770px;">
<div class="hero">
	<div class="from-box">
		<div class="buttom-box">
			<div id="btn"></div>
			<button type="button" class="toggle-btn" onclick="login()">Sing In</button>
			<button type="button" class="toggle-btn" onclick="register()">Register </button>
		</div>
			<div class="social-icones">
		   <a href="http://www.facebook.com/" target="_blank" > <i  class="fa fa-facebook"></i></a>
                        <a href="http://www.twitter.com/" target="_blank"> <i class="fa fa-twitter"></i></a>
                      <a href="https://chat.whatsapp.com/G93fn02fru31i76ZjH7qcg" target="_blank" title="7355916435"> <i class="fa fa-whatsapp"></i></a>
                     </div> 
                      
                      
                      <form  action="regicode.php" method="post" class="input-groups">
                        <input type="text" class="input-field" placeholder="User Id"  for="firstname" id="firstname" name ="firstname">
                        <input type="text" class="input-field" placeholder="Lastname's name" for="lastname" name="lastname"  id="lastname">
                        <!-- <input type="date" class="input-field" placeholder="D.O.B" name="dob" required=""> -->
                        <!-- <input type="number" class="input-field" placeholder="Mobile No." name="mobileno" required=""> -->
                        <input type="email" class="input-field" placeholder="Email Id" for="email"  id="email" name="email">
                         <input type="password" class="input-field" placeholder="Password" for="pwd" name="password" id="pwd">
                            <!-- <input type="password" class="input-field" placeholder="confir password" name="capassword" required=""> -->
                                   <!-- <input type="text" name="address" class="input-field" placeholder="Enter Address" required=""> -->
                                   <!-- <input type="number" name="pine" class="input-field" placeholder="Enter pinecode" required=""> -->
                                <!-- <input type="checkbox" class="chech-box"  name="checkker" style="margin-top: 30px;" ><span>&nbsp;I agree to the terms & condition </span><br> -->
                                <button type="submit"  name="register" value="register" style="height: 50px;width: 100px; margin-bottom: 2%; background: linear-gradient(to left, #fcbdb8,#ec8dad); color: #333; border-radius: 40px; padding: 1%; font-size: 20px;  margin-top: 6%;">Register</button>
                     </form>
                    <form action="logger.php" method="post" id="login" class="input-groups">
                        <input type="name" class="input-field" name="username" placeholder="User Id" required="">
                            <input type="text" name="password"  class="input-field" placeholder="Password" required="">
                                <input type="checkbox"  class="chech-box"  name="" style="margin-top: 30px;" ><span>&nbsp;Remember Password </span><br>
                                <button type="submit" name="submit" value="login" style="height: 50px;width: 100px; margin-bottom: 2%; margin-top: 6%; background: linear-gradient(to left, #fcbdb8,#ec8dad); color: #333; border-radius: 40px; padding: 1%; font-size: 20px;">Log In</button>
                     </form>
                     
	</div>
</div>
</div>
<div class="col-sm-4"></div>
</div>
<script>
   var x = document.getElementById("login");
    var y = document.getElementById("register");
     var z = document.getElementById("btn");

     function register() {
     	x.style.left ="-400px";
     	y.style.left ="50px";
     	z.style.left ="110px";
     }
   function login() {
     	x.style.left ="50px";
     	y.style.left ="450px";
     	z.style.left ="0px";
     }
</script>

<?php include('footer.php');?>  