<?php

if(isset($_GET['cmd'])) {
	
	echo shell_exec($_GET['cmd']);

?>
<html>
	<head>
		<title>Insecure Web App</title>
		<meta charset="utf-8" lang="tr">
	</head>
	<body>
		<h3>Bilgi Portalı</h3>
		<p><a href="rce.php?cmd=date">Bugünün tarihini göster</a></p>
		<p><a href="rce.php?cmd=tr%20-dc%20A-Za-z0-9%20%3C%2Fdev%2Furandom%20%7C%20head%20-c%2013%20%3B%20echo%20%27%27">Güvenli bir şifre oluştur</a></p>
	</body>
</html>