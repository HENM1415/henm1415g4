<html>
<body>
<p>
<?php
require'conn.php';
if(isset($_POST['submit'])) 
{ 
	SignUp($conn); 
}
function SignUp(mysqli $conn) 
{
	if(isset($_POST["email"])) 
	{
		$email = $_POST['email'];
		$password = $_POST['password'];
		$query = mysqli_query($conn,"SELECT * FROM users WHERE email = '$email' and password='$password'") or die(mysql_error()); 
		if($row = mysqli_fetch_array($query,MYSQLI_NUM) or die(mysql_error())) 
		{ 
				session_start();
				$_SESSION['login_email']= $email;
				echo $row;
				header("Location: profile.php");
				die(); 
		} 
	}
}	
?>
</p>
</body>
</html>