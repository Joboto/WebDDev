<!DOCTYPE html>
<html>
<head>
	<title>Movement - just move...</title>
	<link rel="stylesheet" href="../css/structure.css" type="text/css" />
	<link rel="stylesheet" href="../css/navigation.css" type="text/css" />
	<script type="text/javascript" src="../scripts/jquery-1.9.1.js"></script>
	<script type="text/javascript" src="../scripts/move.js"></script>
</head>
<body>
<div id="container">
	<div id="header">
		<a href="../" id="logo"><div>
			<h1>MOVEMENT</h1>
			<h4>Start yours...</h4>
		</div></a>
	<div id="loginbox">
		<h4 style="margin:0">Already have an account? Log-in...</h4>
		<form>
			<div style="float:left">
				<label name="email" style="width:90%;text-align:left">Email address</label>
				<br>
				<input name="email" type="email" style="width:90%" />
			</div>
			<div style="float:right">
				<label name="password" style="text-align:left">Password</label>
				<br>
				<input name="password" type="text" style="width:90%" />
			</div>
			<div style="clear:both"></div>
			<input name="login" type="submit" value="Log-in" style="height:23px">
			
		</form>
	</div>
	</div>
	<div style="clear:both"></div>
	<div id="main">
		<div id="navigation">
			<ul>
				<li><a href="../about.html">About</a></li>
				<li><a href="../courses">Courses</a></li>
				<li><a href="../equipment">Equipment</a></li>
				<li><a href="../events">Events</a></li>
				<li><a href="../articles">Articles</a></li>
				<li><a href="../links.html">Links</a></li>
				<li><a href="../contact.php">Contact</a></li>
			</ul>
		</div>
		<div id="maincontainer">
		<button type="button" onclick="test()">Get test</button>
			<form id="registerForm" method="post" action="register()">
				<label for="fname" style="width:25%;text-align:left;">First Name</label><br>
				<input type="text" name="fname" id="fname"/><br>
				<label for="lname" style="width:25%;text-align:left;">Last Name</label><br>
				<input type="text" name="lname" id="lname"/><br>
				<label for="email" style="width:25%;text-align:left;">Email address</label><br>
				<input type="email" name="email" id="email"/><br>
				<label for="comments" style="width:50%;text-align:left;">Tell us a little bit about yourself...</label><br>
				<textarea name="bio" id ="bio" maxlength="1000" cols="50" rows="10"></textarea><br>
				<button type="button" onclick="register()">Submit</button>
			</form>
		</div>
	</div>
	<div style="clear:both"></div>
	<footer id="footer">
		<div id="soclinks">
			<a href="http://www.facebook.co.uk" target="_blank"><img src="../images/facebook.png" alt="facebook.png" title="Go to Facebook" /></a>
			<a href="http://www.youtube.com" target="_blank"><img src="../images/youTubeMedium.png" alt="youTube.png" title="Go to Youtube" width="34px" height="34px"/></a>
		</div>
		<div id="bottomlinks">
			<h4 style="text-align:center">| <a href="#" style="text-decoration:none">Disclaimer</a> | <a href="#" style="text-decoration:none">Careers</a> | <a href="#" style="text-decoration:none">Access</a> |</h4>
		</div>
		<br />
	</footer>
</div>

</body>
</html>
