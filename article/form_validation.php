<?php
		session_start();
		if(!isset($_SESSION['user_id']) || (trim($_SESSION['password']) == '')){
			header("location: user.php");
			exit();
		}
		else{
			$title = $article = $author = "";
			$saved = "";
			if(isset($_POST['submit'])){
				
				$author = $_POST['author'];
				$article = $_POST['article']; 
				$title = $_POST['title']; 

				include 'db.php';
					
				$data = "INSERT INTO articles (title,content,author) VALUES ('$title','$article','$author')";
if (!mysqli_query($con,$data)) {
  die('Error: ' . mysqli_error($con));
}		
$saved="Article Saved";	
							
			}
		}
		
		if(isset($_POST['logout'])){
			session_start();
			session_unset();
			session_destroy();
			header("location:user.php");
		}
		
?>
