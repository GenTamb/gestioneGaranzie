<?php

require("logged.php");
require("connectDB.php");

define ('HOST','http://localhost/gestioneGaranzie/docs/');

$modello=mysql_real_escape_string($_POST['modello']);
$categoria=mysql_real_escape_string($_POST['categoria']);
$marca=mysql_real_escape_string($_POST['marca']);
$numDoc=mysql_real_escape_string($_POST['numDoc']);
$numOrd=mysql_real_escape_string($_POST['numOrd']);
$telefono=mysql_real_escape_string($_POST['telefono']);
$fax=mysql_real_escape_string($_POST['fax']);
$mail=mysql_real_escape_string($_POST['mail']);
$lnk=mysql_real_escape_string($_POST['lnk']);
if($lnk!=""){
             $lnk=HOST.$lnk;
			 }
$query="INSERT INTO `asset`(`Modello`, `CATEGORIA`, `MARCA`, `NumDoc`, `NumOrd`, `Telefono`, `Fax`, `email`, `link`) VALUES ('$modello','$categoria','$marca','$numDoc','$numOrd','$telefono','$fax','$mail','$lnk')";
if(mysql_query($query)){
	echo "Record inserito!";
}
else echo "Errore:".mysql_error();





?>