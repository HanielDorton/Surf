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
			<p>
			Here are some of the fish caught on <? echo $_GET["Date"] ?>:
			</p>
		</div>
	
		<div class = "sidemenu"> View Catch by: <br /><br /> 
			Location: <br />
			<form action="." method="post">
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
		<?
		$strSQL = "SELECT * FROM fish2012 WHERE date= '". $_GET["Date"] . "'";
		
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
	<footer> 

		- created by <a href= "http://hanieldorton.github.io/">Daniel Horton</a>, hosted on 
		<a href="http://www.000webhost.com/" target="_blank">000webhost.com</a> -
	</footer>
</body>
</html>
