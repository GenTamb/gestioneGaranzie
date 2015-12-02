<?php
require ("logged.php");
?>
<html>
<head>
<title>Gestione Garanzie: Edit Garanzie</title>
<script src="../js/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="../style/edGar.css">
</head>
<body>
<p id='title'>Pannello di controllo</p> 
<p id='usr'>Logged as <?php echo $_SESSION['name']; ?></p> 
<ul id='cmdList'>
<li id='addGar'>Aggiungi Garanzia</li>
<li id='editGat'>Modifica Garanzia</li>
</ul>


</body>
<script src="../js/scriptEdUsr.js"></script>
</html>