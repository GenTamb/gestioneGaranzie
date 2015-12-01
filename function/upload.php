<?php
require('logged.php');
?>
<html>
<head><meta charset="UTF-8">
<title>UPLOAD FILE GARANZIA</title>
<script src="../js/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="../style/addGar.css">
</head>
<form id='uploadFORM' method='POST' enctype="multipart/form-data">
<input id="INPUTFILE" name="userfile" type="file">
<input id='submitfile' name='submitfile' type='submit' value='INVIA'>
</form>
<script src="../js/scriptUpload.js"></script>
</html>

<?php

$tmpdir= '../docs/';
//$_SESSION['posizioneTEMPfile']=$_FILES['ADDFILES']['tmp_name'];
$_SESSION['nomeTEMPfile']=$_FILES['userfile']['name'];
$_SESSION['tipofile']=$_FILES['userfile']['type'];
$tempFOLDER=$_FILES['userfile']['tmp_name'];


if(!empty($_SESSION['nomeTEMPfile']) && !empty($_SESSION['tipofile']) && !empty($tempFOLDER)){
	if(move_uploaded_file($tempFOLDER, $tmpdir. $_SESSION['nomeTEMPfile'])){
	                                                       echo "Hai uppato il file: chiudi la finestra<br>";
														   $_SESSION['fileUppato']=1;									
                                                                 }
														   else{
															    echo"Errore: file non uppato, riprova";
														   } 
														   echo "<input id='linkUp' name='linkUp' type='text' value='".$tmpdir. $_SESSION['nomeTEMPfile']."' disabled='true'><button id='chiudiFINESTRA'>CHIUDI</button>";
}
?>
