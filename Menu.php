<?php
include_once("config.php");

?>
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<meta content="width=device-width,initial-scale=1" name="viewport">
<!-- Optional theme -->
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<script  src="https://code.jquery.com/jquery-3.2.1.min.js"  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </head>
    <body>
<nav class="navbar navbar-default navbar-fixed-top">    
    <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Sun Care Research</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li id="home"><a href="home.php">Home</a></li>
            <li id="about"><a href="about.php">About</a></li>
			<li id="download"><a href="downloads.php">Downloads</a></li>
            <li id="contact"><a href="contact.php">Contact</a></li>
            <li id="help"><a href="help.php">Help</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li id="login"><a href="login.php">Login</a></li>
            <li id="register"><a href="register.php">Register</a></li>
			<li id="upload"><a href="upload.php">Upload Files</a></li>
            <li id="logout"><a href="logout.php">Logout</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>   
</nav>   
<?php 
session_start();
	if(isset($_SESSION["valid_user"]))
	{
			
?>
<script>
$(document).ready(function(){
$('#login').hide();
$('#register').hide();
$('#logout').show();
});
</script>
<?php 
		
	}
	else
	{
		 
?>
	<script>
$(document).ready(function(){

$('#login').show();
$('#register').show();
$('#logout').hide();
});
</script>	    
<?php

	}
	if(!(isset($_SESSION["valid_user"])))
	{

?>  
<script>
$(document).ready(function(){
$('#upload').hide();
});
</script>
<?php
	}
?>
