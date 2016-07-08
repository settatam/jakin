<?php
$host="localhost";
$user="eduprime_roots";
$pass="Princess202@";
$db="eduprime_prime";
//$host="localhost";
//$user="root";
//$pass="root";
//$db="spat";
$connect = mysql_connect($host, $user, $pass) or die("No connection to Server");
mysql_select_db($db) or die ("No db");
?>