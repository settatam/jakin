<?
if($_POST['postit'] == 1001) {
	$firstname = mysql_escape_string($_POST['firstname']);
	$lastname = mysql_escape_string($_POST['lastname']);
	$email = mysql_escape_string($_POST['email']);
	$address = mysql_escape_string($_POST['address']);
	$city = mysql_escape_string($_POST['city']);
	$state = mysql_escape_string($_POST['state']);
	$province = mysql_escape_string($_POST['province']);
	$country = mysql_escape_string($_POST['country']);
	$description = mysql_escape_string($_POST['description']);
	$telephone = mysql_escape_string($_POST['telephone']);
	$mobile = mysql_escape_string($_POST['mobile']);
	$amount = mysql_escape_string($_POST['amount']);
	$occupation = mysql_escape_string($_POST['occupation']);
	
	$to = "seth.atam@gmail.com";
	
	$subject = "New Pledge Form Details";
	
	$message = "Dear Admin, A pledge Form has been filled with the following details:
	
	Firstname = $firstname
	Lastname = $lastname;
	Email = $email
	Address = $address
	City = $city
	State = $state
	Province = $province
	Country = $country
	Description = $description
	Telephone = $telephone
	Mobile = $mobile
	Amount = $amount
	Occupation = $occupation
	
	Thank You,
	
	Webmaster.";
	
	mail($to, $subject, $message);
	$done = "yes";
	
}
	
?>

<? $page_id = mysql_escape_string($_GET['pageid']); ?>
<? include 'header.php'; ?>
<? $y = mysql_query("SELECT * FROM posts WHERE long_id = '$page_id'"); ?>
<? $z = mysql_fetch_object($y); ?>
    <div class="container white" style="padding:0">
	  <div class="row" style="background-color: white">
      <? include 'leftl.php' ?>
       <div class="large-9 columns" style="margin-bottom: 15px;">
   		<h3 class="subheader">Make A Pledge</h3>
        <hr>
        <img src="img/subimage.jpg"/>
        <hr>
        <? if($done) { ?>
        <div data-alert class="alert-box">
  		Thank you for contacting us. A representative will contact you soon.
 		 <a href="#" class="close">&times;</a>
		</div>
        <? } ?>
        <h4 class="subheader">Thank you for choosing to support Jakin</h4>
        <h6> How can I support Jakin </h6>
        <p>Donate items  for jumble sales and charity</p>
        <p>Provide expertise, facility, material or financial sponsorship      and support for our projects</p>
        <p><strong><a href="volunteer.php?pageid=Become-A-Volunteer">Volunteer</a></strong> your      time, expertise  and service </p>
        <p>Help network for Individual, Ministry and corporate partners</p>
        <p>Co –brand, endorse or partner with us in proffering CSR solutions.</p>
        <p>Partner or collaborate with your NGO or network.</p>
       
        <form action="" method="post">
          <div class="row">
            <div class="large-11 columns">
              <h6>Fill the form below and click the donate button and we will contact you soon.</h6>
              <hr>
              <div class="row">
              <div class="large-7 columns"><label class="inline">Please accept my contribution in amount of</label></div>
              <div class="large-5 columns"><input name="amount" type="text" id="amount"/></div>
             
             
              </div>
               <div class="row"><div class="large-3 columns">
                  <label class="inline">Frequency</label>
                </div>
                <div class="large-2 columns"><label class="inline">Monthly</label><input name="Monthly" type="radio" value="monthly"></div>
                <div class="large-2 columns"><label class="inline">Quarterly</label><input name="Monthly" type="radio" value="quarterly"></div>
                <div class="large-2 columns"><label class="inline">Biannually</label><input name="Monthly" type="radio" value="biannually"></div>
                <div class="large-2 columns"><label class="inline">Annually</label><input name="Monthly" type="radio" value="annually"></div>
                <div class="large-1 columns"><label class="inline">Others</label><input name="Monthly" type="radio" value="others"></div>
                
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
                  <input name="email2" type="text" id="email" />
                </div>
              </div>
              <div class="row">
                <div class="large-3 columns">
                  <label class="inline">Contact Address*</label>
                </div>
                <div class="large-9 columns">
                  <textarea name="address"></textarea>
                </div>
              </div>
               <div class="row">
                <div class="large-3 columns">
                  <label class="inline">City*</label>
                </div>
                <div class="large-9 columns">
                  <input name="email2" type="text" id="email2" />
                </div>
              </div>
               <div class="row">
                <div class="large-3 columns">
                  <label class="inline">State*</label>
                </div>
                <div class="large-9 columns">
                  <input name="state" type="text" id="state" />
                </div>
              </div>
               <div class="row">
                <div class="large-3 columns">
                  <label class="inline">Province*</label>
                </div>
                <div class="large-9 columns">
                  <input name="email2" type="text" id="email2" />
                </div>
              </div>
               <div class="row">
                <div class="large-3 columns">
                  <label class="inline">Country*</label>
                </div>
                <div class="large-9 columns">
                  <input name="country" type="text" id="country" />
                </div>
              </div>
               <div class="row">
                <div class="large-3 columns">
                  <label class="inline">Telephone*</label>
                </div>
                <div class="large-9 columns">
                  <input name="telephone" type="text" id="telephone" />
                </div>
              </div>
               <div class="row">
                <div class="large-3 columns">
                  <label class="inline">Mobile Phone*</label>
                </div>
                <div class="large-9 columns">
                  <input name="mobile" type="text" id="mobile" />
                </div>
              </div>
             
              
              
              <div class="row">
                <div class="large-3 columns">
                  <label class="inline">Brief Description of yourself*<br>
                    <span>1,000 words or less</span></label>
                </div>
                <div class="large-9 columns">
                  <textarea name="description" id="description" placeholder="Brief text about yourself"></textarea>
                </div>
              </div>
            
          <div class="row">
            
              
                <div class="large-9 large-offset-3 columns">
                  <input name="postit" type="hidden" id="postit" value="1001">
                  <input class="button left radius success" value="Donate Now" type="submit"/>
                
            
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
 