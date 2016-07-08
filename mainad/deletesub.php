<?
include('vegetables.php');
$id = mysql_escape_string($_GET['id']);
$cat = mysql_escape_string($_GET['cat']);
$q = mysql_query("DELETE FROM subcat WHERE subcat_id = '$id'");
header("location: subcat.php?id=$cat");
exit;
?>