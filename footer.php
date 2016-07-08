<div class="container footer">
   		<div class="row">
   			<div class="large-5 columns">
   				<div class="info-padding services">
  					 <h4 class="dark" style="font-weight: normal">Feel the need to Help?</h4>
  						 <p class="dark">In order to reach our goals and help people in our communities as we will like to, We need your help.</p>
   						<p><a href="pledge.php?pageid=Pledge-Form" class="button success">Fill A Pledge Form Now</a>
   						<br /><a href="support.php?pageid=Donate-Now" class="button secondary">Make an online donation &rarr;</a></p>
   				</div>
  			 </div>
             <div class="large-7 columns">
           	   <div class="learn-links">
                <h6>Meet Us?</h6>
               	   <p class="dark">If you want to talk to us, Call us at: <br /> <strong>234 (0) 803 358 1224</strong>
                    <br /> <strong>234 (0) 802 673 9766</strong>
                    <br /> <strong>Email:</strong> info@jakinministry.org , jakinministry@yahoo.com
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
                  
                    <div class="row collapse">
                    <div class="small-9 columns"><input type="text" placeholder="Enter Your email" name="subscribe" id="subscribe"></div>
                    <div class="small-3 columns"><a class="small secondary button postfix" href="javascript:void(0) "onclick="newsletter();">Connect</a></div>
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
   <script src="js/foundation/foundation.orbit.js"></script>
     <script src="js/foundation/foundation.reveal.js"></script>
  <!--
  
  <script src="js/foundation/foundation.js"></script>
  
  <script src="js/foundation/foundation.alerts.js"></script>
  
  <script src="js/foundation/foundation.clearing.js"></script>
  
  <script src="js/foundation/foundation.cookie.js"></script>
  
  <script src="js/foundation/foundation.dropdown.js"></script>
  
  <script src="js/foundation/foundation.forms.js"></script>
  
  <script src="js/foundation/foundation.joyride.js"></script>
  
  <script src="js/foundation/foundation.magellan.js"></script>
  
 
  
  <script src="js/foundation/foundation.placeholder.js"></script>
  

  
  <script src="js/foundation/foundation.section.js"></script>
  
  <script src="js/foundation/foundation.tooltips.js"></script>
  
  <script src="js/foundation/foundation.topbar.js"></script>
  
  -->
  
  <script>
    $(document).foundation();
  </script>
  <script>
  function hala() {
	  window.location = "pages.php?pageid="+$("#practice").val();
  }
  function newsletter() {
	  var email = $("#subscribe").val();
	 if(validateEmail(email)){
		 $.ajax({
 		url:'em.php?em='+email,
  		dataType: 'html',
		success: function(data) {
			$('#subscribe').val("");
			$('#myNewsletter').foundation('reveal', 'open');
		}
	});
	 
	 }else{
		 alert("Your email address is not correct");
	 }
  }
  function validateEmail($email) {
  var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
  if( !emailReg.test( $email ) ) {
    return false;
  } else {
    return true;
  }
}
function addQual(pre) {
	$("#"+pre).show("fast");
}
  </script>
  <div id="myNewsletter" class="reveal-modal">
  <h2 style="color: #222">Thank you for Subscribing.</h2>
  <p class="lead">Your request to subscribe to our newsletter is successful. You now have access to premium content from Jakin N.G.O.</p>
  <a class="close-reveal-modal">&#215;</a>
</div>
</body>
</html>
