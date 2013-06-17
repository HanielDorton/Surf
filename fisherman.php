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
			<?
		
			switch ($_GET["Fisherman"]) {
			
					case "Stephen":
						$fisher = array("http://i446.photobucket.com/albums/qq189/neokalvinist/Fishing/Stephen.jpg","Stephen Horton like his burgers. Look at that face. Check him out in the surf:" , "http://i446.photobucket.com/albums/qq189/neokalvinist/Fishing/Steveaction.jpg");
						break;
					case "Randy":
						$fisher = array("http://i446.photobucket.com/albums/qq189/neokalvinist/Fishing/Randy.jpg" , "Randall Lee Horton sure enjoys a margarita. He will fight any surf in his battle against the perch. Just look at that dedication in action:" , "http://i446.photobucket.com/albums/qq189/neokalvinist/Fishing/RandyAction.jpg");
						break;
					case "Liz":
						$fisher = array("http://i446.photobucket.com/albums/qq189/neokalvinist/Fishing/Liz.gif" , "Liz Horton sure tries hard. What a trooper!" , "http://i446.photobucket.com/albums/qq189/neokalvinist/Fishing/Lizaction.jpg");
						break;
					case "Phil":
						$fisher = array("http://i446.photobucket.com/albums/qq189/neokalvinist/Fishing/phil.jpg" , "Phil Calvillo is always down to fish. Too bad he spends most of his time tying knots and yanking seaweed off his line." , "http://i446.photobucket.com/albums/qq189/neokalvinist/Fishing/Philaction.jpg");
						break;
					default:
						$fisher = array("http://i446.photobucket.com/albums/qq189/neokalvinist/Fishing/dan.jpg" , "Daniel Horton is not only an amazing fisherman, he also made this awesome site. Check him out in action:", "http://i446.photobucket.com/albums/qq189/neokalvinist/Fishing/danaction.jpg");
						break;
					}
			?>			
			<div class = "image">
				<img src ="<? echo $fisher[0]; ?>" width = "160" alt = "fish" />
			</div>
			<br />
			<br />
			<p>
			<? echo $fisher[1]; ?>
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
		
	<div class = "fishpics">
		<br />
		<img src ="<? echo $fisher[2]; ?>" width = "350" alt = "fish" />

		<hr /> 
		<?
		$strSQL = "SELECT * FROM fish2012 WHERE person= '". $_GET["Fisherman"] . "'";
		
		$rs = mysql_query($strSQL);
		
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