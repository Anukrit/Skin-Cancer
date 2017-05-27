
<html>
    <head>
        <title>
            Login
        </title>
    </head>
<body>
<?php 
include_once('menu.php');
?>


<div align="" style="margin:auto" class="content">
<form action="login_process.php" method="post" class="col-md-6 col-md-push-3 jumbotron">
<?php if(isset($_SESSION['error'])){?>
<h2>
<?php 
echo $_SESSION['error'];
unset($_SESSION['error']);
?>
</h2>
<?php
}?>
	<div class="col-md-5 text-right  ">UserName: </div> 
	<div class="col-md-7 margin-bottom-10"><input type="text" name="username"></div>

	<div class="col-md-5 text-right  ">Password: </div> 
	<div class="col-md-7 margin-bottom-10"><input type="password" name="password"></div>

	<div class="col-md-5 text-right  "></div> 
	<div class="col-md-7"><input type="submit" value="Login"></div>

</form>
</div>
<script>
$(document).ready(function(){

$('#login').addClass("active");
});
</script>
</body>
</html>
