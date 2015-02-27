<!DOCTYPE html>
<html>
<head>
	<title>Movement - just move...</title>
	<link rel="stylesheet" href="../css/structure.css" type="text/css" />
	<link rel="stylesheet" href="../css/navigation.css" type="text/css" />
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
			<form name="registerForm" method="post" action="../scripts/sendUserDetails.php">
				<label for="fname" style="width:25%;text-align:left;">First Name</label><br>
				<input type="text" name="fname" /><br>
				<label for="lname" style="width:25%;text-align:left;">Last Name</label><br>
				<input type="text" name="lname" /><br>
				<label for="username" style="width:25%;text-align:left;">Create a Username</label><br>
				<input type="text" name="username" /><br>
				<label for="email" style="width:25%;text-align:left;">Email address</label><br>
				<input type="email" name="email"/><br>
				<label for="comments" style="width:50%;text-align:left;">Tell us a little bit about yourself...</label><br>
				<textarea name="comments" maxlength="1000" cols="50" rows="10"></textarea><br>
				<input type="Submit" value="Submit"/>
			</form>
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
