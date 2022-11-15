<?php

$phpver = phpversion();

?>
<html>
	<head>
		<title>Insecure Web App</title>
		<meta charset="utf-8" lang="tr">
	</head>
	<body>
		<h3>Güvensiz Web Uygulaması</h3>
		<p><b><i>PHP Sürümü: <?=$phpver;?></i></b></p>
		<p><a href="rce.php">RCE Zafiyeti Dene</a></p>
		<p><a href="ssrf.php">SSRF Zafiyeti Dene</a></p>
	</body>
</html>