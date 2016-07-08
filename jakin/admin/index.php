<?
include 'session.php';
include 'vegetables.php';
include 'functions.php';
if($_POST['subcat']) {
	$title = mysql_escape_string($_POST['title']);
	$q = mysql_query("INSERT INTO category (category) VALUES ('$title')");
}
include("header.php");
?>
 <!-- Header and Nav -->
<script src="lib/jquery1.5.js" type="text/javascript" charset="utf-8"></script>
	<script src="jquery.wysiwyg.js" type="text/javascript" charset="utf-8"></script>
	<script src="src/dialogs/default.js" type="text/javascript" charset="utf-8"></script>
	<script type="text/javascript" src="controls/wysiwyg.image.js"></script> 
	<script type="text/javascript" charset="utf-8">
	//<![CDATA[
		$(document).ready(function(){
			$('#editor').wysiwyg({
				controls:"bold,italic,|,undo,redo,image"
			});
		});
	//]]>
	</script>
	<link rel="stylesheet" href="jquery.wysiwyg.css" type="text/css" media="screen" charset="utf-8" />
	<link rel="stylesheet" href="src/dialogs/default.css" type="text/css" media="screen" charset="utf-8" />


<div class="row">
<? include 'lefty.php'; ?>
<div class="large-9 columns">
  <h3>All Pages</h3>
  <hr />
  <div class="row">
  <table>
  <thead>
    <tr>
      <th width="456">Page Title</th>
      <th width="212">Sub Categories</th>
      <th width="295">Action</th>
      </tr>
  </thead>
  <tbody>
   
  <?
  $q = mysql_query("SELECT * FROM posts");
  $n = mysql_num_rows($q);
  if($n < 1) {?>
	<div class="large-12 columns">You have no categories. Fill the form below to enter a new category</div>  
  <? }else{ ?>
  <div class="large-12 columns">
	<?
  while($r=mysql_fetch_object($q)){ ?>
	<tr>
      <td><?=stripslashes($r->page_title)?></td>
      <td></td>
      <td><a href="newpage.php?pageid=<?=$r->post_id?>">Edit Post</a> | <a href="javascript:void(0)" onClick="confirmDelete('deleteprod.php?id=<?=$r->style_id?>')">Delete</a></td>
     </tr>
  <? } ?>
   </tbody>
</table>
<? } ?>
  </div>
  </div>
   
  <div style="clear:both"></div>
  <div class="large-12 columns">
    <hr>
  </div>        
 
 
  <!-- Right Sidebar -->
  <!-- On small devices this column is hidden -->
  	</div>

<!-- Right Sidebar -->
  <!-- On small devices this column is hidden -->


  <!-- Footer -->

<? include 'footer.php' ?>