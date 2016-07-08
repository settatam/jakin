<? $page_id = mysql_escape_string($_GET['pageid']); ?>
<? include 'header.php'; ?>
<? $y = mysql_query("SELECT * FROM posts WHERE subcat = '9'"); 
	
?>

<?  ?>
    <div class="container white" style="padding:0">
	  <div class="row" style="background: white;">
      <? include 'leftl.php' ?>
       <div class="large-9 columns" style="margin-bottom: 15px;">
   		<h3 class="subheader">Donor Funded Projects</h3>
        <hr>
       <? $n = mysql_num_rows($y); 
	   if($n < 1) { ?>
		   <p>This page is under construction</p>
	   <? } else{
		   
			   while($z = mysql_fetch_object($y)){ ?>
               <h6><?=stripslashes($z->page_title)?></h6>
               <div class="large-3 columns">
               <img src="admin/uploaded_files/<?=$z->image?>.jpg" />
               </div>
			   <div class="large-9 columns"><?=stripslashes($z->post)?></div><hr>
               
		<? } }?>
	   
		  
       
     
   
  </div>
    	
	    
        
      </div>
</div>
<?
include 'footer.php';
?>