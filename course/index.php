<html>
<?php
$dir = "./playlists";
$files = scandir($dir);
echo "<ul>";
foreach ($files as $filename){
	if ($filename=="." or $filename==".."){
		continue;
	}
	echo "<li><a href=\"/play.php?playlist=$filename\">$filename</a> </li>";
}
echo "</ul>";
?>
</html>
