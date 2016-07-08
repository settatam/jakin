<?
session_start();
include 'vegetables.php';
include 'functions.php';
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
                    <li class="active"><a href="index.php"><i class="fa fa-desktop"></i>Posts</a>
                    
                    </li>                    
                    <li><a href="categories.php"><i class="fa fa-pencil"></i>Gallery</a>
                     
                    </li> 
                    <li><a href="#"><i class="fa fa-table"></i> Videos</a>                   
                    <li><a href="#"><i class="fa fa-cogs"></i>Page Categories</a>
                        <ul>
                            <li><a href="ui-widgets.html">Widgets</a></li>
                            <li><a href="ui-buttons.html">Buttons</a></li>
                            <li><a href="ui-slider-progress.html">Slider & Progress</a></li>
                            <li><a href="ui-modals.html">Modals & Popups</a></li>
                            <li><a href="ui-tabs.html">Tabs & Accordion</a></li> 
                            <li><a href="ui-lists.html">Lists</a></li>
                            <li><a href="ui-blocks-panels.html">Blocks & Panels</a></li>
                            <li><a href="ui-icons.html">Icons</a></li>
                            <li><a href="ui-typography.html">Typography</a></li>
                            <li class="active"><a href="ui-grid.html">Grid</a></li>
                            <li><a href="ui-nestable.html">Nestable List</a></li>
                        </ul>
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
                            <div class="page-toolbar-title">All Pages</div>
                            
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
                                <div class="block">
                                <div class="block-content">
                                    <h2><strong>All Posts</strong>                                </h2>
                                </div>
                                <div class="block-content np">
                                 <?
 									 $q = mysql_query("SELECT * FROM posts");
 									 $n = mysql_num_rows($q);
 									 if($n < 1) {?>
										<div>You have no posts. <a href="newpage.php" class="button success small">Enter A New Page</a></div>  
  										<? }else{ ?>
  										<table class="table">
                                        <tr>
                                            <th>Page Title</th><th>Actions</th>
                                        </tr>
										<?  while($r=mysql_fetch_object($q)){ ?>
                                    
                                        <tr>
                                            <td><?=stripslashes($r->page_title)?>
      <br />
      <a href="editpage.php?pageid=<?=$r->post_id?>">Edit Post</a> | <a href="javascript:void(0)" onClick="confirmDelete('deletepage.php?id=<?=$r->post_id?>')">Delete</a></td><td></td>
                                        </tr>
                                        <? }  ?>                                       
                                  </table>
                                  
                                  <? } ?>
                                </div>
                            </div>
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