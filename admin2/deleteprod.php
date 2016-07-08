<?
include('vegetables.php');
$id = mysql_escape_string($_GET['id']);
$q = mysql_query("DELETE FROM category WHERE cat_id = '$id'");
header("location: category.php");
exit;
?>