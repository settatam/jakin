<?
session_start();
include 'vegetables.php';

$page_id = mysql_escape_string($_GET['pageid']);
$sub = mysql_escape_string($_GET['sub']);
$sid = mysql_escape_string($_GET['sid']);

include 'vegetables.php';
include 'functions.php';
$post_session = getPostCode($uid);
$page_id = mysql_escape_string($_REQUEST['id']);
if($_POST['submit']) {
	$id = clean($_POST['title']);
	$title = mysql_escape_string($_POST['title']);
	$editor = mysql_escape_string($_POST['editor']);
	$feature = mysql_escape_string($_POST['featured']);
	$page_id = mysql_escape_string($_POST['category']);
	$subcat = mysql_escape_string($_POST['subcategory']);
	$page_id = mysql_escape_string($_GET['pageid']);
	$sub = mysql_escape_string($_GET['sub']);
	$sid = mysql_escape_string($_GET['sid']);
	$uploaded_files_location = 'albumart/'; //This is the directory where uploaded files are saved on your server

		$final_location = $uploaded_files_location . basename($_FILES['file_to_upload']['name']); 


		$imageFile = $_FILES['file_to_upload']['name'];
		
		$file_type = strtolower(substr($imageFile, -4, 4));
		
		
		$photo = "n_".time();
		
		$uploadedfile = $_FILES['file_to_upload']['tmp_name'];
		
		if ($file_type == ".jpg" || $file_type == "jpeg") $src = imagecreatefromjpeg($uploadedfile);
		else if ($file_type == ".bmp") $src = imagecreatefromwbmp($uploadedfile);
		else if ($file_type == ".gif") $src = imagecreatefromgif($uploadedfile);
		else if ($file_type == ".png") $src = imagecreatefrompng($uploadedfile);
		
		list ($width,$height) = getimagesize($uploadedfile);
		
		$newwidth = 700;
		$newheight = round(($height/700)*$newwidth);
		$newheight = round(($height/$width)*$newwidth);
		
		$tmp = imagecreatetruecolor($newwidth,$newheight);
		imagecopyresampled($tmp,$src,0,0,0,0,$newwidth,$newheight,$width,$height);
		
 
		if (imagejpeg($tmp,"uploaded_files/".$photo.".jpg", 100)) 
			{
	//Here you can save the uploaded file to your database if you wish before the success message below
			$image = $photo;
			} 
			else 
			{
			$image = "";
			}
	mysql_query("INSERT INTO posts (posted_by, video, post, post_session, page_id, long_id, page_title, subcat, image) VALUES ('$uid', '$youtube', '$editor', '$ps', '$page_id', '$id', '$title', '$sid', '$photo')") or die (mysql_error());
	header("location: pages.php");
	exit;
}
?>

 <!-- Header and Nav -->
<? include 'header.php' ?>

<script type="text/javascript" src="tinymce/js/tinymce/tinymce.min.js"></script>
<script>
tinymce.init({
    selector: "textarea#editor",
    theme: "modern",
    width: 600,
    height: 300,
    plugins: [
         "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
         "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
         "save table contextmenu directionality emoticons template paste textcolor code"
   ],
   content_css: "css/content.css",
   toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons", 
   style_formats: [
        {title: 'Bold text', inline: 'b'},
        {title: 'Red text', inline: 'span', styles: {color: '#ff0000'}},
        {title: 'Red header', block: 'h1', styles: {color: '#ff0000'}},
        {title: 'Example 1', inline: 'span', classes: 'example1'},
        {title: 'Example 2', inline: 'span', classes: 'example2'},
        {title: 'Table styles'},
        {title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}
    ]
 }); 
</script>

<style>
    .editor-hidden {
        visibility: hidden;
        top: -9999px;
        left: -9999px;
        position: absolute;
    }
    textarea {
        border: 0;
        margin: 0;
        padding: 0;
   }
</style>
<style>
.yui-toolbar-group-insertitem {
    *width: auto;
}
</style>
  <!-- End Header and Nav -->
<div class="row">

 <? include 'lefty.php' ?>

  <!-- Main Body ... Configured to pull first to the left on smaller screens -->

<div class="large-9 columns">

<div class="row">

<h4>Create A  Page</h4>
<hr> 
</div>

  <div class="row">
    <form action="" method="post" enctype="multipart/form-data">
      <div class="row">
        <div class="large-2 columns">
          <label class="inline">Title</label>
        </div>
        <div class="large-10 columns">
          <input name="title" type="text" id="title"/>
        </div>
      </div>
      
	  
      <div class="row">
        <div class="large-2 columns">
          <label class="inline">Choose Category</label>
        </div>
        <div class="large-10 columns">
          <select name="category" onChange="loadSub(this.value)" id="cat">
          <option value="0">Choose Category</option>
             <?
		 	$u = mysql_query("SELECT * FROM category");
			while ($v = mysql_fetch_object($u)) { ?>
            <option value="<?=$v->cat_id?>"><?=$v->category?></option>
            <? } ?>
          </select>
        </div>
      </div>
      <div class="row">
        <div class="large-2 columns">
          <label class="inline">Choose Sub Category</label>
        </div>
        <div class="large-10 columns">
          <select name="subcategory" id="subcategory">
          <option value="0">Choose Sub Category</option>
           
          </select>
        </div>
      </div>
      <div class="row">
        <div class="large-2 columns">
          <label class="inline">Page Image</label>
        </div>
        <div class="large-10 columns">
         <input name="file_to_upload" type="file" id="file_to_upload">
        </div>
      </div>
      <div class="row">
       <div class="large-2 columns">
          <label class="inline">&nbsp;</label>
        </div>
        <div class="large-10 columns">
          <textarea name="editor" cols="" rows="" id="editor"><?=$post?></textarea>
        </div>
      </div>
      <div class="row">
       <div class="large-2 columns">
          <label class="inline">&nbsp;</label>
        </div>
        <div class="large-10 columns">
          <label class="inline"><a href="#" data-reveal-id="myModal">Upload Pictures for Gallery</a></label>
        </div>
      </div>
      <div class="row">
       <div class="large-10 large-offset-2 columns">
          <label class="inline">
            <input name="featured" type="checkbox" value="1"> 
            &nbsp;&nbsp; Add Gallery</label>
        </div>
      </div>
      
      <div class="row">
        <div class="large-12 columns">
          <input name="submit" type="submit" value="Edit Page" class="success button right">
          <input name="subcat" type="hidden" id="sub" value="1001" />
        </div>
      </div>
    </form>
  </div>
</div>
</div>
 <!-- Nav Sidebar -->
        <!-- Main Feed -->
    <!-- This has been source ordered to come first in the markup (and on small devices) but to be to the right of the nav on larger screens -->

    <!-- This is source ordered to be pulled to the left on larger screens -->
  
            
 
 
  <!-- Right Sidebar -->
  <!-- On small devices this column is hidden -->


  <!-- Footer -->
 <script type="text/javascript">

function  loadSub(v) {
	$.ajax({
  		url: "loadsub.php?id="+v,
  		cache: false
		})
  		.done(function(html) {
   		 $("#subcategory").html(html);
  });
	}
</script>


<? include 'footer.php' ?>