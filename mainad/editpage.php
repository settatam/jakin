<?
session_start();
include 'vegetables.php';
include 'functions.php';
$page_id = mysql_escape_string($_REQUEST['pageid']);

if($_POST) {
	$id = clean($_POST['title']);
	$title = mysql_escape_string($_POST['title']);
	$editor = mysql_escape_string($_POST['editor']);
	$feature = mysql_escape_string($_POST['featured']);
	$page_id = mysql_escape_string($_POST['category']);
	$subcat = mysql_escape_string($_POST['subcategory']);
	$page_id = mysql_escape_string($_GET['pageid']);
	$status = mysql_escape_string($_POST['status']);
	$sub = mysql_escape_string($_GET['sub']);
	$sid = mysql_escape_string($_GET['sid']);
	mysql_query("UPDATE posts SET post ='$editor', page_title='$title' WHERE post_id = '$page_id'") or die (mysql_error());
	header("location: index.php");
	exit;
}
$q = mysql_query("SELECT post, long_id, page_title, post_id, page_id FROM posts WHERE post_id = '$page_id'");
$n = mysql_num_rows($q);
if($n < 1) {
	header("location: index.php");
	exit;
}
$r = mysql_fetch_object($q);
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
                                	<form action="" method="post">
                                    <div class="row-form">
                                        <div class="col-md-3"><strong>Post Title</strong></div>
                                        <div class="col-md-9"><input name="title" type="text" class="form-control" id="title" value="<?=stripslashes($r->page_title)?>"/></div>
                                    </div>
                                    
                                    
                                   
                                     <div class="row-form">
                                        <div class="col-md-3"><strong>Post</strong></div>
                                        <div class="col-md-9"><textarea class="editor" name="editor"><?=$r->post?></textarea></div>
                                    </div>
                                     <div class="row-form">
                                        <div class="col-md-3">&nbsp;<input name="pageid" type="hidden" value="<?=$page_id?>" /></div>
                                        <div class="col-md-9"><input type="submit" class="success" value="Edit Post"/></div>
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