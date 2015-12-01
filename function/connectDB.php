<?php

define ('INDIRIZZO','localhost');
define ('UTENTE','root');
define ('PASSWORD',"");
define ('DB','garanzie');


mysql_connect(INDIRIZZO,UTENTE,PASSWORD);
mysql_select_db(DB);

?>