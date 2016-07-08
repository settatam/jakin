<?
session_start();
include 'vegetables.php';
$transID = mysql_real_escape_string($_GET['td']);
	
	$q = mysql_query("SELECT firstname, lastname, email, phone, amount FROM donations WHERE transactionID = '$transID' LIMIT 1");
	$n = mysql_num_rows($q);
	
	if($n < 1) {
	
	header("location: donate.php");
	exit;
	
	}
	
	$r = mysql_fetch_object($q);
	
	
?>

<? $page_id = mysql_escape_string($_GET['pageid']); ?>
<? include 'header.php'; ?>

    <div class="container white" style="padding:0">
	  <div class="row" style="background-color: white">
      <? include 'leftl.php' ?>
       <div class="large-9 columns" style="margin-bottom: 15px;">
   		<h3 class="subheader">Payment Pending.</h3>
   		<hr>
     
        <h4 class="subheader">Thank you for choosing to support Jakin </h4>
        <form action="https://cipg.stanbicibtcbank.com/MerchantServices/MakePayment.aspx" method="post">
        <input type="hidden" name="mercId" value="04817"> 

 		<input type="hidden" name="currCode" value="566"> 

 		<input type="hidden" name="amt" value="<?=$r->amount?>"> 

 		<input type="hidden" name="orderId" value="<?=$transID?>"> 

 		<input type="hidden" name="prod" value="Donation to Jakin NGO"> 

 		<input type="hidden" name="email" value="<?=$r->email?>"> 

 
        
          <div class="row">
            <div class="large-11 columns">
          <h6>Your payment is pending. Please try again later.</h6>
            <!-- <table width="60%">
             	<tr>
                	<td><strong>First Name</strong></td>
                	<td><?=$r->firstname?></td>
                </tr>
                <tr>
                	<td><strong>Last Name</strong></td>
                	<td><?=$r->lastname?></td>
                </tr>
                <tr>
                	<td><strong>Email</strong></td>
                	<td><?=$r->email?> </td>
                </tr>
                <tr>
                	<td><strong>Phone</strong></td>
                	<td><?=$r->phone?> </td>
                </tr>
                 <tr>
                	<td><strong>Amount</strong></td>
                	<td>NGN<?=$r->amount?> </td>
                </tr>
             </table> -->
              
              
               
              
             
              
              
              
              
          <div class="row">
            
              
                <div class="large-9 large-offset-3 columns">
                  <input name="postit" type="hidden" id="postit" value="1001">
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
 