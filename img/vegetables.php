<?php
$host="localhost";
$user="root";
$pass="root";
$db="jakin";

$host="localhost";
$user="dbuser";
$pass="Pincess202@";
$db="jakinmin";
$connect = mysql_connect($host, $user, $pass) or die("No connection to Server");
mysql_select_db($db) or die ("No db");
?>