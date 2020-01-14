<html>
<head>
</head>
<body>
<div id="player"></div>
<script src="playerjs.js"></script>
<script>
   var player = new Playerjs({id:"player", file:"playlists/<?php echo htmlspecialchars($_GET["playlist"])?>"});
</script>

</html>
