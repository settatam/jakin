 <?
 include 'vegetables.php';
 $k = mysql_query("SELECT * FROM category");
 ?>
 <div class="large-3 columns">
      <div class="section-container accordion" data-section="accordion">
<?
while($l = mysql_fetch_object($k)) { 
if($l->category == "Gallery") {
	$page = "newgallery.php";
	}elseif
	($l->category == "Events") {
	$page = "newgallery.php";
	}elseif
	($l->category == "Projects") {
	$page = "newgallery.php";
	}elseif
	($l->category == "Jakin Initiated Projects") {
	$page = "newgallery.php";
	}else{
	$page = "newpage.php";	
}
?>   
 <section>
    <p class="title" data-section-title><a href="#"><?=$l->category?></a></p>
   <div class="content" data-section-content>
      <ul class="side-nav">
      <li> <a href="newpage.php?pageid=<?=$l->cat_id?>&type=edit">Edit Page</a></li>
      <li> <a href="<?=$page?>?pageid=<?=$l->cat_id?>&type=edit&subcat=<?=$l->category?>">New Page</a></li>
      </ul>
    </div>
 </section>
 <? } ?>
 <p><a href="projects.php"> Projects Manager</a></p>
</div>
  </div>
  