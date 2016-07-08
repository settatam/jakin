<?
include 'session.php';
include 'vegetables.php';
include 'functions.php';
if($_POST['subcat']) {
	$title = mysql_escape_string($_POST['title']);
	$q = mysql_query("INSERT INTO projects (name) VALUES ('$title')");
}
include("header.php");
?>
 <!-- Header and Nav -->
<script src="lib/jquery1.5.js" type="text/javascript" charset="utf-8"></script>


<div class="row">
<? include 'lefty.php'; ?>
<div class="large-9 columns">
  <h2>Projects</h2>
  <div class="row">
  <table>
  <thead>
    <tr>
      <th width="456">Project Name</th>
      <th width="295">Action</th>
      </tr>
  </thead>
  <tbody>
   
  <?
  $q = mysql_query("SELECT * FROM projects");
  $n = mysql_num_rows($q);
  if($n < 1) {?>
	<div class="large-12 columns">You have no projects. Fill the form below to enter a new project</div>  
  <? }else{ ?>
  <div class="large-12 columns">
	<?
  while($r=mysql_fetch_object($q)){ ?>
	<tr>
      <td><a href="subcat.php?id=<?=$r->cat_id?>"><?=$r->name?></a></td>
      <td><a href="gallery.php?id=<?=$r->project_id?>">Gallery </a> | <a href="reports.php?id=<?=$r->project_id?>">Reports</a> |<a href="javascript:void(0)" onClick="confirmDelete('deleteprod.php?id=<?=$r->style_id?>')"> Delete</a></td>
     </tr>
  <? } ?>
   </tbody>
</table>
<? } ?>
  </div>
  </div>
   
  <div style="clear:both"></div>
  <div class="large-12 columns">
  <h4>Add A New Category</h4>
  <hr>
  <div class="row">
   <form action="" method="post" class="custom">
      
      <div class="row">
        <div class="large-3 columns">
          <label class="inline">Project Name*</label>
        </div>
        <div class="large-9 columns">
          <input name="title" type="text" id="title"/>
        </div>
      </div>
      <div class="row">
        <div class="large-12 columns">
          <input name="submit" type="submit" value="Enter Project" class="success button right">
          <input name="subcat" type="hidden" id="sub" value="1001" />
        </div>
      </div>
    </form>
      
      </div>

    </div>        
 
 
  <!-- Right Sidebar -->
  <!-- On small devices this column is hidden -->
  	</div>

<!-- Right Sidebar -->
  <!-- On small devices this column is hidden -->


  <!-- Footer -->

<? include 'footer.php' ?>