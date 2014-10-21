<html>
<head>
	<title>Profile</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
</head>
<body>
	<div class="jumbotron">
		<h1>Profile</h1>
	</div>
	<div id="container">
	<ul class="list-group">

<?php
require'conn.php';
session_start();
$email=$_SESSION['login_email'];
$query = mysqli_query($conn,"SELECT username, name, age, email, location, g1.description as lookfor, pic FROM users, genders g1 WHERE email = '$email' and g1.id=looking") or die(mysql_error()); 
$data = mysqli_fetch_assoc($query);
if($data)
{
	echo "<li class=\"list-group-item\">";
	echo "<span class=\"badge\">". $data['username']."</span>Username</li>";
	echo "<li class=\"list-group-item\">";
	echo "<span class=\"badge\">". $data['name']."</span>Name</li>";
	echo "<li class=\"list-group-item\">";
	echo "<span class=\"badge\">". $data['age']."</span>Age</li>";
	echo "<li class=\"list-group-item\">";
	echo "<span class=\"badge\">". $data['email']."</span>Email</li>";
	echo "<li class=\"list-group-item\">";
	echo "<span class=\"badge\">". $data['location']."</span>Location</li>";
	echo "<li class=\"list-group-item\">";
	echo "<span class=\"badge\">". $data['lookfor']."</span>Looking for</li>";
	$uri = 'data:image/png;base64,'.base64_encode($data['pic']);
	echo "<img src=\"".$uri."\">";
	
}

?>
</ul>
	</div>
</body>
</html>