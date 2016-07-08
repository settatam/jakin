<?
session_start();
include 'vegetables.php';
include 'functions.php';
$post_session = getPostCode($uid);
$page_id = mysql_escape_string($_REQUEST['id']);
if($_POST['submit']) {
	$id = clean($_POST['title']);
	$title = mysql_escape_string($_POST['title']);
	$editor = mysql_escape_string($_POST['editor']);
	$youtube = mysql_escape_string($_POST['youtube']);
	$feature = mysql_escape_string($_POST['featured']);
	mysql_query("INSERT INTO posts (posted_by, video, post, post_session, page_id) VALUES ('$uid', '$youtube', '$editor', $post_session, '$page_id')");
	$message = "You page has been created";
}
?>

 <!-- Header and Nav -->
<? include 'header.php' ?>
<script src="lib/jquery1.5.js" type="text/javascript" charset="utf-8"></script>
	<script src="jquery.wysiwyg.js" type="text/javascript" charset="utf-8"></script>
	<script src="src/dialogs/default.js" type="text/javascript" charset="utf-8"></script>
	<script type="text/javascript" src="controls/wysiwyg.image.js"></script> 
	<script type="text/javascript" charset="utf-8">
	//<![CDATA[
		$(document).ready(function(){
			$('#editor').wysiwyg({
				controls:"bold,italic,|,undo,redo,image"
			});
		});
	//]]>
	</script>
	<link rel="stylesheet" href="jquery.wysiwyg.css" type="text/css" media="screen" charset="utf-8" />
	<link rel="stylesheet" href="src/dialogs/default.css" type="text/css" media="screen" charset="utf-8" />

  <!-- End Header and Nav -->


<div class="row">

  <!-- Main Body ... Configured to pull first to the left on smaller screens -->

<div class="large-9 push-3 columns">

<div class="row">

<h4>Create A New Cloud9 Page</h4>
<hr> 
</div>

  <div class="row">
    <form action="" method="post" class="custom">
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
          <label class="inline">Youtube Video URL</label>
        </div>
        <div class="large-10 columns">
          <textarea name="youtube" cols="" rows=""></textarea>
        </div>
      </div>
      <div class="row">
       <div class="large-2 columns">
          <label class="inline">&nbsp;</label>
        </div>
        <div class="large-10 columns">
          <textarea name="editor" cols="" rows="" id="editor"></textarea>
        </div>
      </div>
      <div class="row">
       <div class="large-2 columns">
          <label class="inline">&nbsp;</label>
        </div>
        <div class="large-10 columns">
          <a class="button disabled" href="#" data-reveal-id="myModal">Upload Pictures</a>
        </div>
      </div>
      <div class="row">
       <div class="large-2 columns">
          <label class="inline"><input name="featured" type="checkbox" value="1"></label>
        </div>
        <div class="large-10 columns">
         Feature this page on the home page
        </div>
      </div>
      
      <div class="row">
        <div class="large-12 columns">
          <input name="submit" type="submit" value="Create New Page" class="success button right">
          <input name="subcat" type="hidden" id="sub" value="1001" />
        </div>
      </div>
    </form>
  </div>
</div>
 <!-- Nav Sidebar -->
        <!-- Main Feed -->
    <!-- This has been source ordered to come first in the markup (and on small devices) but to be to the right of the nav on larger screens -->

    <!-- This is source ordered to be pulled to the left on larger screens -->

 <? include 'left.php' ?>
  
            
 
 
  <!-- Right Sidebar -->
  <!-- On small devices this column is hidden -->


  <!-- Footer -->

<? include 'footer.php' ?>