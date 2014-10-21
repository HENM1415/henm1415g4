<html>
<head>
	<title>Sign-Up</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
</head>
<body>
	<div class="jumbotron">
		<h1>Log In</h1>
	</div>
	<div id="container">
		<form method="POST" action="checklogin.php">
			<div class="form-group">
				<div class="container">
				<p><div class="input-group input-group-lg">
				  <span class="input-group-addon">Email</span>
				  <input id="email" name="email" type="text" class="form-control" placeholder="Email">
				</div></p>
				<p><div class="input-group input-group-lg">
				  <span class="input-group-addon">Password</span>
				  <input id="password" name="password" type="password" class="form-control" placeholder="Password">
				</div></p>
				<div class="checkbox">
					<label><input type="checkbox"> Remember me</label>
				</div>
				<p><input class="btn btn-lg btn-success" id="submit" type="submit" name="submit" value="Log In"></p>
				</div>
			</div>
		</form>
	</div>
</body>
</html>