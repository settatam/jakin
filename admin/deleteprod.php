<?
$id = mysql_fetch_object($_GET['id']);
include('vegetables.php');
$q = mysql_query("DELETE FROM category WHERE cat_id = '$id'");
header("location: category.php");
exit;
?>