<?php

if(isset($_GET['doviz'])) {
	
	echo file_get_contents($_GET['doviz']);
}

?>
<html>
	<head>
		<title>Insecure Web App</title>
		<meta charset="utf-8" lang="tr">
	</head>
	<body>
		<h3>Bilgi Portalı</h3>
		<p><a href="ssrf.php?doviz=https://www.doviz.com/">Bugünün döviz kurlarını göster</a></p>
	</body>
</html>