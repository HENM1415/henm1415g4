<html>
<head>
	<title>Sign-Up</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
</head>
<body>
	<div class="jumbotron">
		<h1>Sign-Up</h1>
	</div>
	<div id="container">
		<form method="POST" action="signup.php">
			<div class="form-group">
				<div class="container">
				<h2>Registration Form</h2>
				<p><div class="input-group input-group-lg">
				  <span class="input-group-addon">Name</span>
				  <input id="na" name="na" type="text" class="form-control" placeholder="Name">
				</div></p>
				<p><div class="input-group input-group-lg">
				  <span class="input-group-addon">Username</span>
				  <input id="username" name="username" type="text" class="form-control" placeholder="Username">
				</div></p>
				<p><div class="input-group input-group-lg">
				  <span class="input-group-addon">Email</span>
				  <input id="email" name="email" type="text" class="form-control" placeholder="Email">
				</div></p>
				<p><div class="input-group input-group-lg">
				  <span class="input-group-addon">Age</span>
				  <input id="age" name="age" type="text" class="form-control" placeholder="Age">
				</div></p>
				<p><div class="input-group input-group-lg">
				  <span class="input-group-addon">Password</span>
				  <input id="password" name="password" type="password" class="form-control" placeholder="Password">
				</div></p>
				<p><input class="btn btn-lg btn-success" id="submit" type="submit" name="submit" value="Sign Up"></p>
				</div>
			</div>
		</form>
	</div>
</body>
</html>

