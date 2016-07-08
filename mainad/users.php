<?
session_start();
include 'vegetables.php';
include 'functions.php';
if($_POST['emailaddress']) {
	$emailaddress = mysql_real_escape_string($_POST['emailaddress']);
	$name = mysql_real_escape_string($_POST['name']);
	$q = mysql_query("INSERT into mailing(email, name) VALUES ('$emailaddress', '$name')");
	$mess = "Your entry has been entered";
}
if($_POST['title']) {
	$subject = $_POST['title'];
	$message = $_POST['editor'];
	$reply = "info@jakinministry.org";
	$header = "From: Jakin N.G.O <info@jakinministry.org>\r\nReply-To: $email\r\n";
	$header .= "Content-type: text/html\r\n";
	$to = "seth.atam@gmail.com";
	include 'mailer.php';
	

			$message = '<h3>'.$subject.'</h3>
					  <p class="lead" style="margin-bottom: 10px; font-weight: normal; font-size:17px; line-height:1.6;">
					  '.$message.'
					  </p>';
	$q = mysql_query("SELECT email FROM mailing");
	while($r=mysql_fetch_object($q)){ 
	$email = $r->email;
	Email($email, $subject, $message);
	}
	Email("seth.atam@gmail.com", $subject, $message);
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
                                    <h2><strong>New Entry to Mailing List</strong>                                </h2>
                                </div>
                                <div class="block-content">
                                <div class="block-content np">
                              	<form class="form-inline" role="form" action="" method="post">
  										<div class="form-group">
    										<label class="sr-only" for="exampleInputEmail2">Name</label>
    											<input type="text" class="form-control" id="name" name="name" placeholder="Enter Full Name">
  										</div>
  										<div class="form-group">
    				<label class="sr-only" for="emailaddress">Email address</label>
    											<input type="email" class="form-control" id="emailaddress" name="emailaddress" placeholder="Enter email">						</div>
  										
  										<button type="submit" class="btn btn-default">Sign in</button>
								</form>
                                </div></div>
                            </div>
                             
                        </div>

                        <div class="col-md-12">
                            
                                <div class="block">
                                <div class="block-content">
                                    <h2><strong>Mailing List Subscribers</strong>                                </h2>
                                </div>
                                <div class="block-content np">
                                 <?
 									 $q = mysql_query("SELECT * FROM mailing ORDER BY mailing_id DESC");
 									 $n = mysql_num_rows($q);
 									 if($n < 1) {?>
										<div>You have no mailing list subscribers</div>  
  										<? }else{ ?>
  										<table class="table">
                                        <tr>
                                            <th width="40%">Name</th><th width="30%">Email</th><th width="30%">Actions</th>
                                        </tr>
										<?  while($r=mysql_fetch_object($q)){ ?>
                                    
                                        <tr>
                                        <td><?=$r->name?></td>
     
     									<td><?=$r->email?></td>
    									 <td><a href="javascript:void(0)" onClick="confirmDelete('deleteuser.php?id=<?=$r->post_id?>')">Delete</a></td>
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
                                    <h3><strong>Send An Email</strong> </h3>
                                    <p>Fill the form below to send an email to all your mailist list entries</p>
                                </div>
                                <div class="block-content np">
                                <form action="" method="post">
                                <div class="row-form">
                                        <div class="col-md-2"><strong>Title</strong></div>
                                        <div class="col-md-10"><input type="text" class="form-control" name="title" placeholder="Enter the title of the Email"/></div>
                                    </div>
                                <div class="row-form">
                                        <div class="col-md-2"><strong>Email Message</strong></div>
                                        <div class="col-md-10">
                                          <textarea class="editor" placeholder="Email Message" name="editor"></textarea>
                                        </div>
                                    </div>
                                    <p>&nbsp;</p>
                                     <div class="row-form">
                                        <div class="col-md-2">&nbsp;<input name="subcat" type="hidden" value="sub" /></div>
                                        <div class="col-md-10"><input type="submit" class="success" value="Send Email"/></div>
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