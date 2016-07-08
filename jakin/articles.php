<? $page_id = mysql_escape_string($_GET['id']); 
if($page_id) {$a = " WHERE project_id = '$page_id'";}
?>

<? include 'header.php'; ?>
<? $y = mysql_query("SELECT * FROM posts WHERE subcat = '27' ORDER BY post_id DESC"); 


	
?>

<?  ?>
    <div class="container white" style="padding:0">

	  <div class="row" style="background: white;">
      <? include 'leftl.php' ?>
       <div class="large-9 columns" style="margin-bottom: 15px;">
   		<h3 class="subheader">Articles </h3>
   		<hr />
       <? $n = mysql_num_rows($y); 
	   if($n < 1) { ?>
	     <p>There are no articles at this time. Please try again later</p>
	   <? } else {
	  
		while($z = mysql_fetch_object($y)){?>
        <div class="row">
        <div class="large-12 columns">
        <h5 class="subheader"><?=stripslashes($z->page_title)?></h5>
        <div><?=substr(stripslashes($z->post), 0, 200)?> ....</div>
        <p class="more"><a href="art.php?id=<?=$z->post_id?>">Read More</a></p>
        </div>
        
        </div><hr>
				   
		   
	<? }?>
      
  </div>
 
    <? } ?>	
	    
        
      </div>
	</div>
<?
include 'footer.php';
?>