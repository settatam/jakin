<? include 'header.php'; ?>
<!-- Content Slider -->

      <div class="container" style="padding: 0;">
			<div class="orbit-container" id="topslideshow">
		<ul id="featured" data-orbit>
		  <li data-orbit-slide="headline-1" class="slide1">
		    <div class="row">
            <div class="large-4 large-offset-1 columns">
            <h1>Reaching Widows</h1>
            <p>Learn how Jakin Provides Assistance to Widows</p>
            <a href="#" class="button success">Learn More</a>
            </div>
            </div>
		  </li>
		  <li data-orbit-slide="headline-2" class="slide2">
		    <div class="row">
            <div class="large-4 large-offset-1 columns">
             <h1 style=" font-weight: bold;"> Making the world better for  Children</h1>
            <p>Learn how Jakin Provides Assistance to Children</p>
            </div>
		  </li>
          <li data-orbit-slide="headline-3" class="slide3">
		    <div class="row">
            <div class="large-4 large-offset-1 columns">
             <h1> Making the world better for the Children</h1>
            <p>Learn how Jakin Provides Assistance to Children</p>
            </div>
		  </li>
            <li data-orbit-slide="headline-4" class="slide4">
		    <div class="row">
            <div class="large-4 large-offset-1 columns">
             <h1> Dress A Child For School Project</h1>
            <p>Learn how Jakin Provides Assistance to Children</p>
            </div>
		  </li>
		</ul>
