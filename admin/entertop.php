<?
session_start();
include 'vegetables.php';
include 'functions.php';
if($_POST['sub'] == 1000) {
	
	$title = mysql_escape_string($_POST['title']);

	$category = mysql_escape_string($_POST['categorys']);

	$product= mysql_escape_string($_POST['product_name']);

	$style  = mysql_escape_string($_POST['style']);

	$product_name = getproduct($product, $style);

	$price = mysql_escape_string($_POST['price']);

	$qty = mysql_escape_string($_POST['qty']);

	$style = mysql_escape_string($_POST['style']);

	$query = mysql_query("insert into stock (product_code, quantity, price, color, pic_file, stock_status, name, product_type, category) values ('$product_code', '$qty', '$price', '$color', '$image_name', '1', '$title', 'Women', $style)");
}

include 'header.php';


?>


  <!-- Header and Nav --

  <!-- End Header and Nav -->


<div class="row">



 <!-- Nav Sidebar -->
        <!-- Main Feed -->
    <!-- This has been source ordered to come first in the markup (and on small devices) but to be to the right of the nav on larger screens -->

    <!-- This is source ordered to be pulled to the left on larger screens -->
  <div class="large-4 columns">
      <div class="panel">
        
        <div class="section-container vertical-nav" data-section data-options="deep_linking: false; one_up: true">
        <?
		$s = mysql_query("SELECT style_name, style_id FROM styles where category = 'Women'");
		while($v = mysql_fetch_object($s)) { ?>
      <section class="section">
        <h5 class="title"><a href="products.php?id=<?=$v->style_id?>">Manage <?=$v->style_name?></a></h5>
      </section>
	   <? } ?>
      <section class="section">
        <h5 class="title"><a href="orders.php">Manage Orders</a></h5>
      </section>
      <section class="section">
        <h5 class="title"><a href="users.php">Manage Users</a></h5>
      </section>
      </div>

      </div>
  </div>
  
  <div class="large-8 columns">
  <h5>Enter A New Top</h5>
  <hr>
 <form class="custom" action="" method="post">
 <div class="row">
   <div class="large-12 columns">
     <!-- Upload Form Starts Here -->
     <div align="center">
       <!-- This is the upload button, you can change the ID to any variable of your choice but also change it in the JS and CSS files-->
       <div id="vpb_upload_button">Upload Images</div>
       <br clear="all" />
       <br clear="all" />
       <center>
         <div class="vpb_main_demo_wrapper" align="center">
           <!-- Main Wrapper -->
           <div id="vpb_uploads_error_displayer"></div>
           <!-- Error Message Displayer -->
           <div id="vpb_uploads_displayer"></div>
           <!-- Success Message (Files) Displayer -->
           <br clear="all" />
         </div>
       </center>
     </div>
   </div>
 </div>
<div class="row">
  <div class="large-3 columns">
       <label class="inline">Title*</label>
     </div>
     <div class="large-9 columns">
       <input name="title" type="text" id="title"/>
     </div>
 </div>
   <div class="row">
     <div class="large-3 columns">
       <label class="inline">Style*</label>
     </div>
     <div class="large-9 columns">
       <label for="select"></label>
       <select name="style" id="style">
         <option value="0" selected="selected">Style?</option>
         <?
						$q = mysql_query("select style_name from styles where category = 'Women' ORDER BY style_name ASC");
						while($r = mysql_fetch_object($q)) { ?>
         <option value="<?=$r->style_name?>">
           <?=$r->style_name?>
          </option>
         <? }
                        ?>
       </select>
     </div>
   </div>
   <div class="row">
     <div class="large-3 columns">
       <label class="inline">Price*</label>
     </div>
     <div class="large-9 columns">
       <input name="firstname" type="text" id="firstname"/>
     </div>
   </div>
   <div class="row">
     <div class="large-3 columns">
       <label class="inline">Sizes*</label>
     </div>
 	<div class="large-9 columns">
     <?
	 $q = mysql_query("SELECT * FROM sizes where item = 'tops'"); 
	 while($r = mysql_fetch_object($q)) {
	 ?>
     <div class="small-2 columns">
       <label><?=$r->sizes?></label><input type="checkbox" name="sizes[]" value="<?=$r->sizes_id?>"/>
     </div>
     <? } ?>
     </div>
   </div>
   <div class="row">
     <div class="large-3 columns">
       <label class="inline">Quantity*</label>
     </div>
 	<div class="large-9 columns">
 	<input name="Quatity" type="text">
     </div>
   </div>
   <div class="row">
     <div class="large-3 columns">
       <label class="inline">Description*</label>
     </div>
     <div class="large-9 columns">
     <textarea name="description" cols="" rows=""></textarea>
     </div>
   </div>
   <div class="row">
     <div class="large-3 columns">
       <label class="inline">Upload Image</label>
     </div>
 	<div class="large-9 columns">
 	<input name="uploadfile" type="file">
     </div>
   </div>
   <div class="row">
     <div class="large-12 columns">
   <input name="submit" type="submit" value="Enter Item" class="success button right"></div></div>

 </form>
 
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
  
 
  
  <script>
    $(document).foundation();
  </script>
</body>
</html>
