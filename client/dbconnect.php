<?php
mysql_connect("DB_URL", "USER", "PASSWD") or die(mysql_error());
mysql_select_db("DB_NAME") or die(mysql_error());
?>