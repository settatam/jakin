<?
session_start();
if(!$_SESSION['uid']) {
	header("location: login.php");
	exit;
}
include 'vegetables.php';
$value = mysql_real_escape_string($_GET['v']);
$id = mysql_real_escape_string($_GET['id']);

$q = mysql_query("UPDATE gallery SET description = '$value' where gallery_id = '$id' LIMIT 1");

?>
