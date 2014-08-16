<!DOCTYPE HTML>
<html>
	<head>
		<style>
			td{
				padding:3px;
			}
		</style>
	</head>
	
	<body>
		

		<form style="float:left;margin-right:20px;"action='' method='get'>
			
<select name="sport">
  <option value="Aquatics Male">Aquatics Male</option>
  <option value="Aquatics Female">Aquatics Female</option>
  <option value="Badminton">Badminton</option>
  <option value="Cricket">Cricket</option>
  <option value="Volleyball">Volleyball</option>
  <option value="Basketball">Basketball</option>
   <option value="Tennis">Tennis</option>
   <option value="Hockey">Hockey</option>
   <option value="Football">Football</option>
  <option value="Squash">Squash</option> 
    <option value="Athletics">Athletics</option> 
</select>
<input type='submit' name='submit' value='Submit'>
				<br><br>
				<table>
				<tr>
					<td>Name:</td>
					<td><input type='text' name='name'></td>
				</tr>
				<tr>
					<td>Age:</td>
					<td><input type='number' name='age'></td>
				
				</tr>
				<tr>
					<td>Weight:</td>
					<td><input type='number' name='weight'></td>
				
				</tr>
				<tr>
					<td>Height:</td>
					<td><input type='number' name='height'></td>
				
				</tr>
				<tr>
					<td>Achievements: (Separate by comma)</td>
					<td><input type='text' name='ach'></td>
				
				</tr>
				<tr>
				<tr>
					<td><input type='submit' name='submit' value='Submit'></td>				
				</tr>
			</table>
		</form>
		<?php include 'insert.php'; ?>
				<?php include 'table.php'; ?>
		
				<?php mysqli_close($con); ?>
	</body>
</html>
