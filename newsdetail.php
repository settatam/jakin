<? $page_id = mysql_escape_string($_GET['pid']); ?>
<? include 'header.php'; ?>
<? $y = mysql_query("SELECT * FROM posts WHERE post_id  = '$page_id'"); 
$n = mysql_num_rows($y);
if($n < 1) {
	header("location: index.php");
	exit;
}
$z = mysql_fetch_object($y);
$t = mysql_query("SELECT * FROM gallery WHERE post_session = '".$z->post_session."'");	
$u = mysql_fetch_object($t);
$picture = $u->picture;
?>

<?  ?>
    <div class="container white" style="padding:0">

	  <div class="row" style="background: white;">
      <? include 'leftl.php' ?>
       <div class="large-9 columns" style="margin-bottom: 15px;">
   		<h3 class="subheader"><?=stripslashes($z->page_title)?></h3>
        <hr>
        <img src="admin/uploaded_files/<?=$u->picture?>.jpg">
        <hr>
        <div class="large-12 columns"><?=stripslashes($z->post)?></div>
  
    
  </div>
	    
        
      </div>
</div>
<?
include 'footer.php';
?>