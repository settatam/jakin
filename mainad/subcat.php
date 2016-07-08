<?
session_start();
if(!$_SESSION['uid']) {
	header("location: login.php");
	exit;
}
include 'vegetables.php';
$id = mysql_escape_string($_GET['id']);
$sub = mysql_escape_string($_GET['sub']);
$sid = mysql_escape_string($_GET['sid']);
if($_POST['subcat']) {
	$title = mysql_escape_string($_POST['title']);
	$new_title = str_replace(" ","-", trim($_POST['title']));
	$new_string = ereg_replace("[^A-Za-z0-9-]", "", $new_title);
	$q = mysql_query("INSERT INTO subcat(subcategory, cat_id, title) VALUES ('$title', '$id', '$new_string')");
}
$q = mysql_query("SELECT category FROM category WHERE cat_id = '$id'");
$n = mysql_num_rows($q);
if($n != 1) {
	header("location: index.php");
	exit;
}else{
	$r = mysql_fetch_object($q);
	$category = $r->category;
}
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
                    <li><a href="index.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                    <li><a href="index.php"><i class="fa fa-desktop"></i>Posts</a>
                    
                    </li>                    
                    <li><a href="gallery.php"><i class="fa fa-pencil"></i>Gallery</a>
                     
                    </li>                   
                    <li class="active"><a href="category.php"><i class="fa fa-cogs"></i>Page Categories</a>
                       
                    </li>
                    <li><a href="users.php"><i class="fa fa-map-marker"></i>Mailing List</a>
                       
                    </li>
                    
                        </ul>
                    </li>
                </ul>
                
            </div>
            
            <div class="page-content">

                <div class="container">
                    
                    <div class="page-toolbar">
                        
                        <div class="page-toolbar-block">
                            <div class="page-toolbar-title">Categories</div>
                            
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
                                <div class="block-content">
                                    <h2>SubCategories for
                                      <?=$category?>
                                    </h2>
                                </div>
                                <div class="block-content np">
                                 <?
 									 $q = mysql_query("SELECT * FROM category");
 									 $n = mysql_num_rows($q);
 									 if($n < 1) {?>
										<div>You have no categories. Fill the form below to Start</div>  
  										<? }else{ ?>
  										<table class="table">
                                        <tr>
                                            <th width="60%">Sub Category Name</th>
                                            <th width="20%">Actions</th><th width="20%">Actions</th>
                                        </tr>
										<?  while($r=mysql_fetch_object($q)){ ?>
                                    
                                        <tr>
                                        <td><a href="subcat.php?id=<?=$r->cat_id?>"><?=$r->category?></a></td>
     
     									<td><a href="newgallery.php?pageid=<?=$r->cat_id?>&amp;sub=<?=$r->title?>&amp;sid=<?=$r->subcat_id?>">Create Page</a></td>
    									 <td><a href="deleteprod.php?id=<?=$r->style_id?>">Delete</a><a href="javascript:void(0)" onClick="confirmDelete('deletepage.php?id=<?=$r->post_id?>')"></a></td>
                                        </tr>
                                        <? }  ?>                                       
                                  </table>
                                  
                                  <? } ?>
                                </div>
                            </div>
                             
                        </div>                                                   

                    </div>
                    
                    <div class="row">

                        <div class="col-md-12">
                            
                                <div class="block">
                                <div class="block-content">
                                    <h3><strong>Create A New Category</strong> </h3>
                                    <p>Fill the form below to create a New Category</p>
                                </div>
                                <div class="block-content np">
                                <form action="" method="post">
                                <div class="row-form">
                                        <div class="col-md-2"><strong>Category Name</strong></div>
                                        <div class="col-md-10"><input name="title" type="text" class="form-control" id="title" placeholder="Enter Category" value=""/></div>
                                    </div>
                                    <p>&nbsp;</p>
                                     <div class="row-form">
                                        <div class="col-md-2">&nbsp;<input name="subcat" type="hidden" value="sub" /></div>
                                        <div class="col-md-10"><input type="submit" class="success" value="Enter Category"/></div>
                                    </div>
                                    <p>&nbsp;</p>
                                    <p>&nbsp;</p>
                                    <p>&nbsp;</p>
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