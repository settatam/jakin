<? $page_id = mysql_escape_string($_GET['sid']); ?>
<? include 'header.php'; ?>
<? $y = mysql_query("SELECT * FROM posts WHERE subcat  = '$page_id'"); 
	
?>

<?  ?>
    <div class="container white" style="padding:0">

	  <div class="row" style="background: white;">
      <? include 'leftl.php' ?>
       <div class="large-9 columns" style="margin-bottom: 15px;">
   		<h3 class="subheader">Photo Gallery</h3>
        <hr>
        <img src="img/subimage.jpg"/>
        <hr>
       <? $n = mysql_num_rows($y); 
	   if($n < 1) { ?>
		   <p>This page is under construction</p>
	   <? } else {
	   	$i = 1;
			   while($z = mysql_fetch_object($y)){
				   if($i == 1) {
				   }
		   ?>
           
       <h6 style="margin-bottom: 7px;"><?=stripslashes($z->page_title)?></h6>
       <div class="large-3 columns">
       
       <? $t = mysql_query("SELECT * FROM gallery WHERE post_session = '".$z->post_session."'"); 
		$n = mysql_num_rows($t);
	if($n > 0) {
		$i = 1;
		$add = "";?>
		<ul class="clearing-thumbs clearing-feature" data-clearing>
		<? while($u = mysql_fetch_object($t)) {
			if($i == 1) { $add = " class = \"clearing-featured-img\""; }else{ $add = " class = \"hide\""; }
	?>
    <li <?=$add?>><a href="admin/uploaded_files/<?=$u->picture?>.jpg"><img src="admin/uploaded_files/<?=$u->picture?>.jpg" data-caption="caption here..."></a>
    
    </li>
    <? $i++; } ?>
	</ul>
	<? }?>
    
     </div>
       <div class="large-9 columns">
     <?=stripslashes($z->post)?> 
     </div>
     
     <hr>
     
     
     <? 
	 $i++;
	 }?>
    
  </div>
    <? } ?>	
	    
        
      </div>
	</div>
<?
include 'footer.php';
?>