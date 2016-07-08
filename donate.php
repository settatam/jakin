<?
session_start();
include 'vegetables.php';
if($_POST['postit'] == 1001) {
	$firstname = mysql_escape_string($_POST['firstname']);
	$lastname = mysql_escape_string($_POST['lastname']);
	$email = mysql_escape_string($_POST['email']);
	$phone = mysql_escape_string($_POST['phone']);
	$amount = mysql_escape_string($_POST['amount']);
	$transID = mysql_escape_string($_POST['transID']);
	
	$q = mysql_query("INSERT INTO donations (firstname, lastname, email, phone, transactionID, amount) values ('$firstname', '$lastname', '$email', '$phone', '$transID', '$amount')");
	
	header("location: donation.php?td=$transID");
	exit;
	
	//$to = "info@jakinministry.org";
	
	
}
	
?>

<? $page_id = mysql_escape_string($_GET['pageid']); ?>
<? include 'header.php'; ?>
<? $transID=$_SESSION['transID']=rand(1000000000,9999999999); ?>
<? $y = mysql_query("SELECT * FROM posts WHERE long_id = '$page_id'"); ?>
<? $z = mysql_fetch_object($y); ?>
    <div class="container white" style="padding:0">
	  <div class="row" style="background-color: white">
      <? include 'leftl.php' ?>
       <div class="large-9 columns" style="margin-bottom: 15px;">
   		<h3 class="subheader">Make A Pledge</h3>
        <hr>
        <hr>
        <? if($done) { ?>
        <div data-alert class="alert-box">
  		Thank you for contacting us. A representative will contact you soon.
 		 <a href="#" class="close">&times;</a>
		</div>
        <? } ?>
        <h4 class="subheader">Thank you for choosing to support Jakin </h4>
        <form action="" method="post">
        
          <div class="row">
            <div class="large-11 columns">
          <h6>Fill the form below and click the donate button and we will contact you soon.</h6>
              <hr>
              <div class="row">
              <div class="large-7 columns"><label class="inline">Please accept my contribution in amount of</label></div>
              <div class="large-5 columns"><input name="amount" type="text" id="amount" placeholder="5000"/></div>
             
             
              </div>
              <div class="row">&nbsp;</div>
               
              <div class="row">
                <div class="large-3 columns">
                  <label class="inline">First Name*</label>
                </div>
                <div class="large-9 columns">
                  <input name="firstname" type="text" id="firstname"/>
                </div>
              </div>
             
              <div class="row">
                <div class="large-3 columns">
                  <label class="inline">Last Name*</label>
                </div>
                <div class="large-9 columns">
                  <input name="lastname" type="text" id="lastname" />
                </div>
              </div>
              <div class="row">
                <div class="large-3 columns">
                  <label class="inline">Email*</label>
                </div>
                <div class="large-9 columns">
                  <input name="email" type="text" id="email" />
                </div>
              </div>
              <div class="row">
                <div class="large-3 columns">
                  <label class="inline">Phone*</label>
                </div>
                <div class="large-9 columns">
                  <input name="phone" type="text" id="phone" />
                </div>
              </div>
              <div class="row"><input name="transID" type="hidden" value="<?=$transID?>">
            
              
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
 