					<?php 
					$server='localhost';
					$user='root';
					$password='';
					$db='sportsdb';
					
					
					$con = mysqli_connect($server,$user,$password, $db);
					if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
					 ?>
