<?php
require ("logged.php");
?>
<html>
<head>
<script src="../js/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="../style/addGar.css">
</head>
<body>
<ul>
<li>Modello<input id='mod' name='mod' type='text'></li>
<li>Categoria<select id='categoria' name='categoria'>
<option value='' select="selected">Scegli..</option>
<option value='COMPUTER'>COMPUTER</option>
<option value='MONITOR'>MONITOR</option>
<option value='STAMPANTE'>STAMPANTE</option>
<option value='SCANNER'>SCANNER</option>
</select></li>
<li>Marca<select id='marca' name='marca'>
<option value='' select="selected">Scegli..</option>
<option value='ASUS'>ASUS</option>
<option value='SAMSUNG'>SAMSUNG</option>
<option value='HP'>HP</option>
<option value='ACER'>ACER</option>
</select></li>
<li>Numero Documento<input id='numDoc' name='numDoc' type='text'></li>
<li>Ordine<input id='numOrd' name='numOrd' type='text'></li>
<li>Telefono<input id='telefono' name='telefono' type='text'></li>
<li>Mail<input id='mail' name='mail' type='text'></li>
<li><input id='newFile' name='newFile' type='button' value='Nuovo File'><input id='chooseFile' name='chooseFile' type='button' value='Scegli File'></li>
<li><input id='link' name='link' type='text' value="" disabled="true" size="30"></li>
<li><input id='send' name='send' type='button' value='send'></li>
</ul>
</body>
<script src='../js/scriptGarAdd.js'></script>
</html>