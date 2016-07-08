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
	$feature = mysql_escape_string($_POST['featured']);
	$page_id = mysql_escape_string($_POST['category']);
	$subcat = mysql_escape_string($_POST['subcategory']);
	$pcodes = mysql_escape_string($_POST['ps']);
	//$page_id = mysql_escape_string($_GET['pageid']);
	mysql_query("INSERT INTO posts (posted_by, video, post, post_session, page_id, long_id, page_title, subcat) VALUES ('$uid', '$youtube', '$editor', '$pcodes', '$page_id', '$id', '$title', '$subcat')") or die (mysql_error());
	
	$uploaded_files_location = '../admin/uploaded_files/'; //This is the directory where uploaded files are saved on your server

	$final_location = $uploaded_files_location . basename($_FILES['file_to_upload']['name']); 


		$imageFile = $_FILES['file_to_upload']['name'];
		
		$file_type = strtolower(substr($imageFile, -4, 4));
		
		
		$photo = "n_".$pcodes."_".time();
		
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
		
 
if (imagejpeg($tmp,"../admin/uploaded_files/".$photo.".jpg", 100)) 
{
	//Here you can save the uploaded file to your database if you wish before the success message below
	$t=mysql_query("UPDATE posts SET image = '$photo' WHERE post_session = '$pcodes'");
	$q = mysql_query("INSERT INTO gallery (post_session, picture) VALUES ('$pcodes', '$photo')");
} 

	header("location: index.php");
	exit;
}
include 'header.php';
?>


            
            <? include 'left.php' ?>
            
            <div class="page-content">

                <div class="container">
                    
                    <div class="page-toolbar">
                        
                        <div class="page-toolbar-block">
                            <div class="page-toolbar-title">Create A New Post</div>
                            
                        </div>
                        
                        <div class="page-toolbar-block pull-right">
                            <div class="widget-info widget-from">
                                                          
                                <a class="btn btn-primary" href="newpage.php"><i class="fa fa-cog"></i> Create A New Page</a>                            
                                 <a class="btn btn-danger" href="logout.php"><i class="fa fa-power-off"></i> Logout</a>
                            </div>
                        </div>
                        
                        <ul class="breadcrumb">
                            <li><a href="#">Dashboard</a></li>
                            <li><a href="#">UI Elements</a></li>
                            <li class="active">Grid</li>
                        </ul>                 
                        
                    </div>                    

                    
                                                   

                    <div class="dr"><span></span></div>

       
                                                             

                    <div class="row">

                        <div class="col-md-12">
                            <div class="block">
                                <div class="block-content controls">
                                	<form action="newpage.php" method="post" enctype="multipart/form-data">
                                    <div class="row-form">
                                        <div class="col-md-3"><strong>Post Title</strong></div>
                                        <div class="col-md-9"><input type="text" class="form-control" name="title" placeholder="Enter the title of the Post"/></div>
                                    </div>
                                    
                                    <div class="row-form">
                                        <div class="col-md-3"><strong>Category</strong></div>
                                        <div class="col-md-9">
                                            <select class="form-control" id="cat" name="category" onChange="loadSub(this.value)">
                                                <option value="0">Choose Category</option>
             										<?
		 												$u = mysql_query("SELECT * FROM category");
														while ($v = mysql_fetch_object($u)) { ?>
            											<option value="<?=$v->cat_id?>"><?=$v->category?></option>
            										<? } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row-form">
                                        <div class="col-md-3"><strong>Sub Category</strong></div>
                                        <div class="col-md-9">
                                           <select name="subcategory" id="subcategory" class="form-control">
          										<option value="0">Choose Sub Category</option>
           									</select>
                                        </div>
                                    </div>
                                    <div class="row-form">
                                        <div class="col-md-3"><strong>Banner Image</strong></div>
                                        <div class="col-md-9">
                                            <input name="file_to_upload" type="file" id="file_to_upload" />
                                        </div>
                                    </div>
                                   
                                     <div class="row-form">
                                        <div class="col-md-3"><strong>Post</strong></div>
                                        <div class="col-md-9"><textarea class="editor" name="editor"></textarea></div>
                                    </div>
                                     <div class="row-form">
                                        <div class="col-md-3">&nbsp;</div>
                                        <div class="col-md-9"><input type="submit" class="success" value="Submit New Post" name="submit"/><input name="ps" type="hidden" value="<?=$post_session?>" /></div>
                                    </div>
                                   
                                    </form>
                                </div>
                            </div>
                        </div>                                                   

                    </div>
                    
                     
                </div>
            </div>
            <div class="page-sidebar">
                
            </div>
            
        </div>        
        
    </body>
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
</html>