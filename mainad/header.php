<!DOCTYPE html>
<html lang="en">
    <head>        
        <title>Welcome to Admin</title>    

        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

        <link href="css/styles.css" rel="stylesheet" type="text/css" />
        <!--[if lt IE 10]><link rel="stylesheet" type="text/css" href="css/ie.css"/><![endif]-->        
        
        <script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
        
        <script type="text/javascript" src="js/plugins/summernote/summernote.min.js"></script>
        
        <script type="text/javascript" src="js/plugins/codemirror/codemirror.js"></script>
        <script type='text/javascript' src="js/plugins/codemirror/addon/edit/matchbrackets.js"></script>
        <script type='text/javascript' src="js/plugins/codemirror/mode/htmlmixed/htmlmixed.js"></script>
        <script type='text/javascript' src="js/plugins/codemirror/mode/xml/xml.js"></script>
        <script type='text/javascript' src="js/plugins/codemirror/mode/javascript/javascript.js"></script>
        <script type='text/javascript' src="js/plugins/codemirror/mode/css/css.js"></script>
        <script type='text/javascript' src="js/plugins/codemirror/mode/clike/clike.js"></script>
        <script type='text/javascript' src="js/plugins/codemirror/mode/php/php.js"></script>
        
        <script type="text/javascript" src="js/plugins.js"></script>
        <script type="text/javascript" src="js/demo.js"></script>
        <script type="text/javascript" src="js/actions.js"></script> 
        <script src="js/ajaxupload.3.5.js"></script>
  		<script src="js/uploader.js"></script>
         <script type="text/javascript" language="javascript">
			function confirmDelete(delUrl) {
  			if (confirm("Are you sure you want to delete")) {
   			 		document.location = delUrl;
  					}
			}
			function updatePicture(id) {	
			var value = $("#"+id).val();
		$.ajax({
  			url: "update.php?id="+id+"&v=" + value ,
  			cache: false
		})
  		.done(function(html) {
			alert("Picture Has been Updated");
  		});		
}
</script>
              
        
    </head>
    <body>
        
        <div class="page-container">
 
            <div class="page-head">
                
                <ul class="page-head-elements">
                    <li><a href="#" class="page-navigation-toggle"><span class="fa fa-bars"></span></a></li>
                    <li class="search">
                    <form  method="get" action="search.php">
                        <input type="text" class="form-control" placeholder="Search..." name="q"/>
                     </form>
                    </li>
                </ul>

                <ul class="page-head-elements pull-right">
                    <li>
                        <div class="informer informer-pulsate">5</div>
                        <a href="#" class="dropdown"><span class="fa fa-comments"></span></a>                        
                        <div class="popup">
                            <div class="list no-controls scroll" style="height: 300px;">
                                <a href="#" class="list-item">
                                    <div class="list-item-content">
                                        <h4>John Doe</h4>
                                        <p><img src="img/samples/users/user-30.jpg" class="img-circle pull-left"/> Lorem ipsum dolor sit amet, consectetur adipiscing elit?</p>
                                        <span class="date">15:54</span>
                                    </div>                                
                                </a>
                                <a href="#" class="list-item">
                                    <div class="list-item-content">
                                        <h4>Benedict Cumberbatch</h4>
                                        <p><img src="img/samples/users/ben.jpg" class="img-circle pull-left"/> Nulla non venenatis nisl, nec sodales dolor</p>
                                        <span class="date">12:01</span>
                                    </div>
                                </a>
                                <a href="#" class="list-item">
                                    <div class="list-item-content">
                                        <h4>Jonny Lee Miller</h4>
                                        <p><img src="img/samples/users/jonny.jpg" class="img-circle pull-left"/> Ut leo ante, sodales vitae semper</p>
                                        <span class="date">10:25</span>
                                    </div>
                                </a>
                                <a href="#" class="list-item">
                                    <div class="list-item-content">
                                        <h4>Lucy Liu</h4>
                                        <p><img src="img/samples/users/liu.jpg" class="img-circle pull-left"/> Maecenas non felis tincidunt, rhoncus risus...</p>
                                        <span class="date">10:18</span>
                                    </div>
                                </a>
                                <a href="#" class="list-item">
                                    <div class="list-item-content">
                                        <h4>Martin Freeman</h4>
                                        <p><img src="img/samples/users/martin.jpg" class="img-circle pull-left"/> Maecenas non felis tincidunt, rhoncus risus</p>
                                        <span class="date">9:32</span>
                                    </div>
                                </a>
                            </div>
                            <div class="popup-block tac"><a href="pages-mailbox-inbox.html">Show all messages</a></div>
                        </div>
                        <div class="informer informer-pulsate">5</div>
                    </li>
                    
                    <li><a href="#" class="page-sidebar-toggle"><span class="fa fa-tasks"></span></a></li>
                </ul>
                
            </div>