<?php
session_start()
?>

<!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>
</head>
<body>

	<h1>Please Login</h1>
		
		<a href="Login.php"> login </a>

	<?php 

		if($_SERVER['REQUEST_METHOD'] == "POST") {
			
			if(empty($_POST['fname']) && empty($_POST['lname']) && empty($_POST['gender']) && empty($_POST['mail']) && empty($_POST['username']) && empty($_POST['password']) && empty($_POST['recemail'])) {
				echo "Please fill up the form";
			} 
			else {
				$fname = $_POST['fname'];
				$lname = $_POST['lname'];
				$gender = $_POST['gender'];
				$mail = $_POST['mail'];
				$username = $_POST['username'];
				$password = $_POST['password'];
				$Remail = $_POST['recemail'];
				echo "Client name is: $fname $lname";

				$W=fopen("Dstore.txt", "a");
				//fwrite($f, $fname." ".$lname." ".$gender." ".$mail." ".$username." ".$pw." ".$email);
			fwrite($W,$fname ."\n");
	        fwrite($W,$lname ."\n");
            fwrite($W,$gender ."\n");
	        fwrite($W,$mail."\n");
	        fwrite($W,$username."\n");
	        fwrite($W,$password ."\n");
	        fwrite($W,$Remail."\n");
			}
		}
	?>

</body>
</html>