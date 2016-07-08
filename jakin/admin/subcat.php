<?
session_start();
include 'vegetables.php';
$id = mysql_escape_string($_GET['id']);
$sub = mysql_escape_string($_GET['sub']);
$sid = mysql_escape_string($_GET['sid']);
if($_POST['subcat']) {
	$title = mysql_escape_string($_POST['title']);
	$new_title = str_replace(" ","-", trim($_POST['title']));
	$new_string = ereg_replace("[^A-Za-z0-9-]", "", $new_title);
	$q = mysql_query("INSERT INTO subcat(subcategory, cat_id, title) VALUES ('$title', '$id', '$new_string')");
}
$q = mysql_query("SELECT category FROM category WHERE cat_id = '$id'");
$n = mysql_num_rows($q);
if($n != 1) {
	header("location: index.php");
	exit;
}else{
	$r = mysql_fetch_object($q);
	$category = $r->category;
}
	
include 'header.php';
?>

<div class="row">
<? include 'lefty.php'; ?>
  
  <div class="large-9 columns">
  <h3>SubCategories for 
    <?=$category?>
  </h3>
  <div class="row">
  <table  width="100%">
  <thead>
    <tr>
      <th width="50%">Sub Category Name </th>
      <th width="25%">Sub Category Name </th>
      <th width="25%">Action</th>
      </tr>
  </thead>
  <tbody>
   
 <?
  $q = mysql_query("SELECT subcategory, cat_id, title, subcat_id FROM subcat where cat_id = '$id'");
  $n = mysql_num_rows($q);
  if($n < 1) {?>
	<div class="large-12 columns"><?=$category?> has no categories. Fill the form below to enter a new sub category</div>  
  <? }else{
  while($r=mysql_fetch_object($q)){ ?>
	<tr>
      <td><?=$r->subcategory?></td>
      <td><a href="newgallery.php?pageid=<?=$r->cat_id?>&sub=<?=$r->title?>&sid=<?=$r->subcat_id?>">Create Page</a></td>
      <td><a href="deleteprod.php?id=<?=$r->style_id?>">Delete</a></td>
     </tr>
  <? } ?>
   </tbody>
</table>
<? } ?>
  </div>
   
  <div style="clear:both"></div>
  <div class="large-12 columns"> <h4>Add A New Sub Category for
    <?=$category?>
  </h4></div>
  <hr>
  <div class="large-12 columns">

    <form action="" method="post" class="custom">
      
      <div class="row">
        <div class="large-3 columns">
          <label class="inline">Sub Category Name*</label>
        </div>
        <div class="large-9 columns">
          <input name="title" type="text" id="title"/>
        </div>
      </div>
      <div class="row">
        <div class="large-12 columns">
          <input name="submit" type="submit" value="Enter Category" class="success button right">
          <input name="subcat" type="hidden" id="sub" value="1001" />
        </div>

    </form>
  	</div>
  </div>
            
 
 
  <!-- Right Sidebar -->
  <!-- On small devices this column is hidden -->
  </div>


  <!-- Footer -->

  <footer class="row">
    <div class="large-12 columns">
      <hr />
      <div class="row">
        <div class="large-5 columns">
          <p>&copy; Teheelar.</p>
        </div>
        <div class="large-7 columns">
          <ul class="inline-list right">
            <li><a href="entertops.php">Enter New Top</a></li>
            <li><a href="enterdresses.php">Enter New Dresses</a></li>
            <li><a href="entershoes.php">Enter New Shoes</a></li>
          </ul>
        </div>
      </div>
    </div>
  </footer>

  <script>
  document.write('<script src=js/vendor/' +
  ('__proto__' in {} ? 'zepto' : 'jquery') +
  '.js><\/script>')
  </script>
  <script src="js/foundation.min.js"></script>
  <!--
  
  <script src="js/foundation/foundation.js"></script>
  
  <script src="js/foundation/foundation.alerts.js"></script>
  
  <script src="js/foundation/foundation.clearing.js"></script>
  
  <script src="js/foundation/foundation.cookie.js"></script>
  
  <script src="js/foundation/foundation.dropdown.js"></script>
  
  <script src="js/foundation/foundation.forms.js"></script>
  
  <script src="js/foundation/foundation.joyride.js"></script>
  
  <script src="js/foundation/foundation.magellan.js"></script>
  
  <script src="js/foundation/foundation.orbit.js"></script>
  
  <script src="js/foundation/foundation.placeholder.js"></script>
  
  <script src="js/foundation/foundation.reveal.js"></script>
  
  <script src="js/foundation/foundation.section.js"></script>
  
  <script src="js/foundation/foundation.tooltips.js"></script>
  
  <script src="js/foundation/foundation.topbar.js"></script>
  
  -->
  
  <script>
    $(document).foundation();
  </script>
</body>
</html>
