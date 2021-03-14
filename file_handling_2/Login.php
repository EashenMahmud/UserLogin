<?php
  session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Log In Form</title>
</head>

<body>
   
  <?php
  $user=$password="";
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
         if(empty($_POST['username'])||empty($_POST['password'])){
          echo "<h2>Fill up the from properly</h2>";
         }
         else{
         
          $user=trim($_POST['username']);
          $password=trim($_POST['password']);
          $f=fopen("Dstore.txt", "r");
          $data=fread($f,filesize("Dstore.txt"));
          $data_filter=explode("\n",$data);
         
          $u=$data_filter[4];
          $p=$data_filter[5];
          if($user==$u && $password==$p)
          {
            echo "You are login as : $u"."<br>";
            $_SESSION['name']=$_POST['username'];
            $_SESSION['pas']=$_POST['password'];
            $f=fopen("Dstore.txt", "r");
            $data=fread($f,filesize("Dstore.txt"));
            $data_filter=explode("\n",$data);


            
            echo "<a href='Logout.php'>Logout</a>";

          }
          else
          {
            echo "provide correct user name and password";

          }
           
        }
       
  }?>
  
  
  


	<h2>Login Form</h2>
	<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
	 <div>
    <label for="username"><b>Username</b></label><br>	
    <input type="text" placeholder="Enter Username" name="username" required>
    <br><br>

    <label for="password"><b>Password </b></label><br>	
    <input type="password" placeholder="Enter Password" name="password" required>
    <br><br>
        
    <button type="submit">Login</button>
    <br>
    
  </div>

  


	</form>

</body>
</html>