<?php
require ("connectDB.php");
$user=mysql_real_escape_string($_POST['user']);
$name=mysql_real_escape_string($_POST['name']);
$newPassword=mysql_real_escape_string($_POST['newPassword']);

$admin=$_POST['admin'];

if($newPassword==""){
$query="UPDATE `user` SET `user`='$user',`name`='$name',`admin`='$admin' WHERE user='$user'";
if(mysql_query($query)){
	echo 1;
}
else{
	echo 0;
}
}
else{
	$newPassword=md5($newPassword);
	$query="UPDATE `user` SET `user`='$user',`name`='$name',`password`='$newPassword',`admin`='$admin' WHERE user='$user'";
    if(mysql_query($query)){
	echo 1;
}
else{
	echo 0;
}
}
mysql_close();
?>