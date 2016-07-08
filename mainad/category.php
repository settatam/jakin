<?
session_start();
if(!$_SESSION['uid']) {
	header("location: login.php");
	exit;
}
include 'vegetables.php';
include 'functions.php';
if($_POST['subcat']) {
	$title = mysql_escape_string($_POST['title']);
	$q = mysql_query("INSERT INTO category (category) VALUES ('$title')");
}
include 'header.php';
?>

            
            <? include 'left.php' ?>
            
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
                                    <h2><strong>All Pages</strong>                                </h2>
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
                                            <th width="60%">Category</th><th width="20%">Sub Categories</th><th width="20%">Actions</th>
                                        </tr>
										<?  while($r=mysql_fetch_object($q)){ ?>
                                    
                                        <tr>
                                        <td><a href="subcat.php?id=<?=$r->cat_id?>"><?=$r->category?></a></td>
     
     									<td><?=getSubs($r->cat_id)?></td>
    									 <td><a href="javascript:void(0)" onClick="confirmDelete('deletepage.php?id=<?=$r->post_id?>')">Delete</a></td>
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