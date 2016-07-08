<?
include 'vegetables.php';
$id = mysql_escape_string($_GET['pageid']);
$t = mysql_query("SELECT * FROM posts WHERE long_id = '$id'");
$n = mysql_num_rows($t);
$v = mysql_fetch_object($t);
include 'header.php';
//$pageid = getCategory($id);
if(!$v->image) {
	$image = 'pages';
}else{
	$image = $v->image;
}

?>
<div class = "body-container">
<div class="row">
<div class="large-9 columns">

<div class="padded" style="padding-top: 20px;">
<h2 class="subheader">Title</h2>
<ul class="breadcrumbs" style="margin-bottom: 5px !important;">
    <li><a href="index.php">Home</a></li>
    <li><a href="page.php?">Category</a></li>
    <li class="current"><a href="#">Title</a></li>
    </ul>
<img src="img/<?=$image?>.jpg" alt="Welcome to Area E Police Command"></div>
<div style="font-size: 14px !important; padding-top: 20px;">
<?=stripslashes($v->post)?>
</div>
</div> 

<div class="large-3 columns">
<h6 style="padding:5px 5px; margin-top: 20px; background: #003; color: white; margin-bottom: 0;"><?=getCat($pageid)?></h6>
<ul class="side-nav" style="margin: 0; padding: 0;">
<?=getSubNav($pageid, "pages")?>
</ul>
</div>

</div>
</div>
<div style="clear: left"></div>
<?
include 'footer.php' ?>
