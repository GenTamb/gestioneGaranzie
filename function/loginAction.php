<?php
require "connectDB.php";

	$name=mysql_real_escape_string($_POST['name']);
	$pass=mysql_real_escape_string($_POST['pass']);
	$pass=md5($pass);
	$query="SELECT * FROM user WHERE user='$name' AND password='$pass'";
	$exeQuery=mysql_query($query);
	$check=mysql_num_rows($exeQuery);
	if($check==1){
		session_start();
		$_SESSION['logged']=1;
		$_SESSION['name']=$name;
		$user=mysql_fetch_assoc($exeQuery);
		if($user['admin']==1){
			$_SESSION['admin']=1;
		}
		else $_SESSION['admin']=0;
		$ris=1;
		echo $ris;
	}
	else{
		$ris=0;
		echo $ris;
	}
	mysql_close();
?>