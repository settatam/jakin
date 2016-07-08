<? $page_id = mysql_escape_string($_GET['pageid']); ?>
<? include 'header.php'; ?>
<? $y = mysql_query("SELECT * FROM posts WHERE subcat  = '30' ORDER BY post_id DESC"); 
	
?>

<?  ?>
    <div class="container white" style="padding:0">

	  <div class="row" style="background: white;">
      <? include 'leftl.php' ?>
       <div class="large-9 columns" style="margin-bottom: 15px;">
   		<h3 class="subheader">Events</h3>
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
       <h6><a href="newsdetail.php?pid=<?=$z->post_id?>"><?=stripslashes($z->page_title)?></a></h6>
       <p><?=substr(stripslashes($z->post), 0, 200)?> </p>
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