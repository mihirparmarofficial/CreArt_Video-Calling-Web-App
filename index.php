<!DOCTYPE html>
<html>
<head>
	<title>Video Calling Web App</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src='https://cdn.scaledrone.com/scaledrone.min.js'></script>
	<script type="text/javascript" src="script.js"></script>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins&family=Ubuntu:wght@400&display=swap" rel="stylesheet"></head>
<body>
	<div class="header">
		<div class="logo"></div>
		<h1 class="center">Video Calling Web App</h1>
	</div>

	<div class="content">
		<video class="from" id="localVideo" autoplay muted></video> 
		<video class="to" id="remoteVideo" autoplay controls></video> 
	</div>

	<div class="footer">
		<h1 class="center">©All copyright reserve </h1>
	</div>
</body>
</html>