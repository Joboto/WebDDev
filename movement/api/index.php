<?php
require 'Slim/Slim.php';

\Slim\Slim::registerAutoloader();
$app = new \Slim\Slim();
 
$app->get('/get', function () {echo 'This is a GET route';});
$app->post('/newmember', 'regNew');
$app->put('/put',function () {echo 'This is a PUT route';});
$app->patch('/patch', function () {echo 'This is a PATCH route';});
$app->delete('/delete',function () {echo 'This is a DELETE route';});

$app->run();
/*
function regNew() {
	echo '<script language="javascript">';
	echo 'alert("This is regNew")';
	echo '</script>';
	$fname = $_POST['fname'];
	$fname = $_POST['lname'];
	$fname = $_POST['email'];
	$fname = $_POST['bio'];
	$sql = "INSERT INTO members (fname, lname, email, bio) VALUES (:fname, :lname, :email, :bio)";
	$conn = dbconnect();
	try {
		$stmt = $conn->prepare($sql);
		$stmt->bindParam("fname", $fname);
		$stmt->bindParam("lname", $lname);
		$stmt->bindParam("email", $email);
		$stmt->bindParam("bio", $bio);
		$stmt->execute();
	} catch(PDOException $e) {
		echo "Connection failed: " . $e->getMessage();
	}
	$conn = null;
}

function dbconnect() {
	$dbhost="localhost";
	$dbuser="root";
	$dbpass="23wexcsd";
	$dbname="movement";
	try {
		$conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
		//set PDO error mode to exception
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		return $conn;
	} catch(PDOException $e){
		echo "Connection failed: " . $e->getMessage();
	}
}*/
