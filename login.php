
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
<div align="center" style="margin:auto" class="content">
<form action="login_process.php" method="post">
<?php if(isset($_SESSION['error'])){?>
<h2>
<?php 
echo $_SESSION['error'];
unset($_SESSION['error']);
?>
</h2>
<?php
}?>
				<p>User Name:<input type="text" name="username"></p>
				<p>Password:<input type="password" name="password"></p>
				<p><input type="submit" value="Login">
</form>
</div>
<script>
$(document).ready(function(){

$('#login').addClass("active");
});
</script>
</body>
</html>
