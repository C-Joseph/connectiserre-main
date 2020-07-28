<?php
$connex_bd=mysqli_connect("localhost","username","password","base de donnees");
//Pour tester la connexion
if(mysqli_connect_errno()){
echo mysqli_connect_error();
exit();
}
?>