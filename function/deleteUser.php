<?php
require ("connectDB.php");
$user=mysql_real_escape_string($_POST['user']);

$query="DELETE FROM user WHERE user='$user'";
if(mysql_query($query)) echo 1;
else echo 0;
mysql_close();
?>