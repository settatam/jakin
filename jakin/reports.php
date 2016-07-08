<? $page_id = mysql_escape_string($_GET['id']); 
if($page_id) {$a = " WHERE project_id = '$page_id'";}
?>

<? include 'header.php'; ?>
<? $y = mysql_query("SELECT * FROM reports $a ORDER BY report_id DESC"); 


	
?>

<?  ?>
    <div class="container white" style="padding:0">

	  <div class="row" style="background: white;">
      <? include 'leftl.php' ?>
       <div class="large-9 columns" style="margin-bottom: 15px;">
   		<h3 class="subheader">Reports        </h3>
   		<hr />
       <? $n = mysql_num_rows($y); 
	   if($n < 1) { ?>
	     <p>There are no reports at this time. Please try again later</p>
	   <? } else {
	  
		while($z = mysql_fetch_object($y)){?>
        <div class="row">
        <div class="large-10 columns">
        <?=stripslashes($z->title)?>
        </div>
        <div class="large-2 columns"><a href="admin/uploaded_files/<?=$z->filename?>" target="_blank">Download</a></div></div><hr>
				   
		   
	<? }?>
      
  </div>
 
    <? } ?>	
	    
        
      </div>
	</div>
<? 
include 'footer.php';
?>    