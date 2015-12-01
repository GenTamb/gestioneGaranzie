<?php
require ("logged.php");
?>
<html>
<head>
<title>Gestione Garanzie: Edit Users</title>
<script src="../js/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="../style/edUsers.css">
</head>
<body>
<p id='title'>Pannello di controllo</p> 
<p id='usr'>Logged as <?php echo $_SESSION['name']; ?></p> 
<ul id='cmdList'>
<li id='seeUsers'>Lista Utenti</li>
<li id='addUsers'>Crea Utente</li>
</ul>


</body>
<script src="../js/scriptEdUsr.js"></script>
</html>