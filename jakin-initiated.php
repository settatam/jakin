<? $page_id = mysql_escape_string($_GET['pageid']); ?>
<? include 'header.php'; ?>
<? $y = mysql_query("SELECT * FROM posts WHERE subcat = '8' order by post_id DESC"); ?>
    <div class="container white" style="padding:0">
	  <div class="row" style="background: white;">
      <? include 'leftl.php' ?>
       <div class="large-9 columns" style="margin-bottom: 15px;">
   		<h3 class="subheader"><?=getTitle($page_id)?></h3>
        <hr>
        <? while($z = mysql_fetch_object($y)) { ?>
        <h6><?=stripslashes($z->page_title)?></h6>
        <img src="admin/uploaded_files/<?=$z->image?>.jpg"/>
        <hr>
        <div class="large-12 columns"><?=stripslashes($z->post)?></div>
        <hr>
<? } ?>
    	
	    
        
      </div>
	</div>
<? include 'footer.php' ?>