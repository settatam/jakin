<?
include 'vegetables.php';
$email = mysql_real_escape_string($_REQUEST['em']);
$q = mysql_query("INSERT INTO mailing (email) VALUES ('$email')");
?>