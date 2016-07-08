<?
$id = mysql_escape_string($_GET['id']);
include('vegetables.php');
$q = mysql_query("DELETE FROM posts WHERE post_id = '$id'");
header("location: index.php");
exit;
?>