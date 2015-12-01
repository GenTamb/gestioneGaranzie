<?php

require("logged.php");
require("connectDB.php");

define ('HOST','http://localhost/gestioneGaranzie/');

$modello=mysql_real_escape_string($_POST['modello']);
$categoria=mysql_real_escape_string($_POST['categoria']);
$marca=mysql_real_escape_string($_POST['marca']);
$numDoc=mysql_real_escape_string($_POST['numDoc']);
$numOrd=mysql_real_escape_string($_POST['numOrd']);
$telefono=mysql_real_escape_string($_POST['telefono']);
$mail=mysql_real_escape_string($_POST['mail']);
$lnk=mysql_real_escape_string($_POST['lnk']);

$lnk=substr($lnk,2);
$lnk=HOST.$lnk;
$query="INSERT INTO `asset`(`Modello`, `CATEGORIA`, `MARCA`, `NumDoc`, `NumOrd`, `Telefono`, `Fax`, `email`, `link`) VALUES ('$modello','$categoria','$marca','$numDoc','$numOrd','$telefono','fax','$mail','$lnk')";
$exe=mysql_query($query);
$check=mysql_query("SELECT Modello FROM asset WHERE Modello='$modello'");
$num=mysql_num_rows($check);
if($num==1) echo 1;
else echo 2;

mysql_close();


?>