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
	$support = "";
	$capability = "";
	$passion = "";
	
	
	if($_POST['support']){
		foreach($_POST['support'] as $field => $value) {
		$support .= $value .", ";
		}
	}
	if($_POST['capabilty']){
		foreach($_POST['capabilty'] as $field => $value) {
		$capability .= $value .", ";
		}
	}
	
	if($_POST['passion']){
		foreach($_POST['passion'] as $field => $value) {
		$passion .= $value .", ";
		}
	}
	
	$to = "info@jakinministry.org";
	
	$subject = "New Volunteer Form Details";
	
	$message = "Dear Admin, A volunteer Form has been filled with the following details:
	
	Firstname = $firstname
	Lastname = $lastname;
	Email = $email
	Address = $address
	City = $city
	State = $state
	Country = $country
	Description = $description
	Telephone = $telephone
	Mobile = $mobile
	Amount = $amount
	Occupation = $occupation
	Areas of Capability: $capability
	Passion: $passion
	Key Focus Area of Support: $support
	
	
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
    <div class="container white" style="padding: 0">
	  <div class="row" style="background-color: white">
      <? include 'leftl.php' ?>
       <div class="large-9 columns" style="margin-bottom: 15px;">
   		<h3 class="subheader">Become A Volunteer</h3>
        <hr>
        <img src="img/subimage.jpg"/>
        <hr>
        <h4 class="subheader">Thank you for choosing to support Jakin        </h4>
        <p>Thank you for choosing for choosing to volunteer. <a href="pledge.php?pageid=Pledge-Form">Click Here to make a Financial Pledge</a>        </p>
        <form action="" method="post">
          <div class="row">
            <div class="large-11 columns">
          <h6>Fill the form below to volunteer and we will contact you soon.</h6>
              <hr>
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
                  <label class="inline">Contact Address*</label>
                </div>
                <div class="large-9 columns">
                  <textarea name="address" id="address"></textarea>
                </div>
              </div>
               <div class="row">
                <div class="large-3 columns">
                  <label class="inline">City*</label>
                </div>
                <div class="large-9 columns">
                  <input name="city" type="text" id="city" />
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
                  <label class="inline">Occupation</label>
                </div>
                <div class="large-9 columns">
                  <input name="occupation" type="text" id="occupation" />
                </div>
              </div>
              <div class="row">
              <div class="large-12 columns"><h6>Areas of Capability</h6><hr><p><strong>Choose as many as possible</strong></p>
              
              </div>
              </div>
              <div class="row"><div class="large-4 columns">
              <div class="small-1 columns"><label class="inline"><input name="capabilty[]" type="checkbox" value="Capacity Building Training"></label></div>
               <div class="small-11 columns"> <label class="inline">Capacity Building Training</label></div></div>
               <div class="large-4 columns">
              <div class="small-1 columns"><label class="inline"><input name="capabilty[]" type="checkbox" value="Vocational Skill Training"></label></div>
               <div class="small-11 columns"> <label class="inline">Vocational Skill Training</label></div></div>
               <div class="large-4 columns">
              <div class="small-1 columns"><label class="inline"><input name="capabilty[]" type="checkbox" value="Counselling"></label></div>
               <div class="small-11 columns"> <label class="inline">Counselling</label></div></div>
               <div class="large-4 columns">
              <div class="small-1 columns"><label class="inline"><input name="capabilty[]" type="checkbox" value="Networking"></label></div>
               <div class="small-11 columns"> <label class="inline">Networking</label></div></div>
               <div class="large-4 columns">
              <div class="small-1 columns"><label class="inline"><input name="capabilty[]" type="checkbox" value="Food Mobilisation"></label></div>
               <div class="small-11 columns"> <label class="inline">Food Mobilisation</label></div></div>
               <div class="large-4 columns">
              <div class="small-1 columns"><label class="inline"><input name="capabilty[]" type="checkbox" value="Material Mobilisation"></label></div>
               <div class="small-11 columns"> <label class="inline">Material Mobilisation</label></div></div>
               <div class="large-4 columns">
              <div class="small-1 columns"><label class="inline"><input name="capabilty[]" type="checkbox" value="Community Mobilsation"></label></div>
               <div class="small-11 columns"> <label class="inline">Community Mobilsation</label></div></div>
               <div class="large-4 columns">
              <div class="small-1 columns"><label class="inline"><input name="capabilty[]" type="checkbox" value="Office Administration"></label></div>
               <div class="small-11 columns"> <label class="inline">Office Administration</label></div></div>
               <div class="large-4 columns">
              <div class="small-1 columns"><label class="inline"><input name="capabilty[]" type="checkbox" value="Accounting and Auditing"></label></div>
               <div class="small-11 columns"> <label class="inline">Accounting and Auditing</label></div></div>
               <div class="large-4 columns">
              <div class="small-1 columns"><label class="inline"><input name="capabilty[]" type="checkbox" value="Project Management"></label></div>
               <div class="small-11 columns"> <label class="inline">Project Management</label></div></div>
               <div class="large-4 columns">
              <div class="small-1 columns"><label class="inline"><input name="capabilty[]" type="checkbox" value="Human Resources"></label></div>
               <div class="small-11 columns"> <label class="inline">Human Resources</label></div></div><div class="large-4 columns">
              <div class="small-1 columns"><label class="inline"><input name="capabilty[]" type="checkbox" value="Event Planning"></label></div>
               <div class="small-11 columns"> <label class="inline">Event Planning</label></div></div><div class="large-4 columns">
              <div class="small-1 columns"><label class="inline"><input name="capabilty[]" type="checkbox" value="Advocacy"></label></div>
               <div class="small-11 columns"> <label class="inline">Advocacy</label></div></div><div class="large-4 columns">
              <div class="small-1 columns"><label class="inline"><input name="capabilty[]" type="checkbox" value="Advertisement"></label></div>
               <div class="small-11 columns"> <label class="inline">Advertisement</label></div></div><div class="large-4 columns">
              <div class="small-1 columns"><label class="inline"><input name="capabilty[]" type="checkbox" value="Media and Communication"></label></div>
               <div class="small-11 columns"> <label class="inline">Media and Communication</label></div></div><div class="large-4 columns">
              <div class="small-1 columns"><label class="inline"><input name="capabilty[]" type="checkbox" value="Proposal Writing"></label></div>
               <div class="small-11 columns"> <label class="inline">Proposal Writing</label></div></div>
               <div class="large-4 columns">
              <div class="small-1 columns"><label class="inline"><input name="capabilty[]" type="checkbox" value="Catering"></label></div>
               <div class="small-11 columns"> <label class="inline">Catering</label></div></div>
               <div class="large-4 columns">
              <div class="small-1 columns"><label class="inline"><input name="capabilty[]" type="checkbox" value="Decorations"></label></div>
               <div class="small-11 columns"> <label class="inline">Decorations</label></div></div>
               <div class="large-4 columns">
              <div class="small-1 columns"><label class="inline"><input name="capabilty[]" type="checkbox" value="Graphic Designing"></label></div>
               <div class="small-11 columns"> <label class="inline">Graphic Designing</label></div></div>
               <div class="large-4 columns">
              <div class="small-1 columns"><label class="inline"><input name="capabilty[]" type="checkbox" value="Printing"></label></div>
               <div class="small-11 columns"> <label class="inline">Printing</label></div></div>
               <div class="large-4 columns">
              <div class="small-1 columns"><label class="inline"><input name="capabilty[]" type="checkbox" value="Real Estate Agency"></label></div>
               <div class="small-11 columns"> <label class="inline">Real Estate Agency</label></div></div>
               <div class="large-4 columns">
              <div class="small-1 columns"><label class="inline"><input name="capabilty[]" type="checkbox" value="Sales and Marketing"></label></div>
               <div class="small-11 columns"> <label class="inline">Sales and Marketing</label></div></div>
               <div class="large-4 columns">
              <div class="small-1 columns"><label class="inline"><input name="capabilty[]" type="checkbox" value="Comedy / MC / Compere"></label></div>
               <div class="small-11 columns"> <label class="inline">Comedy / MC / Compere</label></div></div>
               <div class="large-4 columns">
              <div class="small-1 columns"><label class="inline"><input name="capabilty[]" type="checkbox" value="Acting"></label></div>
               <div class="small-11 columns"> <label class="inline">Acting</label></div></div>
               <div class="large-4 columns">
              <div class="small-1 columns"><label class="inline"><input name="capabilty[]" type="checkbox" value="Singing"></label></div>
               <div class="small-11 columns"> <label class="inline">Singing</label></div></div>
               <div class="large-4 columns">
              <div class="small-1 columns"><label class="inline"><input name="capabilty[]" type="checkbox" value="Venue Provision"></label></div>
               <div class="small-11 columns"> <label class="inline">Venue Provision</label></div></div>
               <div class="large-4 columns">
              <div class="small-1 columns"><label class="inline"><input name="capabilty[]" type="checkbox" value="Website Building"></label></div>
               <div class="small-11 columns"> <label class="inline">Website Building</label></div></div>
               <div class="large-4 columns">
              <div class="small-1 columns"><label class="inline"><input name="capabilty[]" type="checkbox" value="Information Technology"></label></div>
               <div class="small-11 columns"> <label class="inline">Information Technology</label></div></div>
               <div class="large-4 columns">
              <div class="small-1 columns"><label class="inline"><input name="capabilty[]" type="checkbox" value="Others"></label></div>
               <div class="small-11 columns"> <label class="inline">Others</label></div></div>
              </div>
              
          <div class="row">
              <div class="large-12 columns"><h6>Areas of Passion</h6><hr><p><strong>Choose as many as possible</strong></p></div>
            <div class="large-6 columns">
              <div class="small-1 columns"><label class="inline"><input name="passion[]" type="checkbox" value="Orphans and Vulnerable Children"></label></div>
               <div class="small-11 columns"> <label class="inline">Orphans and Vulnerable Children</label></div></div>
            <div class="large-6 columns">
              <div class="small-1 columns"><label class="inline"><input name="passion[]" type="checkbox" value="Widows"></label></div>
               <div class="small-11 columns"> <label class="inline">Widows</label></div></div>
            <div class="large-6 columns">
              <div class="small-1 columns"><label class="inline"><input name="passion[]" type="checkbox" value="People Living with HIV/AIDS"></label></div>
               <div class="small-11 columns"> <label class="inline">People Living with HIV/AIDS</label></div></div>
            <div class="large-6 columns">
              <div class="small-1 columns"><label class="inline"><input name="passion[]" type="checkbox" value="Less Privileged Families"></label></div>
               <div class="small-11 columns"> <label class="inline">Less Privileged Families</label></div></div>
            <div class="large-6 columns">
              <div class="small-1 columns"><label class="inline"><input name="passion[]" type="checkbox" value="Single Parents"></label></div>
               <div class="small-11 columns"> <label class="inline">Single Parents</label></div></div>
            <div class="large-6 columns">
              <div class="small-1 columns"><label class="inline"><input name="passion[]" type="checkbox" value="Street Rallies"></label></div>
               <div class="small-11 columns"> <label class="inline">Street Rallies</label></div></div>
            <div class="large-6 columns">
              <div class="small-1 columns"><label class="inline"><input name="passion[]" type="checkbox" value="Youths (In and Out of School)"></label></div>
               <div class="small-11 columns"> <label class="inline">Youths (In and Out of School)</label></div></div>
            <div class="large-6 columns">
              <div class="small-1 columns"><label class="inline"><input name="passion[]" type="checkbox" value="Community Work / Outreaches"></label></div>
            <div class="small-11 columns"> <label class="inline">Community Work / Outreaches</label></div></div>
              </div>
              
             <div class="row">
              <div class="large-12 columns">
                <h6>KEY FOCUS AREA OF SUPPORT</h6>
                <hr><p><strong>Choose as many as possible</strong></p></div>
              <div class="large-6 columns">
              <div class="small-1 columns"><label class="inline"><input name="support[]" type="checkbox" id="support" value="Education"></label></div>
               <div class="small-11 columns"> <label class="inline">Education</label></div></div>
               <div class="large-6 columns">
              <div class="small-1 columns"><label class="inline"><input name="support[]" type="checkbox" id="support" value="Economic Empowerment"></label></div>
               <div class="small-11 columns"> <label class="inline">Economic Empowerment</label></div></div>
               <div class="large-6 columns">
              <div class="small-1 columns"><label class="inline"><input name="support[]" type="checkbox" id="support" value="Training"></label></div>
               <div class="small-11 columns"> <label class="inline">Training</label></div></div>
               <div class="large-6 columns">
              <div class="small-1 columns"><label class="inline"><input name="support[]" type="checkbox" id="support" value="Welfare"></label></div>
               <div class="small-11 columns"> <label class="inline">Welfare</label></div></div>
               <div class="large-6 columns">
              <div class="small-1 columns"><label class="inline"><input name="support[]" type="checkbox" id="support" value="Health"></label></div>
               <div class="small-11 columns"> <label class="inline">Health</label></div></div>
               <div class="large-6 columns">
              <div class="small-1 columns"><label class="inline"><input name="support[]" type="checkbox" id="support" value="Monthly Widows Group Meeting"></label></div>
               <div class="small-11 columns"> <label class="inline">Monthly Widows Group Meeting</label></div></div>
               <div class="large-6 columns">
              <div class="small-1 columns"><label class="inline"><input name="support[]" type="checkbox" id="support" value="Monthly Children's Club Meeting"></label></div>
               <div class="small-11 columns"> <label class="inline">Monthly Children's Club Meeting</label></div></div>
            <div class="large-6 columns">
              <div class="small-1 columns"><label class="inline"><input name="support[]" type="checkbox" id="support" value="Monthly HIV/AIDs meeting"></label></div>
            <div class="small-11 columns"> <label class="inline">Monthly HIV/AIDs meeting</label></div></div>
            <div class="large-6 columns">
              <div class="small-1 columns"><label class="inline"><input name="support[]" type="checkbox" id="support" value="Jumble Sales"></label></div>
            <div class="small-11 columns"> <label class="inline">Jumble Sales</label></div></div>
          </div>
            
          <div class="row">
          
              
                <div class="large-9 large-offset-3 columns">
                  <input name="postit" type="hidden" id="postit" value="1001">
                  <input class="button left radius success" value="Volunteer Now" type="submit"/>
                
            
            </div>
            <div class="large-4 columns"></div>
          </div>
        </form>
       
        
        <h6>&nbsp;</h6>
       </div>
    	
	    
        
      </div>
	</div>
    </div>
    <div class="container footer">
   		<div class="row">
   			<div class="large-5 columns">
   				<div class="info-padding services">
  					 <h4 class="dark" style="font-weight: normal">Feel the need to Help?</h4>
  						 <p class="dark">In order to reach our goals and help people in our communities as we will like to, We need your help.</p>
   						<p><a href="#" class="button success">Fill A Pledge Form Now</a></p>
   						<p><a href="#">Other ways you can support us &rarr;</a></p>
   				</div>
  			 </div>
             <div class="large-7 columns">
           	   <div class="learn-links">
                <h6>Meet Us?</h6>
               	   <p class="dark">If you want to talk to us, Call us at: <br /> <strong>234 (0) 803 358 1224</strong>
                    <br /> <strong>234 (0) 802 673 9766</strong>
                   </p>
                	<h6 class="dark">STAY CONNECTED</h6>
                    <a class="socialIcons"  href="#"><img src="social/facebook-32.png"></a>
                    <a class="socialIcons"  href="#"><img src="social/twitter-32.png"></a>
                    <a class="socialIcons"  href="#"><img src="social/youtube-32.png"></a>
                    <a class="socialIcons"  href="#"></a>
            	</div>
                <div class="learn-links" id="newsSubscribe">
                <h6>CONNECT</h6>
                	<p class="dark">Subscribe for our newsletter and find out all the latest projects we are embarking on
                    
                    </p>
                    <form>
                    <div class="row collapse">
                    <div class="small-9 columns"><input type="text" placeholder="Enter Your email" name="email" id="email"></div>
                    <div class="small-3 columns"><button class="small secondary button postfix">Connect</button></div>
                    </div>
                    </form>
            	</div>
             </div>
  		 </div>
   </div>
   </div>

    <!-- End Content -->


    <!-- Footer -->

      <div class="container bottom-footer">
		<div class="row">
			<div class="twelve columns">
				<p>&copy; 2012-2013 Jakin NGO. All rights reserved. <a href="#">Terms of Use</a>.</p>
				<div class="fb-like hide-for-small" data-href="https://www.facebook.com/" data-send="false" data-layout="button_count" data-width="450" data-show-faces="true"></div>
			</div>
		</div>
	</div>

    <!-- End Footer -->


  <script>
  document.write('<script src=' +
  ('__proto__' in {} ? 'js/vendor/zepto' : 'js/vendor/jquery') +
  '.js><\/script>')
  </script>
  
  <script src="js/foundation.min.js"></script>
  <!--
  
  <script src="js/foundation/foundation.js"></script>
  
  <script src="js/foundation/foundation.alerts.js"></script>
  
  <script src="js/foundation/foundation.clearing.js"></script>
  
  <script src="js/foundation/foundation.cookie.js"></script>
  
  <script src="js/foundation/foundation.dropdown.js"></script>
  
  <script src="js/foundation/foundation.forms.js"></script>
  
  <script src="js/foundation/foundation.joyride.js"></script>
  
  <script src="js/foundation/foundation.magellan.js"></script>
  
  <script src="js/foundation/foundation.orbit.js"></script>
  
  <script src="js/foundation/foundation.placeholder.js"></script>
  
  <script src="js/foundation/foundation.reveal.js"></script>
  
  <script src="js/foundation/foundation.section.js"></script>
  
  <script src="js/foundation/foundation.tooltips.js"></script>
  
  <script src="js/foundation/foundation.topbar.js"></script>
  
  -->
  
  <script>
    $(document).foundation();
  </script>
</body>
</html>
