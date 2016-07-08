<? $page_id = mysql_escape_string($_GET['pageid']); ?>
<? include 'header.php'; ?>
<? $y = mysql_query("SELECT * FROM posts WHERE is_gallery = '1' ORDER BY post_id DESC"); 


	
?>

<?  ?>
    <div class="container white" style="padding:0">

	  <div class="row" style="background: white;">
      <? include 'leftl.php' ?>
       <div class="large-9 columns" style="margin-bottom: 15px;">
   		<h3 class="subheader">Events</h3>
        <p>&nbsp;</p>
        <p>This page is under construction</p></div>
 
    <? } ?>	
	    
        
      </div>
	</div>
<? include 'footer.php' ?>