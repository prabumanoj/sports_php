<!DOCTYPE html>
<html>
<head>
<?php include 'header.php' ?>
<style>
</style>	
</head>	
<body>

<?php include 'navbar.php' ?>
<?php	
		if(isset($_GET['action'])=="logout"){
			session_start();
			session_unset();
			session_destroy();
			header("location:user.php");
		}
$err = $err3 = $info = "";
	if(isset($_POST['submt'])){
		
		$fullname = $_POST['name'];
		$email = $_POST['email'];
		$userid = $_POST['userid'];
		$password = $_POST['password'];	
		
			if($fullname !== "" && $email !== "" && $userid !== "" && $password !== ""){						
				if (!preg_match('/[^A-Za-z]/', $fullname)){
				$conn = mysqli_connect("localhost","root","");
				mysqli_select_db($conn,"sportsdb");
				$data = "INSERT INTO users (fullname,email,userid,password) 
				VALUES ('$fullname','$email','$userid','$password')";
				mysqli_query($conn,$data);
				mysqli_close($conn);
				$info = "You are registered successfully";
				}
				else{
				$err3 = "NAME should not contain numeric values";
				}
			}
			else{
				$err = "ENTER all the DATA";
			}
	}
$err1 = $err2 = "";
	if(isset($_POST['login'])){
		session_start();
		$myusername = $_POST['userid1'];
		$mypassword = $_POST['password1'];
			if($myusername !== "" && $mypassword !== ""){
				$connect = mysqli_connect("localhost","root","");
				mysqli_select_db($connect,"sportsdb");
				$search = "SELECT*FROM users WHERE userid = '$myusername' and password = '$mypassword'";
				$result = mysqli_query($connect,$search);
				$check = mysqli_num_rows($result);
					if($check == 1){	
						session_regenerate_id();
						$_SESSION['user_id'] = $myusername;
						$_SESSION['password'] = $mypassword;
						session_write_close();
						header("location:article.php");
					}
					else{
						$err1 = "ENTER VALID DATA";
					}
				mysqli_close($connect);
			}
			else{
				$err2 = "USER-ID or PASSWORD is missing";
			}
		
	}
?>	


    <div class="container register">

      <form class="form-signin" role="form" action="" method="post">
        <h2 class="form-signin-heading">Register</h2>
        <input type="text" class="form-control" placeholder="Full Name" name="name" required autofocus>
        <input type="password" class="form-control" placeholder="Email" name="email" required>
        <input type="text" class="form-control" placeholder="User ID" name="userid" required autofocus>
        <input type="password" class="form-control" placeholder="Password" name="password" required>
        
        <button class="btn btn-lg btn-primary btn-block" name= "submt" type="submit">Register</button>
      </form>

    </div> <!-- Register -->		

		<?php
		echo $info;
		echo $err;
		echo $err3;
		?>	


</div>

    <div class="container signin">

      <form class="form-signin" role="form" action="" method="post">
        <h2 class="form-signin-heading">Please sign in</h2>
        <input type="text" class="form-control" placeholder="User ID" name="userid1" required autofocus>
        <input type="password" class="form-control" placeholder="Password" name="password1" required>
        <button class="btn btn-lg btn-primary btn-block" name= "login" type="submit">Sign in</button>
      </form>

    </div> <!-- Sign In -->

		<?php
		echo $err1;
		echo $err2;
		?>

</div>
</body>
</html>
