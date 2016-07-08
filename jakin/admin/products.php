<?
session_start();
include 'vegetables.php';
?>
<? include 'header.php';?>

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
            <h5 class="title"><a href="products.php?id=<?=$v->style_id?>">Manage
              <?=$v->style_name?>
            </a></h5>
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
  <ul class="breadcrumbs"><li><a href="#">All Products</a> </li><li><a href="#">Tops</a></li><li class="current"><a href="#">Products Name</a></li></ul>
  
 <?
 $pco = mysql_escape_string($_GET['pco']);
 
 $q = mysql_query("SELECT name, pic_file, category, price, product_code from stock where product_code = '$pco'"); 
 $r = mysql_fetch_object($q);
 ?>

            <div class="large-6 small-4 columns">
              <img src="uploaded_files/<?=$r->pic_file?>.jpg">

              <div class="panel">
                
                
              </div> 
            </div>
            <div class="large-6 small-6 columns">
            <h5><?=$r->name?></h5>
            <ul class="smalltext">
            	<li>Product Code: <?=$r->product_code?></li>
            	<li>Price: N<?=number_format($r->price, 2)?></li>
                <li>Edit this Product</li>
                <li>Delete this Product</li>
            </ul>
             <hr>
             <h6>GALLERY PICTURES</h6>
             <div class="row">
                <?
				
				$t = mysql_query("SELECT photo_file FROM photos where product_code = '$pco'");
                $n = mysql_num_rows($t);
                if($n < 1) { ?>
				<div class="large-12 columns"> You have no pictures at this time.</div>
                <? }else {	
				while($u = mysql_fetch_object($t)) { ?>
                <div class="large-6 columns"><img src="uploaded_files/<?=$u->photo_file?>.jpg"></div>
                <a class="button disabled" href="#" data-reveal-id="myModal">Upload more Pictures</a>
                <? } } ?>
             </div>
            </div> 
            <hr />
            
 
 
  <!-- Right Sidebar -->
  <!-- On small devices this column is hidden -->
  </div>


  <!-- Footer -->

<? include 'footer.php'; ?>