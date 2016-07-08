<? $page_id = mysql_escape_string($_GET['pageid']); ?>
<? include 'header.php'; ?>
<? $y = mysql_query("SELECT * FROM posts WHERE long_id = '$page_id'"); ?>
<? $z = mysql_fetch_object($y); ?>
    <div class="container white" style="padding: 15px 0">
	  <div class="row" style="background: white">
      <? include 'leftl.php' ?>
       <div class="large-9 columns" style="margin-bottom: 15px;">
   		<h3 class="subheader"><?=getTitle($page_id)?></h3>
        <hr>
        <img src="img/subimage.jpg"/>
        <hr>
        <p>Thank you for choosing to support Jakin</p>
        <h6> How can I support Jakin </h6><br />
        <ul>
        <li>Donate items  for jumble sales and charity</li>
        <li>Provide expertise, facility, material or financial sponsorship      and support for our projects</li>
        <li><strong><a href="support.php?pageid=Become-A-Volunteer">Volunteer</a></strong> your      time, expertise  and service </li>
        <li>Help network for Individual, Ministry and corporate      partners.</li>
        <li>Co –brand, endorse or partner with us in proffering CSR      solutions.</li>
        <li>Partner or collaborate with your NGO or network.</li>
        </ul>
        <form action="" method="post">
          <div class="row">
            <div class="large-8 columns">
              <h5>Please fill the Form below to make a Pledge. Fill the form and click the donate button and we will contact you soon.</h5>
              <div class="row">
              <div class="large-8 columns"><label class="inline">Please accept my contribution in amount of</label></div>
              <div class="large-3 columns"><input name="" type="text"/></div>
             
             
              </div>
               <div class="row"><div class="large-3 columns">
                  <label class="inline">Frequency</label>
                </div>
                <div class="large-2 columns"><label class="inline">Monthly</label><input name="Monthly" type="checkbox" value="Daily"></div>
                <div class="large-2 columns"><label class="inline">Quarterly</label><input name="Monthly" type="checkbox" value="Daily"></div>
                <div class="large-2 columns"><label class="inline">Biannually</label><input name="Monthly" type="checkbox" value="Daily"></div>
                <div class="large-2 columns"><label class="inline">Annually</label><input name="Monthly" type="checkbox" value="Daily"></div>
                <div class="large-1 columns"><label class="inline">Others</label><input name="Monthly" type="checkbox" value="Daily"></div>
                
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
                  <input name="email2" type="text" id="email2" />
                </div>
              </div>
              <div class="row">
                <div class="large-3 columns">
                  <label class="inline">Contact Address*</label>
                </div>
                <div class="large-9 columns">
                  <textarea></textarea>
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
                  <input name="email2" type="text" id="email2" />
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
                  <input name="email2" type="text" id="email2" />
                </div>
              </div>
               <div class="row">
                <div class="large-3 columns">
                  <label class="inline">Telephone*</label>
                </div>
                <div class="large-9 columns">
                  <input name="email2" type="text" id="email2" />
                </div>
              </div>
               <div class="row">
                <div class="large-3 columns">
                  <label class="inline">Mobile Phone*</label>
                </div>
                <div class="large-9 columns">
                  <input name="email2" type="text" id="email2" />
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
            </div>
            <div class="large-4 columns"></div>
          </div>
          <div class="row">
            <div class="large-8 columns">
              <div class="row"></div>
              <div class="row"></div>
              <div class="row buttons">
                <div class="large-12 columns">
                  <input name="postit" type="hidden" id="postit" value="1001">
                  <input class="button right radius" value="Donate Now" type="submit"/>
                </div>
              </div>
            </div>
            <div class="large-4 columns"></div>
          </div>
        </form>
        <p>&nbsp;</p>
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
