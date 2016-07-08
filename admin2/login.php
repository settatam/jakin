<?
session_start();
include 'vegetables.php';
include 'functions.php';
if($_POST['postit'] == 1001){
	$email = mysql_escape_string($_POST['email']);
	$password = md5($_POST['password']);
	$b = mysql_query("SELECT admin_id FROM admin where username = '$email' AND password = '$password' LIMIT 1") or die(mysql_error()) ;
	$c = mysql_num_rows($b);
	if($c == 1) { 
	$_SESSION['uid'] = 1;
	$_SESSION['admin'] = 1;
	if($_POST['remember']){
		setcookie("uid", 1, time()+1360000);
		setcookie("admin", 1, time()+1360000);
	}
	header("location: index.php");
			}else{
	$e = "Your Username or Password is incorrect";
			}
}
include("header_login.php");
?>
 <!-- Header and Nav -->
<script src="lib/jquery1.5.js" type="text/javascript" charset="utf-8"></script>
<div class="row">
  <div class="large-8 columns">
    <h4 class="subheader">Login to Admin</h4>
    <hr />
    <form action="" method="post">
      <div class="row">
        <div class="large-12 columns"></div>
      </div>
      <h6>OR login with your username and password:</h6>
      <hr />
      <? if($e) {?>
      <div class="row ">
        <div class="large-12 columns">
          <p><span class="describe" style="color: red;">
            <?=$e?>
          </span></p>
        </div>
      </div>
      <? }?>
      <div class="row">
        <div class="large-3 columns">
          <label class="inline"><strong>Username</strong></label></div>
        <div class="large-9 columns">
          <input name="email" type="text" id="email" value="<?=$email?>"/>
        </div>
      </div>
      <div class="row">
        <div class="large-3 columns">
          <label class="inline"><strong>Password</strong></label>
        </div>
        <div class="large-9 columns">
          <input name="password" type="password" id="password" />
        </div>
      </div>
      <div class="row">
        <div class="large-9 large-offset-3 columns" style="margin-bottom: 10px;">
          <label for="checkbox1">
            <input type="checkbox" id="checkbox1" name="remember" value="Yes" /> Remember me on this computer</label>
        </div>
      </div>
      <div class="row">
        <div class="large-9 large-offset-3 columns">
          <input name="postit" type="hidden" id="postit" value="1001" />
          <input class="button radius small success" value="Login" type="submit"/>
        </div>
      </div>
      <div class="row">
        <div class="large-9 large-offset-3 columns">
          <label class="inline"><a href="forgot.php">Change Password?</a></label>
        </div>
      </div>
    </form>
  </div>
</div>
<!-- Right Sidebar -->
  <!-- On small devices this column is hidden -->


  <!-- Footer -->

<? include 'footer.php' ?>