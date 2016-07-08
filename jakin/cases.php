<? $page_id = mysql_escape_string($_GET['pageid']); ?>
<? include 'header.php'; ?>
<? $y = mysql_query("SELECT * FROM posts WHERE subcat = '23'"); ?>
<? $z = mysql_fetch_object($y); ?>
    <div class="container white" style="padding:0">
	  <div class="row" style="background: white;">
      <? include 'leftl.php' ?>
       <div class="large-9 columns" style="margin-bottom: 15px;">
   		<h3 class="subheader">Urgent Cases</h3>
        <hr>
        <img src="img/subimage.jpg"/>
        <hr>
     <?=stripslashes($z->post)?>
  </div>
    	
	    
        
      </div>
	</div>
   <? include 'footer.php' ?>