<!doctype html>
<html>
<head>
<title>North County Surf Fishing with Daniel Horton, family and friends</title>
<link href="surf.css" rel="stylesheet" type="text/css">
<meta charset="UTF-8">


</head>
<body>
<h1>
	<a href = "/surf/surf.php" id ="logo">North County Surf Fishing with Daniel Horton, family and friends</a>
</h1>
<?php
include 'database.php';
?>
<div class = "everything">	
	<div class = "firstsection">
		<div class = "paragraph">
			<?
		
			switch ($_GET["Beach"]) {
				
					case "San_Onofre":
						$beach = array('<iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d683.9570397611258!2d-117.50522405889178!3d33.33252491714026!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1ssan+onofre!5e1!3m2!1sen!2sus!4v1406145822405"></iframe><br /><small><a href="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d683.9570397611258!2d-117.50522405889178!3d33.33252491714026!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1ssan+onofre!5e1!3m2!1sen!2sus!4v1406145822405" style="color:#0000FF;text-align:left">View Larger Map</a></small>',"San Onofre Beach");
						break;	
			
					case "Oceanside_Blvd":
						$beach = array('<iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=d&amp;source=s_d&amp;saddr=&amp;daddr=33.181256,-117.373287&amp;geocode=&amp;sll=33.181348,-117.373157&amp;sspn=0.001483,0.002411&amp;t=h&amp;hl=en&amp;mra=ls&amp;ie=UTF8&amp;ll=33.181348,-117.373157&amp;spn=0.001483,0.002411&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com/maps?f=d&amp;source=embed&amp;saddr=&amp;daddr=33.181256,-117.373287&amp;geocode=&amp;sll=33.181348,-117.373157&amp;sspn=0.001483,0.002411&amp;t=h&amp;hl=en&amp;mra=ls&amp;ie=UTF8&amp;ll=33.181348,-117.373157&amp;spn=0.001483,0.002411" style="color:#0000FF;text-align:left">View Larger Map</a></small>',"Oceanside Boulevard, Oceanside");
						break;
					case "Oceanside_Harbor":
						$beach = array('<iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=d&amp;source=s_d&amp;saddr=&amp;daddr=33.206305,-117.396782&amp;geocode=&amp;aq=4&amp;oq=oceanside+harbor&amp;sll=33.205605,-117.396362&amp;sspn=0.004192,0.009645&amp;t=h&amp;hl=en&amp;mra=ls&amp;ie=UTF8&amp;ll=33.205605,-117.396362&amp;spn=0.004192,0.009645&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com/maps?f=d&amp;source=embed&amp;saddr=&amp;daddr=33.206305,-117.396782&amp;geocode=&amp;aq=4&amp;oq=oceanside+harbor&amp;sll=33.205605,-117.396362&amp;sspn=0.004192,0.009645&amp;t=h&amp;hl=en&amp;mra=ls&amp;ie=UTF8&amp;ll=33.205605,-117.396362&amp;spn=0.004192,0.009645" style="color:#0000FF;text-align:left">View Larger Map</a></small>' , "Oceanside Harbor, Oceanside");
						break;
					case "Tamarack":
						$beach = array('<iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?daddr=Carlsbad+Blvd&amp;hl=en&amp;sll=33.143696,-117.342085&amp;sspn=0.004195,0.009645&amp;geocode=FZi6-QEdPoEB-Q&amp;t=h&amp;mra=ls&amp;ie=UTF8&amp;ll=33.143696,-117.342085&amp;spn=0.004195,0.009645&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com/maps?daddr=Carlsbad+Blvd&amp;hl=en&amp;sll=33.143696,-117.342085&amp;sspn=0.004195,0.009645&amp;geocode=FZi6-QEdPoEB-Q&amp;t=h&amp;mra=ls&amp;ie=UTF8&amp;ll=33.143696,-117.342085&amp;spn=0.004195,0.009645&amp;source=embed" style="color:#0000FF;text-align:left">View Larger Map</a></small>' , "Tamarack Street, Carlsbad");
						break;
					default:
						$beach = array('<iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=d&amp;source=s_d&amp;saddr=&amp;daddr=33.159847,-117.355552&amp;geocode=&amp;sll=33.159845,-117.355348&amp;sspn=0.002966,0.004823&amp;t=h&amp;hl=en&amp;mra=ls&amp;ie=UTF8&amp;ll=33.159845,-117.355348&amp;spn=0.002966,0.004823&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com/maps?f=d&amp;source=embed&amp;saddr=&amp;daddr=33.159847,-117.355552&amp;geocode=&amp;sll=33.159845,-117.355348&amp;sspn=0.002966,0.004823&amp;t=h&amp;hl=en&amp;mra=ls&amp;ie=UTF8&amp;ll=33.159845,-117.355348&amp;spn=0.002966,0.004823" style="color:#0000FF;text-align:left">View Larger Map</a></small>' , "Beech Avenue, Carlsbad");
						break;
					}
			?>			
			<div class = "map">
			<? echo $beach[1]; ?>
		
			<? echo $beach[0]; ?>
			</div>

		</div>
		
		<div class = "sidemenu"> View Catch by: <br /><br /> 
			Location: <br />
			<form action="." method="post">
			<select name="URL" onchange="javascript:window.location.href=this.form.URL.options [this.form.URL.selectedIndex].value">
				<option value = "http://danielhorton.site11.com/surf/surf.php">Select Location</option>
				<? $beaches = "SELECT DISTINCT beach FROM fish2012";
				$beaches2 = mysql_query($beaches);
				while($row1 = mysql_fetch_array($beaches2)){
					echo "<option value='http://danielhorton.site11.com/surf/beach.php?Beach="  . $row1["beach"] . "'>"  . $row1["beach"] . "</option>";
				}
				?>
			</select>
			</form>
			<br />
			Date: <br />
			<form action="." method="post">
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
			Fisherman: <br />
			<form action="." method="post">
			<select name="URL3" onchange="javascript:window.location.href=this.form.URL3.options [this.form.URL3.selectedIndex].value">
				<option value = "http://danielhorton.site11.com/surf/surf.php">Select Fisherman</option>
				<? $fishers = "SELECT DISTINCT person FROM fish2012";
				$fishers2 = mysql_query($fishers);
				while($row3 = mysql_fetch_array($fishers2)){
					echo "<option value='http://danielhorton.site11.com/surf/fisherman.php?Fisherman="  . $row3["person"] . "'>"  . $row3["person"] . "</option>";
				}
				?>
			</select>
			</form>
			<br />
			<a href = "/surf/surf.php">Return to Index</a><br />
			<br />
		</div>
	</div>
	
	<div class = "separate">

	</div>
	
	<div class = "fishpics">
		<p>
		Here are some of the fish caught at <? echo $_GET["Beach"] ?>:
		</p>
		<?
		// Get data from the database depending on the value of the fish in the URL
		$strSQL = "SELECT * FROM fish2012 WHERE beach= '". $_GET["Beach"] . "'";
	
		$rs = mysql_query($strSQL);
	
		// Loop the recordset $rs//
		while($row = mysql_fetch_array($rs)){
	
			echo  "<a href = '" . $row["picture"] . "'><img src = '" . $row["picture"] . "' width = '350' alt = '" . $_GET["fish"] . "' /></a>";
			echo "<br />";
			echo "<div class = 'scroll'>";
			echo "<br /><br />";
			echo "Fisherman: <a href = '/surf/fisherman.php?Fisherman=" . $row["person"] . "'>" . $row["person"] . "</a> <br />" ;
			echo "Fish:  <a href = '/surf/fish.php?fish=" . $row["fish"] . "'>" . $row["fish"] . " </a><br />";
			echo "Where: <a href = '/surf/beach.php?Beach=" . $row["beach"] . "'>" . $row["beach"] . " </a><br />";
			echo "When: <a href = '/surf/date.php?Date=" . $row["date"] . "'>" . $row["date"] . "</a><br /><br /><br />";
			echo "</div>";
			echo "<hr />" ;
		}
		mysql_close();
		?>
	</div>
	
</div>
<div class = "github">
	<a href = "https://github.com/HanielDorton/Surf">view the code</a>
</div>
</body>
</html>
