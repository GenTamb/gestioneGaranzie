<?php
session_start();
if($_SESSION['admin']!=1){
header("location:zero.html");
}
?>
<html>
<head>
<script src="../js/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="../style/console.css">
</head>
<body>
<button id='edGar' type='button'>Editor Garanzie</button><br>
<button id='edUsr' type='button'>Editor Utenti</button>
</body>
<script src="../js/scriptConsole.js"></script>

</html>
