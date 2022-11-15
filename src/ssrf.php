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
		<p><a href="rce.php?doviz=https://www.tcmb.gov.tr/wps/wcm/connect/tr/tcmb+tr/main+page+site+area/bugun">Bugünün döviz kurlarını göster</a></p>
	</body>
</html>