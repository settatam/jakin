<?php
$host="localhost";
$user="jakinmin_roots";
$pass="Princess202";
$db="jakinmin_jak";
$connect = mysql_connect($host, $user, $pass) or die("No connection to Server");
mysql_select_db($db) or die ("No db");
?>