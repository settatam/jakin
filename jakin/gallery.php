<? $page_id = mysql_escape_string($_GET['pageid']); ?>
<? include 'header.php'; ?>
<? $y = mysql_query("SELECT * FROM posts WHERE is_gallery = '1' ORDER BY post_id DESC"); 


	
?>

<?  ?>
    <div class="container white" style="padding:0">

	  <div class="row" style="background: white;">
      <? include 'leftl.php' ?>
       <div class="large-9 columns" style="margin-bottom: 15px;">
   		<h3 class="subheader">Photo Gallery</h3>
        <p>Click on Image to View Pictures</p>
        <hr />
       <? $n = mysql_num_rows($y); 
	   if($n < 1) { ?>
	     <p>This page is under construction</p>
	   <? } else {
	   	$i = 1;
			   while($z = mysql_fetch_object($y)){
				   if($i == 1) {
				   }
		   ?>
           
       
       <div class="large-12 columns">
       <h5 class="subheader" style="margin-bottom: 7px;"><?=stripslashes($z->page_title)?></h5>
       <p>15 pictures</p>
       <? $t = mysql_query("SELECT * FROM gallery WHERE post_session = '".$z->post_session."'"); 
		$n = mysql_num_rows($t);
	if($n > 0) {
		$i = 1;
		$add = "";?>
		<ul class="clearing-thumbs clearing-feature" data-clearing="data-clearing">
		<?
		$k = 0;
		 while($u = mysql_fetch_object($t)) {
			if($i == 1) { $add = " class = \"clearing-featured-img\""; }else{ $add = " class = \"hide\""; }
	?>
    <li <?=$add?> style="width: 200px;"><a href="admin/uploaded_files/<?=$u->picture?>.jpg"><img src="admin/uploaded_files/<?=$u->picture?>.jpg" data-caption="caption here..." class="border"/></a>
    
    </li>
    <? $i++; 
	
	} ?>
	</ul>
	<? }?>
    
     </div>
     <? 
	 $k++;
	 }?>
      <?
  if($k % 2) { 
	echo  "<div style=\"clear: left\"></div>";
	}
  ?>
    
  </div>
 
    <? } ?>	
	    
        
      </div>
	</div>
<? include 'footer.php' ?>