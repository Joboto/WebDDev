<!DOCTYPE html>
<html>
<head>
	<title>Movement - just move...</title>
	<link rel="stylesheet" href="css/structure.css" type="text/css" />
	<link rel="stylesheet" href="css/navigation.css" type="text/css" />
</head>
<body>
<div id="container">
	<div id="header">
		<div id="logo">
			<h1>MOVEMENT</h1>
			<h4>Start yours...</h4>
		</div>
	<div id="loginbox">
		<h4 style="margin:0">Login to view your account.</h4>
		<form>
			<div style="float:left">
				<label name="email" style="width:90%;text-align:left">Email address</label>
				<br>
				<input name="email" type="email" style="width:90%" />
			</div>
			<div style="float:right">
				<label name="email" style="text-align:left">Password</label>
				<br>
				<input name="email" type="text" style="width:90%" />
			</div>
		</form>
	</div>
	</div>
	<div style="clear:both"></div>
	<div id="Main">
		<div id="navigation">
			<ul>
				<li><a href="about.html">About</a></li>
				<li><a href="courses">Courses</a></li>
				<li><a href="equipment">Equipment</a></li>
				<li><a href="events">Events</a></li>
				<li><a href="articles">Articles</a></li>
				<li><a href="links.html">Links</a></li>
				<li><a href="contact.php">Contact</a></li>
			</ul>
		</div>
		<div id="maincontainer">
			<iframe width="560" height="315" src="https://www.youtube.com/embed/Su0vLwyQTTI" frameborder="0" allowfullscreen></iframe>
			<!--<iframe width="420" height="315" src="https://www.youtube.com/embed/fdWDvH8AITU" frameborder="0" allowfullscreen></iframe>-->
			<p>Here you will find everything you need to get moving! From parkour to gymnastic strength to the subtleties of the Feldenkrais method.
			Check out our <a href="courses">courses</a> page to see what's available and get started! <br>For an overview of our philosophy and approach, 
			have a look at our <a href="about.html">bio</a>.
			</p>
		</div>
	</div>
	<div style="clear:both"></div>
	<footer id="footer">
		<div id="flinks">
			<a href="http://www.facebook.co.uk" target="_blank"><img src="images/facebook.png" alt="facebook.png" title="Go to Facebook" /></a>
			<a href="http://www.twitter.co.uk" target="_blank"><img src="images/twitter.png" alt="twitter.png" title="Go to Twitter" /></a>
		</div>
		<div id="weelinks">
			<h4 style="text-align:center">| Disclaimer | Careers | Corporate | Access |</h4>
		</div>
		<br />
	</footer>
</div>

</body>
</html>
<!--<?php 
 session_start();
 if(isset($_SESSION['user'])){
  echo "<script>window.location='member/member.php'</script>";
 } else {
  echo "<script>window.location='account/login.php'</script>";
 }	
?>-->

