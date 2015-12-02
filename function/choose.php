<?php
require("logged.php");
?>
<html>
<head>
<title>SCEGLI FILE GARANZIA</title>
<link rel="stylesheet" type="text/css" href="../style/addGar.css">
</head>
<?php
$dir = '../docs/';
if(!isset($_POST['submit'])){
		          if ($dp = opendir($dir)) { 
                                            $files = array(); 
                                            while (($file = readdir($dp)) !== false){ 
                                                       if (!is_dir($dir . $file)) { 
                                                                                   $files[] = $file; 
                                                                                  }          
                                                       } 
                                            closedir($dp); 
                                            } 
	    else{ 
             exit('Cartella su server non aperta.'); 
            } 
        if($files){ 
                   echo '<form action="' . $_SERVER['PHP_SELF'] . '" method="post">'; 
                   foreach ($files as $file) { 
                   echo '<input type="checkbox" name="files[]" value="' . $file . '" /> ' . 
                   $file . '<br />'; 
                   }  
        echo '<br><input type="submit" name="submit" value="SCEGLI" />' . 
             '</form>'; 
    } else { 
        exit('No files found.'); 
    } 
} else { 
    if (isset($_POST['files'])) { 
        foreach ($_POST['files'] as $value) { 
            //echo $dir . $value . '<br />';
            $_SESSION['percorsoCompleto']=$dir.$value;
            $_SESSION['fileScelto']=1;
			$fileScelto=1;
           		
        } 
		
    } else { 
        echo "Nessun file selezionato.<br><br>";
		echo "<button id='chiudiFINESTRA' onclick=chiudi()>CHIUDI</button>";
	                                                       echo "<script>function chiudi(){
	                                                       window.close();}
														   </script>";
    } 
	}
if($fileScelto==1){
	 echo "<br>hai scelto&nbsp&nbsp".$_SESSION['percorsoCompleto']."<br><br>";
	 echo "<button id='chiudiFINESTRA' onclick=chiudi()>CHIUDI</button>";
	                                                       echo "<script>function chiudi(){
														   window.opener.link.value='$value';
	                                                       window.close();}
														   </script>";
														   $fileScelto=0;
}	

?>
</html>