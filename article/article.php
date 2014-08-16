<!DOCTYPE html>
<html>
<head>
<?php include 'header.php' ?>
</head>
<body>
	<?php include 'navbar.php';include 'form_validation.php' ?>
	
		<form action="article.php" method="post">
		
			<div class = "heading">
				<h1>Create New Article</h1><hr>
			</div>
		
			<div class = "menu">
					<div class="form-group">
						<label for="title-field">Title</label>
						<input type="text" name = "title" class='form-control' id='title-field'>
					</div>
				
					<div class="form-group">
						<label for="content-field">Content:</label>
						<textarea id = "article" name = "article" class='form-control' id='content-field'></textarea>
					</div>

					<div class="form-group">
						<label for="author-field">Author:</label> 
						<input type="text" name = "author" class='form-control' id='author-field'>
					</div>

					<div class="form-group">
						<input class='btn bts btn-success' type="submit" name = "submit" value = "Publish">
						<input class='btn bts btn-danger' id = "logout" type="submit" name = "logout" value = "Logout">
					</div>
					<?php if($saved!="") {echo"<div class='success bg-success col-md-8'>						
						<p>"; echo $saved;	echo "</p></div>";}?>
			<script type="text/javascript">
						CKEDITOR.replace( 'article' );
			</script>
			</div>
		
	</form>	
</body>
</html>
