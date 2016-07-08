<?
include 'vegetables.php';
if($_POST['postit'] == 1001) {
	$firstname = mysql_escape_string($_POST['firstname']);
	$lastname = mysql_escape_string($_POST['lastname']);
	$email = mysql_escape_string($_POST['email']);
	$phone = mysql_escape_string($_POST['phone']);
	$amount = mysql_escape_string($_POST['amount']);
	$transID = mysql_escape_string($_POST['transID']);
	
	$q = mysql_query("SELECT firstname, lastname, email, phone, amount FROM donations WHERE transactionID = '$transID' LIMIT 1");
	$n = mysql_num_rows($q);
	
	if($n < 1) {
	
	header("location: donate.php");
	exit;
	
	}
	
	$r = mysql_fetch_object($q);
	
}
	
?>

<? $page_id = mysql_escape_string($_GET['pageid']); ?>
<? include 'header.php'; ?>

    <div class="container white" style="padding:0">
	  <div class="row" style="background-color: white">
      <? include 'leftl.php' ?>
       <div class="large-9 columns" style="margin-bottom: 15px;">
   		<h3 class="subheader">Make A Pledge</h3>
        <hr>
        <hr>
     
        <h4 class="subheader">Thank you for choosing to support Jakin </h4>
        <form action="" method="post">
        
          <div class="row">
            <div class="large-11 columns">
          <h6>Your donation summary.</h6>
              <hr>
              
              <div class="row">&nbsp;</div>
               
              <div class="row">
                <div class="large-3 columns">
                  <label class="inline">First Name*</label>
                </div>
                <div class="large-9 columns">
                 <?=$r->firstname?> 
                </div>
              </div>
             
              <div class="row">
                <div class="large-3 columns">
                  <label class="inline">Last Name*</label>
                </div>
                <div class="large-9 columns">
                 <?=$r->lastname?> 
                </div>
              </div>
              <div class="row">
                <div class="large-3 columns">
                  <label class="inline">Email*</label>
                </div>
                <div class="large-9 columns">
                 <?=$r->email?> 
                </div>
              </div>
              <div class="row">
                <div class="large-3 columns">
                  <label class="inline">Phone*</label>
                </div>
                <div class="large-9 columns">
                 <?=$r->phone?> 
                </div>
              </div>
              <div class="row">
                <div class="large-3 columns">
                  <label class="inline">Amount*</label>
                </div>
                <div class="large-9 columns">
                 <?=$r->amount?> 
                </div>
              </div>
              <div class="row">
            
              
                <div class="large-9 large-offset-3 columns">
                  <input name="postit" type="hidden" id="postit" value="1001">
                  <input class="button left radius success" value="Continue" type="submit"/>
                
            
            </div>
            <div class="large-4 columns"></div>
          </div>
        </form>
       
        
        <h6>&nbsp;</h6>
       </div>
    	
	    
        
      </div>
	</div>
</div>
<?
include 'footer.php';
?>
 