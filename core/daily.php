<?php
$command = "SELECT * FROM dailyltc";
$q = mysql_query($command);
$rows = mysql_num_rows($q)."";
$dailyltc=$rows;
$command = "SELECT * FROM roundltc";
$q = mysql_query($command);
$res = mysql_fetch_array($q);
$roundltc=$res["roundltc"]."";
$command = "SELECT * FROM dailytotal";
$q = mysql_query($command);
$res = mysql_fetch_array($q);
$dailytotal=$res["dailytotal"]."";
$command = "SELECT * FROM round";
$q = mysql_query($command);
$res = mysql_fetch_array($q);
$round=$res["round"]."";
?>