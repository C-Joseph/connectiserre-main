<?php
if(!($fp=fopen('fichier.conf','w'))){
echo "Erreur d'ouverture du fichier de configuration";
}
for($num=1;$num<17;$num++){
if ($_GET["port".$num]!=0){
fprintf($fp,"%d %s %s %d\n", $_GET["port".$num], $_GET["mode".$num], $_GET["sens".$num],
$_GET["freq".$num]);
}
}
fclose($fp);
include_once('index.php');
?>