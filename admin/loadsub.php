<?
$v = mysql_escape_string($_GET['id']);
include 'vegetables.php';
$q = mysql_query("SELECT * FROM subcat WHERE cat_id = '$v'");
while($r = mysql_fetch_object($q)) { ?>
<option value="<?=$r->subcat_id?>"><?=$r->subcategory?></option>	
<? }
?>