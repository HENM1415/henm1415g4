<html>
<head>
	<title>Sign-Up</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
</head>
<body>
	<div class="jumbotron">
		<h1>
	
<?php
require'conn.php';

if(isset($_POST['submit'])) 
{ 
	SignUp($conn); 
}

function SignUp(mysqli $conn) 
{
	if(isset($_POST["username"])) 
	{
		$username = $_POST['username'];
		
		$query = mysqli_query($conn,"SELECT * FROM users WHERE username = '$username' ") or die(mysql_error()); 
		if(!$row = mysqli_fetch_array($query,MYSQLI_NUM) or die(mysql_error())) 
		{ 
			$name = $_POST['na']; 
			$username = $_POST['username'];
			$email = $_POST['email']; 
			$password = $_POST['password'];
			$age = $_POST['age'];
			$location = $_POST['location'];
			$gender = $_POST['gender'];
			$looking = $_POST['looking'];
			$lat = $_POST['lat'];
			$lon = $_POST['lon'];
			$file =  addslashes(file_get_contents($_FILES['photo']));
			$query = "INSERT INTO users (name,username,email,password,age,location,gender,looking,pic,lat,lon) VALUES 
			('".$name."','$username','$email','$password',$age,'$location',$gender,$looking,'$file',$lat,$lon)";
			$data = mysqli_query($conn,$query); 
			if($data) 
			{ 
				echo "Your registration is completed";
				session_start();
				$_SESSION['login_email']= $email;
				header("Location: profile.php");
				die();				
			}
			else
			{
				echo "Unsuccessful registration"; 
			}
		} 
		else 
		{ 
			echo "You are already registered"; 
		} 
	}
}	
function newuser() 
{ 
	$name = $_POST['name']; 
	$username = $_POST['username'];
	$email = $_POST['email']; 
	$password = $_POST['password'];
	$age = $_POST['age'];
	$query = "INSERT INTO users (name,username,email,password,age) VALUES ('$name','$username','$email','$password',$age)"; 
	$data = mysql_query ($query)or die(mysql_error()); 
	if($data) 
	{ 
		echo "YOUR REGISTRATION IS COMPLETED..."; 
	} 
}
?>
</h1>
</div>
</body>
</html>