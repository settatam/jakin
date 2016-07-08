<? $page_id = mysql_escape_string($_GET['id']); 
if($page_id) {$a = " WHERE project_id = '$page_id'";}
?>

<? include 'header.php'; ?>
<? $y = mysql_query("SELECT * FROM posts WHERE subcat = '27' ORDER BY post_id DESC"); 


	
?>

<?  ?>
    <div class="container white" style="padding:0">

	  <div class="row" style="background: white;">
      <? include 'leftl.php' ?>
       <div class="large-9 columns" style="margin-bottom: 15px;">
   		<h3 class="subheader">Articles </h3>
   		<hr />
       <? $n = mysql_num_rows($y); 
	   if($n < 1) { ?>
	     <p>There are no articles at this time. Please try again later</p>
	   <? } else {
	  
		while($z = mysql_fetch_object($y)){?>
        <div class="row">
        <h6><?=stripslashes($z->page_title)?></h6>
        <p><?=stripslashes($z->post)?></p></div><hr>
				   
		   
	<? }?>
      
  </div>
 
    <? } ?>	
	    
        
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
                    <a class="socialIcons"  href="#"><img src="social/facebook-32.png" /></a>
                    <a class="socialIcons"  href="#"><img src="social/twitter-32.png" /></a>
                    <a class="socialIcons"  href="#"><img src="social/youtube-32.png" /></a>
                    <a class="socialIcons"  href="#"></a>
            	</div>
                <div class="learn-links" id="newsSubscribe">
                <h6>CONNECT</h6>
                	<p class="dark">Subscribe for our newsletter and find out all the latest projects we are embarking on
                    
                    </p>
                    <form>
                    <div class="row collapse">
                    <div class="small-9 columns"><input type="text" placeholder="Enter Your email" name="email" id="email" /></div>
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
  
  
  <script>
    $(document).foundation();
  </script>
</body>
</html>
