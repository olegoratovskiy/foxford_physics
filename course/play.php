<html>
<head>
</head>
<body>
<div id="player"></div>
<script src="playerjs.js"></script>
<script>
   var player = new Playerjs({id:"player", file:"playlists/<?php
	$dir="./playlists";
	$files=scandir($dir);
	if (in_array($_GET["playlist"], $files)){
		echo htmlspecialchars($_GET["playlist"]);
	} else {
		echo $files[2];
	}
?>"});
</script>

</html>
