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

	


<div class="row">
<? include 'lefty.php'; ?>
<div class="large-9 columns">
  <h3>All Pages</h3>
  <p><a href="newpage.php" class="button success small">Create New Page</a></p>
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
	<div class="large-12 columns">You have no posts. <a href="newpage.php" class="button success small">Enter A New Page</a></div>  
  <? }else{ ?>
  <div class="large-12 columns">
	<?
  while($r=mysql_fetch_object($q)){ ?>
	<tr>
      <td><?=stripslashes($r->page_title)?>
      <br />
      <a href="editpage.php?pageid=<?=$r->post_id?>">Edit Post</a> | <a href="javascript:void(0)" onClick="confirmDelete('deletepage.php?id=<?=$r->post_id?>')">Delete</a>
      </td>
      <td></td>
      <td>&nbsp;</td>
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