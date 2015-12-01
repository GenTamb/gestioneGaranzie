<?php
session_start();
if($_SESSION['logged']==0){
	header("location:notLogged.php");
}
if($_SESSION['admin']==1){
	echo "<button type='button' id='adminBTN'>Console Admin</button>";
}

?>