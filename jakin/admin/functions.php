<?
function getPostCode($uid) {
	$q = "select MAX(post_id) as mymax from posts";
	$r = mysql_query($q);
	$myr = mysql_fetch_object($r);
	$new_code = strtoupper(substr($style, 0, 2));
	$maxid = $myr->mymax+1011;
	$timestamp = time();
	return $maxid."_".$timestamp;
}
function getStyleName($style) {
	$q = mysql_query("SELECT style_name FROM styles where style_id = '$style'");
	$n = mysql_num_rows($q);
	if($n == 1) {
		$r = mysql_fetch_object($q);
		return $r->style_name;
	}else{
		return "";
	}
}
function clean($string) {
   $string = str_replace(" ", "-", $string); // Replaces all spaces with hyphens.
   $string = preg_replace('/[^A-Za-z0-9\-]/', '', $string); // Removes special chars.
   return preg_replace('/-+/', '-', $string); // Replaces multiple hyphens with single one.
}
function getSubs($id) {
	$q = mysql_query("SELECT COUNT(subcat_id) as thecount FROM subcat WHERE cat_id = '$id'");
	$r = mysql_fetch_object($q);
	return $r->thecount;
}
function getPicture($ps) {
	$t = mysql_query("SELECT picture FROM gallery WHERE post_session = '$ps' LIMIT 1 ORDER BY gallery_id ASC"); 
	$f = mysql_fetch_object($t);
	return $f->picture;
}