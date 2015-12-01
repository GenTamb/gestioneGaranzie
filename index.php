<?php
require ("function/logged.php");
?>

<html>
<head>
<title>Helpdesk: Gestione Garanzie</title>
<script src="js/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="style/index.css">
</head>
<body>
<div id='header'>
<p id='title'>Helpdesk: Gestione Garanzie</p>
</div>
<div id='search'>
<fieldset id='searchFieldSet'><legend>Garanzia</legend>
<form id='searchForm' method='POST'>
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
<li><input id='send' name='send' type='button' value='send'></li>
</ul>
</form>
</fieldset>
</div>
<div id='display'>
<fieldset id='displayFieldSet'>
</fieldset>
</div>
<div id='footer'>
<p id='credits'>credits to GT</p>
</div>
</body>
<script src="js/script.js"></script>


</html>