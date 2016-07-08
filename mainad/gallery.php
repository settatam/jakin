<?
session_start();
include 'vegetables.php';
include 'functions.php';
$post_session = getPostCode($uid);
$page_id = mysql_escape_string($_REQUEST['id']);
if($_POST) {
	$id = clean($_POST['title']);
	$ps = $_POST['ps'];
	$title = mysql_escape_string($_POST['title']);
	mysql_query("INSERT INTO posts (post_session, long_id, page_title, is_gallery) VALUES ('$ps', '$id', '$title', '1')") or die (mysql_error());
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
                            <div class="page-toolbar-title">Create A New Photo Gallery</div>
                            
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
                                	<form method="post" action="gallery.php">
                                   
                                    <div class="row-form">
                                      <div class="col-md-3"><strong>Gallery Title</strong></div>
                                        <div class="col-md-9"><input name="title" type="text" class="form-control" id="title" placeholder="Enter Title for Gallery" value=""/></div>
                                    </div>
                                    
                                    <div class="row-form">
                                        <div class="col-md-3"><strong>Category</strong></div>
                                        <div class="col-md-9"> <button class="btn btn-primary" id="vpb_upload_button"><i class="fa fa-cog"></i> Upload Pictures</button></div>
                                    </div>
                                    <div class="row">
                                     <div class="col-md-3"><strong>Gallery Pictures</strong></div>
                                     <div class="col-md-9">
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
                                    </div>
                                    
                                    <div class="row" style="display: none;" id="enterdescription">
 										<div class="col-md-offset-3 col-md-9">
                                        	<h4 id="titlename">Image File Name</h4></div>
 											
 											<div class="row-form">
        										<div class="col-md-3">
          											<label class="inline">Description</label>
       											 </div>
       													 <div class="col-md-9">
         													 <input name="description" type="text" id="description" class="form-control"/>
         													 <input name="vpb_image_name" type="hidden" id="vpb_image_name"  value=""/>
         													 <input name="ps" type="hidden" value="<?=$post_session?>" id="post_session"/>
       													 </div>
      												</div>
      										<div class="row-form">
        										<div class="col-md-offset-3 col-md-9">
         										 <a class="btn btn-primary" onclick="postDescription()" href="javascript:void(0)">Enter Description</a>
          										<input name="pso" type="hidden" id="sub" value="<?=$_POST['seesion']?>" />
        										</div>
      										</div>
                                       </div>
                                                
                                   
                                     
                                     <div class="row-form">
                                        <div class="col-md-3">&nbsp;</div>
                                        <div class="col-md-9"><input type="submit" class="success" value="Submit New Post"/></div>
                                    </div>
                                   
                                    </form>
                                    <p>&nbsp;</p>
                                     <p>&nbsp;</p>
                                     <p>&nbsp;</p>
                                     <p>&nbsp;</p>
                                      <p>&nbsp;</p>
                                     <p>&nbsp;</p>
                                     <p>&nbsp;</p>
                                     <p>&nbsp;</p>
                                      <p>&nbsp;</p>
                                     <p>&nbsp;</p>
                                     <p>&nbsp;</p>
                                     <p>&nbsp;</p>
                                      <p>&nbsp;</p>
                                     <p>&nbsp;</p>
                                     <p>&nbsp;</p>
                                     <p>&nbsp;</p>
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