<?
function getSubs($id, $url) {
	$return = "";
	$q = mysql_query("SELECT subcat_id, subcategory, title, url FROM subcat WHERE cat_id = '$id'");
	while($r = mysql_fetch_object($q)) {
	$new_url = $r->url;
	if($new_url) {
		$return .= "<li><a href='$new_url.php?pageid=".$r->title."'>".$r->subcategory."</a></li><li class='divider'></li>";
		}else{
		$return .= "<li><a href='$url.php?pageid=".$r->title."'>".$r->subcategory."</a></li><li class='divider'></li>";
		}
	}
	return $return;
}
function getTitle($pageid) {
	$q = mysql_query("SELECT subcategory FROM subcat WHERE title = '$pageid'");
	$r = mysql_fetch_object($q);
	return stripslashes($r->subcategory);
}
function galleryImage($pageid) {
	$q = mysql_query("SELECT picture FROM gallery WHERE post_session = '$pageid' ORDER by gallery_id ASC LIMIT 1");
	$r = mysql_fetch_object($q);
	return stripslashes($r->picture);
}
?>