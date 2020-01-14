<html>
<?php
$dir = "./playlists";
$files = scandir($dir);
foreach ($files as $filename){
	if ($filename=="." or $filename==".."){
		continue;
	}
	echo "<a href=\"/play.php?playlist=$filename\">$filename</a> <br>";
}
?>
</html>
