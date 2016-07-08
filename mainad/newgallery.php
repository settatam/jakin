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
	$page_id = mysql_escape_string($_GET['pageid']);
	$sub = mysql_escape_string($_GET['sub']);
	$sid = mysql_escape_string($_GET['sid']);
	mysql_query("INSERT INTO posts (posted_by, video, post, post_session, page_id, long_id, page_title, subcat) VALUES ('$uid', '$youtube', '$editor', '$ps', '$page_id', '$id', '$title', '$sid')") or die (mysql_error());
	header("location: pages.php");
	exit;
}
include 'header.php';
?>


            
            <div class="page-navigation">
                
                <div class="page-navigation-info">
                    <a href="index.html" class="logo">Gemini</a>
                </div>
                
                <div class="profile">                    
                    <div class="profile-info">
                        <a href="#" class="profile-title">Howdy, John Doe</a>
                        <span class="profile-subtitle">Administrator</span>
                        <div class="profile-buttons">
                            <div class="btn-group">                                
                                <a class="but dropdown-toggle" data-toggle="dropdown"><i class="fa fa-cog"></i></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li role="presentation" class="dropdown-header">Profile Menu</li>
                                    <li><a href="#">Messages</a></li>                                    
                                    <li><a href="#">Statistics</a></li>
                                    <li><a href="#">Changelog</a></li>
                                    <li><a href="#">Settings</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Logout</a></li>
                                </ul>
                            </div>
                        </div>                        
                    </div>
                </div>

                <ul class="navigation">
                    <li><a href="index.html"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                    <li><a href="index.php"><i class="fa fa-desktop"></i>Posts</a>
                    
                    </li>                    
                    <li class="active"><a href="#"><i class="fa fa-pencil"></i>Gallery</a>
                     <ul>
                     <li><a href="#">All Galleries</a></li>
                     <li><a href="#">Create New Gallery</a></li>
                     </ul>
                    </li>                   
                    <li><a href="category.php"><i class="fa fa-cogs"></i>Page Categories</a>
                       
                    </li>
                    <li><a href="#"><i class="fa fa-map-marker"></i> Users</a>
                       
                    </li>
                    
                        </ul>
                    </li>
                </ul>
                
            </div>
            
            <div class="page-content">

                <div class="container">
                    
                    <div class="page-toolbar">
                        
                        <div class="page-toolbar-block">
                            <div class="page-toolbar-title">Create A New PhotoGallery</div>
                            
                        </div>
                        
                        <div class="page-toolbar-block pull-right">
                            <div class="widget-info widget-from">
                                                          
                                <a class="btn btn-primary" href="newpage.php"><i class="fa fa-cog"></i> Create A New Page</a>                            
                                <a class="btn btn-danger"><i class="fa fa-power-off"></i> Logout</a>
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
                                	<form>
                                    <div class="row-form">
                                        <div class="col-md-3"><strong>Gallery Title</strong></div>
                                        <div class="col-md-9"><input type="text" class="form-control" value="text value"/></div>
                                    </div>
                                    
                                    <div class="row-form">
                                        <div class="col-md-3"><strong>Category</strong></div>
                                        <div class="col-md-9"> <button class="btn btn-primary" id="vpb_upload_button"><i class="fa fa-cog"></i> Upload Pictures</button></div>
                                    </div>
                                    <div class="row">
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
                                   
                                     <div class="row-form">
                                        <div class="col-md-3"><strong>Post</strong></div>
                                        <div class="col-md-9"><textarea class="editor" ></textarea></div>
                                    </div>
                                     <div class="row-form">
                                        <div class="col-md-3">&nbsp;</div>
                                        <div class="col-md-9"><input type="submit" class="success" value="Submit New Post"/></div>
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
</html>