<html>
<head>
	<title>Sign-Up</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
</head>
<script src="https://apis.google.com/js/client.js?onload=handleClientLoad"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script type="text/javascript">
function getCoordinates(){
	var urlPart1 = "http://maps.googleapis.com/maps/api/geocode/json?address=";
	var urlPart2 = "=true_or_false";
	var pos = document.getElementById("location").value;
	// var url = "http://maps.googleapis.com/maps/api/geocode/json?address=Aachen=true_or_false";
	var url = urlPart1 + pos + urlPart2;
	// alert(url);
	// var data;
	console.log(url);
	
	$.getJSON(url, function(data) {
	    //data is the JSON string
	    var lat = data.results[0].geometry.location.lat;
	    var lng = data.results[0].geometry.location.lng;

	    document.getElementById("lat").value = lat;
	    document.getElementById("lng").value = lng;
	    console.log(data.results[0].geometry.location);    
	});
}
	
</script>
<body>
	<div class="jumbotron">
		<h1>Sign-Up</h1>
	</div>
	<div id="container">
		<form method="POST" action="signup.php" enctype="multipart/form-data"  onSubmit = "getCoordinates()">
			<div class="form-group">
				<div class="container">
				<h2>Registration Form</h2>
				<p><div class="input-group input-group-lg">
				  <span class="input-group-addon">Name</span>
				  <input id="na" name="na" type="text" class="form-control" placeholder="Name">
				</div></p>
				<p><div class="input-group input-group-lg">
				  <span class="input-group-addon">Age</span>
				  <input id="age" name="age" type="text" class="form-control" placeholder="Age">
				</div></p>
				<p><div class="input-group input-group-lg">
				  <span class="input-group-addon">Location</span>
				  <input id="location" name="location" type="text" class="form-control" placeholder="Location">
				</div></p>
				<p><div class="input-group input-group-lg">
				  <span class="input-group-addon">Email</span>
				  <input id="email" name="email" type="text" class="form-control" placeholder="Email">
				</div></p>
				<p>
				<div class="dropdown">
					<select class="btn btn-default dropdown-toggle" name="gender">
					  <option value="0">-Select Gender-</option>
					  <?php
							require_once 'conn.php';
							$query = mysqli_query($conn,"SELECT * FROM genders ");
							while($data=mysqli_fetch_array($query,MYSQLI_NUM))
							{
								echo "<option value=".$data[0].">";
								echo $data[1]."</option>";
							}
						?>
					</select>
				
					<select class="btn btn-default dropdown-toggle" name="looking">
					  <option value="0">-Looking for-</option>
					  <?php
					  $query = mysqli_query($conn,"SELECT * FROM genders ");
							while($data=mysqli_fetch_array($query,MYSQLI_NUM))
							{
								echo "<option value=".$data[0].">";
								echo $data[1]."</option>";
							}
						mysqli_close($conn);
					   ?>
					</select>
				</div>
				
				</p>
				<p><div class="input-group input-group-lg">
				  <span class="input-group-addon">Username</span>
				  <input id="username" name="username" type="text" class="form-control" placeholder="Username">
				</div></p>
				<p><div class="input-group input-group-lg">
				  <span class="input-group-addon">Password</span>
				  <input id="password" name="password" type="password" class="form-control" placeholder="Password">
				</div></p>
				<p><div class="input-group input-group-lg">
				  <span class="input-group-addon">Photo</span>
				  <input id="photo" name="photo" type="file" class="form-control" placeholder="Path">
				</div></p>
				<p><input class="btn btn-lg btn-success" id="submit" type="submit" name="submit" value="Sign Up"></p>
				</div>
				<input type ="hidden" name="lat" id ="lat">
				<input type ="hidden" name="lon" id ="lng">
			</div>
		</form>
	</div>
</body>
</html>

