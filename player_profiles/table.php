
<?php 
if(isset($_GET['submit'])){
if($_GET['sport']!= ""){
include 'db.php';
$sport=$_GET['sport'];
$select="SELECT*FROM players_infor WHERE sport='$sport'";
$result=mysqli_query($con, $select);
echo "<h1>".$sport."</h1>";
echo "<table>";
echo "<tr><td><b>Name</b></td><td><b>Age</b></td><td><b>Weight</b></td><td><b>Height</b></td><td><b>Achievements</b></td></tr>";
while ($row =mysqli_fetch_array($result)) {
	echo"<tr><td>";echo $row['name'];echo"</td>";
	echo"<td>";echo $row['age'];echo"</td>";
	echo"<td>";echo $row['weight'];echo"</td>";
	echo"<td>";echo $row['height'];echo"</td>";
	echo"<td>";echo $row['ach'];echo"</td>";
	echo"<td>";echo "<br>";echo"</td>";
	echo"</tr>";
}
echo "</table>";
}

}
?>
