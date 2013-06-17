<!doctype html>
<html>
<head>
<title>North County Surf Fishing with Daniel Horton, family and friends</title>
<link href="surf.css" rel="stylesheet" type="text/css">
<meta charset="UTF-8">


</head>
<body>
<h1>
	<a href = "/surf" id ="logo">North County Surf Fishing with Daniel Horton, family and friends</a>
</h1>
<?php
include 'database.php';
?>
<div class = "everything">
	<div class = "firstsection">
		<div class = "paragraph">
			<div class = "image">
				<img src ="http://i446.photobucket.com/albums/qq189/neokalvinist/Fishing/318880_10151898532785133_1839669878_n.jpg" width = "200" height = "200" alt="Fishing" />
			</div>
			<p> Welcome to North County Surf Fishing with Daniel Horton. I made this site from scratch to demonstrate my web development skills and to show off
			the fish we have caught in the North County Surf. You can view our fishing results by clicking on any of the categories to the right or selecting any of the fish below. Enjoy!
		
			</p>
		</div>
	
		<div class = "sidemenu"> View Catch by: <br /><br /> 
			Location: <br />
			<form action="" method="post">
			<select name="URL" onchange="javascript:window.location.href=this.form.URL.options [this.form.URL.selectedIndex].value">
				<option value = "http://danielhorton.site11.com/surf/surf.php">Select Location</option>
				<?
				$beaches = "SELECT DISTINCT beach FROM fish2012";
				$beaches2 = mysql_query($beaches);
				while($row1 = mysql_fetch_array($beaches2)){
					echo "<option value='http://danielhorton.site11.com/surf/beach.php?Beach="  . $row1["beach"] . "'>"  . $row1["beach"] . "</option>";
				}
				?>
			</select>
			</form>
			<br />
			Date: <br />
			<form action="" method="post">
			<select name="URL2" onchange="javascript:window.location.href=this.form.URL2.options [this.form.URL2.selectedIndex].value">
				<option value = "http://danielhorton.site11.com/surf/surf.php">Select Date</option>
				<? $dates = "SELECT DISTINCT date FROM fish2012";
				$dates2 = mysql_query($dates);
				while($row2 = mysql_fetch_array($dates2)){
					echo "<option value='http://danielhorton.site11.com/surf/date.php?Date="  . $row2["date"] . "'>"  . $row2["date"] . "</option>";
				}
				?>
			</select>
			</form>
			<br />
			Fisherman: <br / >
			<form action="" method="post">
			<select name="URL3" onchange="javascript:window.location.href=this.form.URL3.options [this.form.URL3.selectedIndex].value">
				<option value = "http://danielhorton.site11.com/surf/surf.php">Select Fisherman</option>
				<? $fishers = "SELECT DISTINCT person FROM fish2012";
				$fishers2 = mysql_query($fishers);
				while($row3 = mysql_fetch_array($fishers2)){
					echo "<option value='http://danielhorton.site11.com/surf/fisherman.php?Fisherman="  . $row3["person"] . "'>"  . $row3["person"] . "</option>";
				}
				mysql_close();
				?>
			</select>
			</form>
			<br />
			<a href = "/">Return to Index</a><br />
			<br />
		</div>
	</div>
	
	<div class = "separate">
	
	</div>
	
	<div class = "fishtable">
		<table>
			<tr>
				<td><a href = "fish.php?fish=Perch"><IMG SRC = "http://i446.photobucket.com/albums/qq189/neokalvinist/Fishing/perch.jpg" title= "Barred Surf Perch" width = "223" height = "223" alt = "Perch"/></a></td>
				<td><a href = "fish.php?fish=Croaker"><IMG SRC = "http://i446.photobucket.com/albums/qq189/neokalvinist/Fishing/croaker.jpg" title= "Croakers" width = "223" height = "223" alt="Croaker" /></a></td>
				<td><a href = "fish.php?fish=Corbina"><IMG SRC = "http://i446.photobucket.com/albums/qq189/neokalvinist/Fishing/corbina.jpg" title = "Corbina" width = "223" height = "223" alt="Corbina" /></a></td>
			</tr>
			<tr>
				<td><a href = "fish.php?fish=Shark"><IMG SRC = "http://i446.photobucket.com/albums/qq189/neokalvinist/Fishing/shark.gif" title = "Sharks" width = "223" height = "223" alt="Sharks" /></a></td>
				<td><a href = "fish.php?fish=Sngf"><IMG SRC = "http://i446.photobucket.com/albums/qq189/neokalvinist/Fishing/sngf.jpg" title = "Shovelnose Guitar Fish" width = "223" height = "223" Alt="SNGF" /></a></td>
				<td><a href = "fish.php?fish=Stingray"><IMG SRC = "http://i446.photobucket.com/albums/qq189/neokalvinist/Fishing/ray.jpg" title = "Stingrays" width = "223" height = "223" alt="StingRays" /></a></td>
			</tr>		
		</table>
	</div>
	
	<footer> 

		- created by <a href= "/">Daniel Horton</a>, hosted on 
		<a href="http://www.000webhost.com/" target="_blank">000webhost.com</a> -
	</footer>
	
</div>
<div class = "github">
	<a href = "https://github.com/HanielDorton/Surf">view the code</a>
</div>
</body>
</html>