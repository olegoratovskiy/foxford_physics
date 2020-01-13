<html>
<?php
$dir = "/mnt/c/users/Fox and Dragon/Desktop/foxford_courses/course/playlists";
$files = scandir($dir);
foreach ($files as $filename){
	if ($filename=="." or $filename==".."){
		continue;
	}
	print($filename);
	print("<br>");
}
?>
</html>
