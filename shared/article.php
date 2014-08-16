<!DOCTYPE html>
<html>
<head>
<style>
.error{color: #FF0000;}

div.heading{
position:absolute;
top:0px;
left:0px;
height:70px;
width:100%;
background:#282828;
text-align:center;
font-family:"Lucida Console", Monaco, monospace;
color:white;
}

div.menu{
position:absolute;
top:70px;
left:0px;
height:100%;
width:100%;
background:#32CD32;
font-family:"Times New Roman",Times,serif;
color:black;
}
</style>
</head>
<body>
	<?php
		session_start();
		if(!isset($_SESSION['user_id']) || (trim($_SESSION['password']) == '')){
			header("location: user.php");
			exit();
		}
		else{
			$title = $article = $author = "";
			$saved = "";
			$titleerr = $articleerr = $authorerr = "";
			if(isset($_POST['submit'])){
				if(empty($_POST['author'])){
					$authorerr = "Please enter Author name";
				}else{ $author = $_POST['author']; }
				if(empty($_POST['article'])){
					$articleerr = "Please enter the Article";
				}else{ $article = $_POST['article']; }
				if(empty($_POST['title'])){
					$titleerr =  "Please enter the Title";
				}else{ $title = $_POST['title']; }
				if($title !== "" && $author !== "" && $article !== ""){			
					$con = mysqli_connect("localhost","root","");
					mysqli_select_db($con,"sportsdb");
					$data = "INSERT INTO articles (title,content,author) 
					VALUES ('$title','$article','$author')";
					if(mysqli_query($con,$data)){
					mysqli_close($con);
					$saved = "YOUR ARTICLE IS SAVED";}
					else echo "Try Again";				
			}			
		}
		}
		if(isset($_POST['logout'])){
			session_start();
			session_unset();
			session_destroy();
			header("location:user.php");
		}
	?>
	<form action="article.php" method="post">
		
		<div class = "heading">
		<h1>STORE YOUR ARTICLES HERE</h1><br><br>
		</div>
		
		<div class = "menu">
		<table>
		<tr>
		<td>TITLE:</td>
		<td><input type="text" name = "title"><span class = "error">*<?php echo $titleerr; ?></span></td>
		</tr>
		<tr>
		<td >ARTICLE:</td>
		<td><textarea name = "article" rows = "10" cols = "40"></textarea><script> CKEDITOR.replace( 'article' );</script><span class = "error">*<?php echo $articleerr; ?></span></td>
		</tr>
		<tr>
		<td>AUTHOR:</td> 
		<td><input type="text" name = "author"><span class = "error">*<?php echo $authorerr; ?></span></td>
		</tr>
		</table>		
		<br>
		<tr>
		<td><?php echo $saved;	?></td>
		</tr>
		<br>
		<tr>
		<td><input id = "submit" type="submit" name = "submit" value = "SUBMIT"></td>
		<td><input id = "logout" type="submit" name = "logout" value = "LOGOUT"></td>
		</tr>
		
		</div>
		
	</form>	
</body>
</html>
