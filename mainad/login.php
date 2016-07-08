<?
session_start();
include 'vegetables.php';
if($_POST['mypost'] == 1001) {
	$email = mysql_escape_string($_POST['login']);
	$password = md5($_POST['password']);
	$k = "SELECT * FROM admin WHERE username = '$email'  AND password = '$password' LIMIT 1";
	$q = mysql_query("SELECT * FROM admin WHERE username = '$email'  AND password = '$password' LIMIT 1");
	$n = mysql_num_rows($q);
	
	if($n == 1){
	$r = mysql_fetch_object($q);
	$_SESSION['uid'] = $r->admin_id;
	setcookie("uid", $r->admin_id, time()+3600);
	if($_POST['remember']){
		setcookie("uid", $sid, time()+1360000);
	}
	$_SESSION['firstname'] = $r->firstname;
	$_SESSION['lastname'] = $r->lastname;
	$page = $_SESSION['callback'];
	header("location: index.php");
			}else{
	$e = "Your Username or Password is incorrect";
			}
}
?>
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
                
        <script type="text/javascript" src="js/plugins/jquery-validation/jquery.validate.min.js"></script>

        <script type="text/javascript" src="js/plugins.js"></script>        
        <script type="text/javascript" src="js/demo.js"></script>
        <script type="text/javascript" src="js/actions.js"></script>        
        
    </head>
    <body>
        
        <div class="page-container">
            
            <div class="page-content page-content-default">

                <div class="block-login">
                    <div class="block-login-logo"></div>                    
                    <div class="block-login-content">
                        <h1>Sign in</h1>
                        <? if($e) { ?>
						<p style="color: red;">Your username or Password is incorrect</p>
						<? } ?>
                        <form id="signinForm" method="post" action="">
                            
                        <div class="form-group">                        
                            <input type="text" name="login" class="form-control" placeholder="Your login/e-mail" value=""/>
                        </div>
                        <div class="form-group">                        
                            <input type="password" name="password" class="form-control" placeholder="Your password" value=""/>
                        </div>
                        <div class="pull-left">
                            <div class="checkbox">
                                <label><input name="remember" type="checkbox" id="remember" value="1"/> Keep me signed in</label>
                            </div>
                        </div>                                        
                        <div class="pull-right">
                            <a href="#">Forgot password?</a><input name="mypost" type="hidden" value="1001">
                        </div>

                        <button class="btn btn-primary btn-block" type="submit">Sign in</button>                                        
                        
                        </form>
                        <p class="tac">&nbsp;</p>

                        <div class="pull-left" style="width: 45%;"></div>
                        <div class="pull-right" style="width: 45%;"></div>

                        <div class="sp"></div>
                        <div class="pull-left">
                            © All Rights Reserved Xtreme Web Solutions 2014
                        </div>
                    </div>

                </div>
                
            </div>
        </div>
        
        <script type="text/javascript">
        $("#signinForm").validate({
		rules: {
			login: "required",
			password: "required"
		},
		messages: {
			firstname: "Please enter your login",
			lastname: "Please enter your password"			
		}
	});            
        </script>
        
    </body>
</html>
