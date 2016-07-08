<?
session_start();
include 'vegetables.php';
$id = mysql_escape_string($_GET['id']);
if($_POST['subcat']) {
	$title = mysql_escape_string($_POST['title']);
	$q = mysql_query("INSERT INTO colours (colour_name) VALUES ('$title')");
}

?>
<!DOCTYPE html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8" />

  <!-- Set the viewport width to device width for mobile -->
  <meta name="viewport" content="width=device-width" />

  <title>Welcome to Foundation | Feed</title>

  <!-- Included CSS Files -->
  
  <link rel="stylesheet" href="../css/normalize.css">
  <link rel="stylesheet" href="../css/foundation.css">

  <script src="../js/vendor/custom.modernizr.js"></script>

</head>
<body>

  <!-- Header and Nav -->

  <div class="row">
    <div class="large-12 columns">
      <div class="panel">
        <h1>Welcome to Top Babies Admin</h1>
      </div>
    </div>
  </div>

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
		$s = mysql_query("SELECT style_name, style_id FROM styles");
		while($v = mysql_fetch_object($s)) { ?>
          <section class="section">
            <h5 class="title"><a href="products.php?id=<?=$v->style_id?>">Manage
              <?=$v->style_name?>
            </a></h5>
          </section>
          <? } ?>
          <section class="section">
            <h5 class="title"><a href="orders.php">Manage Categories</a></h5>
          </section>
          <section class="section">
            <h5 class="title"><a href="sizes.php">Manage Sizes</a></h5>
          </section>
           <section class="section">
            <h5 class="title"><a href="colours.php">Manage Colours</a></h5>
          </section>
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
  <h3>Colours</h3>
  <div class="row">
  <table>
  <thead>
    <tr>
      <th width="456">Colour Name </th>
      <th width="295">Action</th>
      </tr>
  </thead>
  <tbody>
   
 <?
  $q = mysql_query("SELECT colour_name FROM colours");
  $n = mysql_num_rows($q);
  if($n < 1) {?>
	<div class="large-12 columns"><?=$category?> has no categories. Fill the form below to enter a new sub category</div>  
  <? }else{
  while($r=mysql_fetch_object($q)){ ?>
	<tr>
      <td><?=$r->colour_name?></td>
      <td><a href="deleteprod.php?id=<?=$r->size_id?>">Delete</a></td>
     </tr>
  <? } ?>
   </tbody>
</table>
<? } ?>
  </div>
   
  <div style="clear:both"></div>
  <div class="large-12 columns"> <h4>Add A New Colour</h4></div>
  <hr>
  <div class="large-12 columns">
  <div class="row">
    <form action="" method="post" class="custom">
      
      <div class="row">
        <div class="large-3 columns">
          <label class="inline">Size*</label>
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
