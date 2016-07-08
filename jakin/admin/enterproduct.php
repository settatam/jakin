<?
session_start();
include 'vegetables.php';
include 'functions.php';
if($_POST['sub'] == 1001) {

	$title = mysql_escape_string($_POST['title']);
	
	$sizes = $_POST['sizes'];

	$category = mysql_escape_string($_POST['categorys']);

	$product= mysql_escape_string($_POST['product_name']);

	$style  = mysql_escape_string($_POST['style']);

	$product_name = getproduct($title, $style);

	$price = mysql_escape_string($_POST['price']);
	
	$style_name = getStyleName($style);
	
	$product_code = getProductCode($style_name);
	
	$description = mysql_escape_string($_POST['description']);

	$qty = mysql_escape_string($_POST['qty']);

	$style = mysql_escape_string($_POST['style']);
	
	$uploaded_files_location = 'uploaded_files/'; //This is the directory where uploaded files are saved on your server

	$final_location = $uploaded_files_location . basename($_FILES['file_to_upload']['name']); 


		$imageFile = $_FILES['file_to_upload']['name'];
		
		$file_type = strtolower(substr($imageFile, -4, 4));
		
		
		$photo = "n_".$product_code."_".time();
		
		$uploadedfile = $_FILES['file_to_upload']['tmp_name'];
		
		if ($file_type == ".jpg" || $file_type == "jpeg") $src = imagecreatefromjpeg($uploadedfile);
		else if ($file_type == ".bmp") $src = imagecreatefromwbmp($uploadedfile);
		else if ($file_type == ".gif") $src = imagecreatefromgif($uploadedfile);
		else if ($file_type == ".png") $src = imagecreatefrompng($uploadedfile);
		
		list ($width,$height) = getimagesize($uploadedfile);
		
		$newwidth = 550;
		$newheight = round(($height/550)*$newwidth);
		$newheight = round(($height/$width)*$newwidth);
		
		$tmp = imagecreatetruecolor($newwidth,$newheight);
		imagecopyresampled($tmp,$src,0,0,0,0,$newwidth,$newheight,$width,$height);
		
 
	if(imagejpeg($tmp,"uploaded_files/".$photo.".jpg", 100)) 
	{
	$query = mysql_query("insert into stock (product_code, quantity, price, color, pic_file, stock_status, name, product_type, category, description) values ('$product_code', '$qty', '$price', '$color', '$photo', '1', '$product_name', 'Women', '$style', '$description')") or die ("Query Failed: .". mysql_error());
	$f = mysql_query("INSERT INTO photos (product_code, photo_file) VALUES ('$product_code', '$photo')") or die ("Query Failed: .". mysql_error());;
	foreach($sizes as $field=>$value) {
	$k = mysql_query("INSERT INTO productsizes (product_code, size_id) VALUES ('$product_code', '$value')");
	header("location: products.php?pco=$product_code");
		}
	}
}

$pid = mysql_escape_string($_GET['pid']);

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
  <h5>Enter New <?=getStyleName($pid);?></h5>
  <hr>
 <form action="" method="post" class="custom" enctype="multipart/form-data">
 <div class="row"></div>
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
						$q = mysql_query("select style_name, style_id from styles where category = 'Women' ORDER BY style_name ASC");
						while($r = mysql_fetch_object($q)) { ?>
                        <? if($r->style_id == $pid) { ?>
                        <option value="<?=$r->style_id?>" selected="selected"> <?=$r->style_name?> </option>
                        <? } else { ?>
         				<option value="<?=$r->style_id?>"> <?=$r->style_name?> </option>
         <? }
		 }
   ?>
       </select>
     </div>
   </div>
   <div class="row">
     <div class="large-3 columns">
       <label class="inline">Price*</label>
     </div>
     <div class="large-9 columns">
       <input name="price" type="text" id="price"/>
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
 	<input name="qty" type="text" id="qty">
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
 	<input name="file_to_upload" type="file" id="file_to_upload">
     </div>
   </div>
   <div class="row">
     <div class="large-12 columns">
   <input name="submit" type="submit" value="Enter Item" class="success button right">
   <input name="sub" type="hidden" id="sub" value="1001" />
     </div></div>

 </form>
 
  <!-- Right Sidebar -->
  <!-- On small devices this column is hidden -->
  </div>
<? include 'footer.php'; ?>