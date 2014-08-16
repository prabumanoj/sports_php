<!DOCTYPE HTML>
<html>
	<head>
		<link rel='stylesheet' href='style.css' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
		<style>
					<?php for($i=0;$i<7;$i++)echo ".item".$i."{z-index:".(50-$i)."}" ?>
			#sport{
			float:left;
			width:45%;
			height:45%;
			background-color:black;
			color:white;
			padding:20px;
			}
			#player{
			float:right;
			width:45%;
			height:45%;
			padding:20px;
			}
			
		#carousel{
		float:left;
		width:100%;
		height:45%;
		background-color:#505050;
		padding-top:50px;
		}
		</style>
	</head>
	
	<body>
		<div id='sport'>
			<?php include 'sport_info.php' ?>
		</div>
		
		<div id='player'>
			<?php include 'player_info.php' ?>
		</div>
		
		<div id='carousel'>
			<?php include 'carousel_info.php' ?>			
		</div>
	</body>
</html>
