<?
session_start();
if(!$_SESSION['uid']) {
	header("location: login.php");
	exit;
}
include 'vegetables.php';
include 'functions.php';
include 'header.php';
$q = mysql_escape_string($_GET['q'])
?>

            
            <? include 'left.php' ?>
            
            <div class="page-content">

                <div class="container">
                    
                    <div class="page-toolbar">
                        
                        <div class="page-toolbar-block">
                            <div class="page-toolbar-title">All Pages</div>
                            
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
                                <div class="block-content">
                                <div class="block">
                                <div class="block-content">
                                    <h2><strong>Search Results</strong></h2>
                                    <p><strong>You searched for: <?=$_GET['q']?></strong>                                </p>
                                </div>
                                <div class="block-content np">
                                 <?
 									 $q = mysql_query("SELECT * FROM posts WHERE page_title LIKE '%$q%'");
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