</div>
              </div>


      <div class="container whites" style="padding-bottom: 0">
    <div class="row">
    <div class="large-12 columns">
    <div class="large-4 columns">
              <img src="img/president.png"/>
              
              </div>
			  <div class="large-5 columns">
              <h3 class="dark">Welcome to Jakin N.G.O</h3>
              <p class="lead dark">Dear Friend! On behalf of the entire Jakin Team I welcome you to our world. Jakin N.G.O desires a world devoid of poverty and it&rsquo;s consequences. We believe solution is at hand when vulnerable groups are empowered with necessary skills ... </p>
              <p class="lead dark"><a href="welcome.php">Read More</a></p>
              </div>
              
              <div class="large-3 columns">
            <div class="panel">
            <h6>LATEST NEWS</h6>
            <ul class="side-nav">
            <?
			$k = mysql_query("SELECT page_title, post_id FROM posts WHERE subcat = '12' ORDER BY post_id DESC LIMIT 3");
			while($l = mysql_fetch_object($k)) { ?> 
            <li><a href="newsdetail.php?pid=<?=$l->post_id?>"><?=substr(stripslashes($l->page_title),0, 50)?> ... </a></li><hr style="margin: 0.5675em 0">
            <? } ?>
            <li><a href="#" class="button small radius success">View All</a></li>
            </ul>
            </div>
            </div>
				
			</div>
		</div>
    </div>
    <div class="container whiter">
	  <div class="row">
       <div class="large-12 columns" style="margin-bottom: 15px;">
       <div class="full">
   			 <h6>FEATURED PROJECT</h6>
             </div>
    	</div>
	    <div class="large-5 columns">
        <ul class="clearing-thumbs clearing-feature" data-clearing>
        <li class ="clearing-featured-img"><a href="images/featured1.jpg"><img src="images/dressachild.jpg" data-caption="May 27th 2013 Children’s day party for 313 Orphan’s and Vulnerable Children"/></a>
        <div class="img-text">Dress A Child For School Project</div></li>
        </ul>
        </div>
        <div class="large-7 columns">
        <h3 class="dark">Quick View of Things We Do ...</h3>
        <p class="lead dark">Jakin N.G.O regularly executes projects. Our projects may be Jakin Initiated or externally (donor) funded</p>
        <div class="row">
         <div class="large-4 columns">
         <div class="full bottompadded">
         <ul class="clearing-thumbs clearing-feature" data-clearing>
              <li class="clearing-featured-img"><a href="images/malaria.jpg"><img src="images/malaria.jpg" data-caption="TB COMMUNITY MOBILIZATION AND SENSITIZATION EXERCISE IN ABULE ONI-POMO COMMUNITY , MAINLAND LG (MAY 2013)"/></a>
              <div class="img-text" style="width: 100%">Malaria Social Mobilisation in Pedro Community</div></li>
         </ul>
         </div>
         </div>
         <div class="large-4 columns">
         <div class="full bottompadded">
         <ul class="clearing-thumbs clearing-feature" data-clearing>
              <li class="clearing-featured-img"><a href="images/dress.jpg"><img src="images/dress.jpg" data-caption="Wick making training during Samaritan Platform Support group meeting (May 2013 edition)"/></a>
              <div class="img-text" style="width: 100%">Dress A Child for School</div></li>
         </ul>
         </div>
         </div>
         <div class="large-4 columns">
         <div class="full bottompadded">
         <ul class="clearing-thumbs clearing-feature" data-clearing>
              <li class="clearing-featured-img"><a href="images/fashion.jpg"><img src="images/fashion.jpg" data-caption="Fresh Foundation Group Work - June 16th, 2012"/></a>
              <div class="img-text" style="width: 100%">Fashion Show by Dress A Child Participants</div></li>
              <li class="hide"><a href="images/fresh2.jpg"><img src="images/fresh2.jpg" data-caption="Fresh Foundation Group Work - June 16th, 2012"/></a></li>
              <li class="hide"><a href="images/fresh3.jpg"><img src="images/fresh3.jpg" data-caption="Fresh Foundation Group Work - June 16th, 2012"/></a></li>
              <li class="hide"><a href="images/fresh4.jpg"><img src="images/fresh4.jpg" data-caption="Fresh Foundation Group Work - June 16th, 2012"/></a></li>
              <li class="hide"><a href="images/fresh4.jpg"><img src="images/fresh5.jpg" data-caption="Fresh Foundation Group Work - June 16th, 2012"/></a></li>
              
         </ul>
         </div>
         </div>
 
         </div>
        </div>
      </div>
	</div>
    <div class="container whites">
		<div class="row">
			<div class="large-8 columns">
            <div class="row">
            <div class="large-6 columns">
            <h6>UPCOMING EVENTS</h6>
             <?
			 $a = mysql_query("SELECT page_title, post_id, post_session, post FROM posts WHERE page_id = '3' ORDER BY post_id DESC LIMIT 1");
			 $b = mysql_fetch_object($a)?>
           	
         	 <h5 class="dark" style="font-weight: bold;"><?=stripslashes($b->page_title)?></h5>
       
       		<? $t = mysql_query("SELECT * FROM gallery WHERE post_session = '".$b->post_session."'"); 
			$n = mysql_num_rows($t);
			?>

		<? while($u = mysql_fetch_object($t)) { ?>
    		<div class="full"><a href="newsdetail.php?pid=<?=$b->post_id?>"><img src="images/airfresh.jpg"></a></div>
		<? }?>
    		<div class="row"><div class="large-12 columns" style="font-size: 14px; line-height: 20px;"><?=substr(stripslashes($b->post), 0, 103)?> ...</div></div>
            <p style="margin-top: 10px;"><a href="newsdetail.php?pid=<?=$b->post_id?>">Read More</a></p>
			<a href="events.php" class="button small radius">View All Upcoming Events</a>
           
           </div>
           
           <div class="large-6 columns">
            <h6>SAMARITAN PLATFORM - urgent needs</h6>
             <?
			 $a = mysql_query("SELECT page_title, post_id, post_session, post FROM posts WHERE subcat = '23' ORDER BY post_id desc LIMIT 1");
			 $b = mysql_fetch_object($a)?>
           	
         	 <h5 class="dark" style="font-weight: bold;"><?=stripslashes($b->page_title)?></h5>
       
       		<? $t = mysql_query("SELECT * FROM gallery WHERE post_session = '".$b->post_session."'"); 
			$n = mysql_num_rows($t);
			?>

		<? while($u = mysql_fetch_object($t)) { ?>
    		<div class="full"><a href="newsdetail.php?pid=<?=$b->post_id?>"><img src="admin/uploaded_files/<?=$u->picture?>.jpg"></a></div>
		<? }?>
    		<div class="row"><div class="large-12 columns" style="font-size: 14px; line-height: 20px;"><?=substr(stripslashes($b->post), 0, 103)?> ...</div></div>
            <p style="margin-top: 10px;"><a href="newsdetail.php?pid=<?=$b->post_id?>">Read More</a></p>
			<a href="pledge.php?pageid=Pledge-Form" class="button small radius">DONATE NOW</a>
           
           </div>
           <div style="clear: left;"></div>
            <div class="large-12 columns right">
             <a href="#">View All Upcoming Events &rarr;</a>
             </div>
			</div>
            </div>
            <div class="large-4 columns">
            <div class="panel"><h6><a href="#">Success Stories</a></h6>
            <?
			$g = mysql_query("SELECT post, post_id, page_title, post_session from posts WHERE post_id = '23' LIMIT 1");
			$h = mysql_fetch_object($g);
			?>
            <img src="admin/uploaded_files/<?=galleryImage($h->post_session)?>.jpg">
           <div class="row"><div class="large-12 columns"><?=substr(stripslashes($h->post), 0, 103)?> ...</div></div>
            <a href="newsdetail.php?pid=<?=$h->post_id?>">Read More</a>
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
   						<p><a href="pledge.php?pageid=Pledge-Form" class="button success">Fill A Pledge Form Now</a></p>
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
