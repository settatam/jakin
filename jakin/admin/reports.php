<?
include 'session.php';
include 'vegetables.php';
include 'functions.php';
$id = mysql_escape_string($_GET['id']);
if($_POST['subcat']) {
	$title = mysql_escape_string($_POST['title']);
$allowedExts = array("pdf", "doc", "docx", "png");
$temp = explode(".", $_FILES["file"]["name"]);
$extension = end($temp);
if ((($_FILES["file"]["type"] == "application/pdf")

|| ($_FILES["file"]["type"] == "application/rtf")
)
&& ($_FILES["file"]["size"] < 1000000)
&& in_array($extension, $allowedExts))
  {
  if ($_FILES["file"]["error"] > 0)
    {
    $message =  "Return Code: " . $_FILES["file"]["error"] . "<br>";
    }
  else
    {

    if (file_exists("uploaded_files/" . $_FILES["file"]["name"]))
      {
      $message = "File Already exists";
      }
    else
      {
      move_uploaded_file($_FILES["file"]["tmp_name"],
      "uploaded_files/" . $_FILES["file"]["name"]);
	  $q = mysql_query("INSERT INTO reports (title, project_id, filename) VALUES ('$title', '$id', '".$_FILES["file"]["name"]."')");
      }
    }
  }
else
  {
  $message = "Invalid File";
  }
	
}
$q = mysql_query("SELECT name FROM projects WHERE project_id = '$id'");
$n = mysql_num_rows($q);
if($n != 1) {
	header("location: index.php");
	exit;
}else{
	$r = mysql_fetch_object($q);
	$name = $r->name;
}
include("header.php");
?>
 <!-- Header and Nav -->
<script src="lib/jquery1.5.js" type="text/javascript" charset="utf-8"></script>


<div class="row">
<? include 'lefty.php'; ?>
<div class="large-9 columns">
  <h2>Reports</h2>
  <p><strong>Report(s) for <?=$name?></strong></p>
  <div class="row">
  <table>
  <thead>
    <tr>
      <th width="456">Report</th>
      <th width="295">Action</th>
      </tr>
  </thead>
  <tbody>
   
  <?
  $q = mysql_query("SELECT * FROM reports where project_id = '$id'");
  $n = mysql_num_rows($q);
  if($n < 1) {?>
	<div class="large-12 columns">You have no report for <?=$r->name?>. Fill the form below to enter a new report</div>  
  <? }else{ ?>
	<?
  while($r=mysql_fetch_object($q)){ ?>
	<tr>
      <td><?=$r->title?></td>
      <td><a href="javascript:void(0)" onClick="confirmDelete('deleteprod.php?id=<?=$r->style_id?>')">Delete</a></td>
     </tr>
  <? } ?>
   </tbody>
</table>
<? } ?>
  </div>
  </div>
   
  <div style="clear:both"></div>
  <div class="large-12 columns">
  <h4>Add A New Report</h4>
  <hr>
  <div class="row">
   <form action="" method="post" enctype="multipart/form-data" class="custom">
      
      <div class="row">
     <? if($message) {?>
     <div class="large-12 columns">
     <label class="inline"><?=$message?></label>
     </div>
	 <? }?>
        <div class="large-3 columns">
          <label class="inline">Report Title*</label>
        </div>
        <div class="large-9 columns">
          <input name="title" type="text" id="title"/>
        </div>
      </div>
      <div class="row">
        <div class="large-3 columns">
          <label class="inline">Upload File*</label>
        </div>
        <div class="large-9 columns">
          <input name="file" type="file" id="file" />
        </div>
      </div>
      <div class="row">
        <div class="large-12 columns">
          <input name="submit" type="submit" value="Enter Report" class="success button right">
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