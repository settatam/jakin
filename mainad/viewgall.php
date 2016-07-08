<?
session_start();
if(!$_SESSION['uid']) {
	header("location: login.php");
	exit;
}
include 'vegetables.php';
include 'functions.php';
include 'header.php';
$post_id = mysql_real_escape_string($_GET['id']);
$pd = mysql_real_escape_string($_GET['pd']);
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
                                    <h2><strong>Jakin's Gallery</strong>                                </h2>
                                </div>
                                <div class="block-content np">
                                 <?
 									 $q = mysql_query("SELECT * FROM gallery WHERE post_session = '$pd' ORDER BY gallery_id DESC");
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
                                            <td><img src="../admin/uploaded_files/<?=$r->picture?>.jpg" style="max-width: 200px;"/><?=stripslashes($r->page_title)?>
      <br />
      <input type="text" id="<?=$r->gallery_id?>" value="<?=stripslashes($r->description)?>" style="width: 400px; margin: 10px 0"/>
      <a onclick="updatePicture('<?=$r->gallery_id?>')" class="btn btn-primary" href="javascript:void(0)">Update Picture Description</a></td><td></td>
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