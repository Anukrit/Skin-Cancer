
<html>
    <head>
        <title>
            Home
        </title>
    </head>
<body>
<?php 
include_once('menu.php');
?>
<div align="center" style="margin:auto" class="content">
	<h1>Help</h1>

	<div style="display:inline-block; text-align: left;">
	<ol>
		<li><a href="http://www.sunsmart.com.au/uv-sun- protection/uv/uv-widget">UV-Widget from Cancer Council Australia</a></li>
		<li><a href="http://www.sunsmart.com.au/skin-cancer">Skin cancer info</a></li>
		<li><a href="http://www.arpansa.gov.au/uvindex/realtime/tow_rt.htm">Townsville Real-time UV levels</a></li>
		<li><a href="http://uveducation.usq.edu.au/uv-education- activities/about-uv/">About UV (including activities for students)</a></li>
	</ol>
	</div>
</div>
<!--This code is used for changing the active item on the menu-->
<script>
$(document).ready(function(){
$('#help').addClass("active");
});
</script>
<!-- The above code is used to change the active item on the menu. To be explicitly pasted on each page that is created-->
</body>
</html>
