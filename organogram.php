<? $page_id = mysql_escape_string($_GET['pageid']); ?>
<? include 'header.php'; ?>
<? $y = mysql_query("SELECT * FROM posts WHERE subcat = '31' ORDER BY post_id DESC LIMIT 1"); ?>
<? $z = mysql_fetch_object($y); ?>
    <div class="container white" style="padding:0">
	  <div class="row" style="background: white;">
      <? include 'leftl.php' ?>
       <div class="large-9 columns" style="margin-bottom: 15px;">
   		<h3 class="subheader"><?=getTitle($page_id)?></h3>
        <hr>
     <?=stripslashes($z->post)?>
        <img src="admin/uploaded_files/<?=$z->image?>.jpg"/>
</div>
    	
	    
        
      </div>
	</div>
<? include 'footer.php' ?>