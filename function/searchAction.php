<?php
require "connectDB.php";
$model=mysql_real_escape_string($_POST['model']);
$category=mysql_real_escape_string($_POST['category']);
$brand=mysql_real_escape_string($_POST['brand']);
$numOrd=mysql_real_escape_string($_POST['numOrd']);
$numDoc=mysql_real_escape_string($_POST['numDoc']);


$query="SELECT * FROM asset WHERE Modello LIKE '$model%' AND CATEGORIA LIKE '$category%' AND MARCA LIKE '$brand%' AND NumOrd LIKE '$numOrd%' AND NumDoc LIKE '$numDoc%'";
$exeQuery=mysql_query($query) or die(mysql_error());
$numRow=mysql_num_rows($exeQuery);
if($numRow>=1){
	echo "<table>";
	echo "<tr><th>MODELLO</th><th>CATEGORIA</th><th>MARCA</th><th>NumDoc</th><th>NumOrd</th><th>Telefono</th><th>Fax</th><th>email</th><th>link</th></tr>";
	while($res=mysql_fetch_assoc($exeQuery)){
		echo "<tr>";
		echo "<td>". $res['Modello']."</td>";
		echo "<td>". $res['CATEGORIA']."</td>";
	    echo "<td>". $res['MARCA']."</td>";
		echo "<td>". $res['NumDoc']."</td>";
		echo "<td>". $res['NumOrd']."</td>";
		echo "<td>". $res['Telefono']."</td>";
		echo "<td>". $res['Fax']."</td>";
		echo "<td>". $res['email']."</td>";
		$lnk=$res['link'];
		if($lnk!=""){
		echo "<td id='link'><a href='$lnk' class='button' target='_blank'>open</a></td>";
		}
		else echo "<td id='link'></td>";
		echo "</tr>";
	}
	echo "</table>";
}
else{
	echo 0;
}
mysql_close();


?>
