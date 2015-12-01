<?php require("logged.php");
require ("connectDB.php");
?>
<html>
<head>
<script src="../js/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="../style/edUsers.css">
</head>
<body>
<?php
$users=array();
$query="SELECT * FROM user WHERE 1";
$exeQuery=mysql_query($query);
$num=mysql_num_rows($exeQuery);
echo "<table><tr><th>user</th><th>name</th><th>admin</th></tr>";
$counts=1;
while($users=mysql_fetch_assoc($exeQuery)){
echo "<tr>";
echo "<td>".$users['user']."</td>";
echo "<td>".$users['name']."</td>";
echo "<td>".$users['admin']."</td>";
echo "<td><input id=".$users['user']." type='button' name='copy' value='copy' onclick='copy$counts()';'></td>";
echo "<script>function copy$counts(){
	document.getElementById('user').value='".$users['user']."';
	document.getElementById('user').disabled=true;
	document.getElementById('name').value='".$users['name']."';
    document.getElementById('adminBox').value='".$users['admin']."';
}
</script>";
echo "</tr>";
$counts++;
}
?>
<tr>
<td><input type='text' id='user' name='user' size="10"></td>
<td><input type='text' id='name' name='name' size="10"></td>
<td><input type='text' id='adminBox' name='adminBox' size="10"></td>
<td><input type='password' id='newPsw' name='newPsw' size="10"></td>
<td><button type='button' id='modify' name='modify'>Modifica</button></td>
</tr>
<tr><td></td><td></td><td></td><td>New Password</td><td><button type='button' id='delete' name='delete'>Elimina</button></td></tr>
<tr><td></td><td></td><td></td><td></td><td></td></tr>
</table>
</body>
<script src='../js/scriptUsrList.js'></script>
</html>
