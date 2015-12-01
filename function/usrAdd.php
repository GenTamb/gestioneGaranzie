<?php
require ("connectDB.php");
$username=mysql_real_escape_string($_POST['user']);
$name=mysql_real_escape_string($_POST['name']);
$password=mysql_real_escape_string($_POST['pass']);
$admin=$_POST['admin'];

$password=md5($password);

$query="SELECT * FROM user WHERE user='$username'";
$exeQuery=mysql_query($query);
$count=mysql_num_rows($exeQuery);
if($count==1){
	echo 0;
}
else{
	$queryADD="INSERT INTO `user`(`user`, `name`, `password`, `admin`) VALUES ('$username','$name','$password','$admin')";
	if(mysql_query($queryADD)){
		echo 1;
	}
	else echo 2;
}
mysql_close();
?>