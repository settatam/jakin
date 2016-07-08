<? $page_id = mysql_escape_string($_GET['pageid']); ?>
<? include 'header.php'; ?>
<? $y = mysql_query("SELECT * FROM posts WHERE long_id = '$page_id'"); ?>
<? $z = mysql_fetch_object($y); ?>
    <div class="container white" style="padding:0">
	  <div class="row" style="background: white;">
      <? include 'leftl.php' ?>
       <div class="large-9 columns" style="margin-bottom: 15px;">
   		<h3 class="subheader"><?=getTitle($page_id)?></h3>
        <hr>
        <img src="img/subimage.jpg"/>
        <hr>
        <p><strong>ADMIN STAFF</strong></p>
        <table border="1" cellspacing="0" cellpadding="0">
          <tr>
            <td width="132" valign="top"><br></td>
            <td width="275" valign="top"><p><strong>NAME</strong></p></td>
            <td width="319" valign="top"><p><strong>DESIGNATION</strong></p></td>
          </tr>
          <tr>
            <td width="132" valign="top"><img src="staff/Olubukola_Adebiyi.jpg" alt="Olubukola Adebiyi"></td>
            <td width="275" valign="top"><p>Mrs. Olubukola Adebiyi</p></td>
            <td width="319" valign="top"><p>President/CEO</p></td>
          </tr>
          <tr>
            <td width="132" valign="top"><p>&nbsp;</p></td>
            <td width="275" valign="top"><p>Mrs Tessy Ozobialu</p></td>
            <td width="319" valign="top"><p>Admin/HR Officer</p></td>
          </tr>
          <tr>
            <td width="132" valign="top"><p>&nbsp;</p></td>
            <td width="275" valign="top"><p>Mrs Abosede  Matanmi</p></td>
            <td width="319" valign="top"><p>Assistant Admin Officer </p></td>
          </tr>
          <tr>
            <td width="132" valign="top"><img src="staff/Ademola_Akinsowon.jpg" alt="Akinsowon Ademola"></td>
            <td width="275" valign="top"><p>Akinsowon Ademola</p></td>
            <td width="319" valign="top"><p>Admin Assistant </p></td>
          </tr>
          <tr>
            <td width="132" valign="top"><p><img src="staff/Lade_Oladokun.jpg"></p></td>
            <td width="275" valign="top"><p>Lade Oladokun</p></td>
            <td width="319" valign="top"><p>Motor Vehicle Officer (MVO)</p></td>
          </tr>
          <tr>
            <td width="132" valign="top"><p><img src="staff/Olamide_Ogunmila.jpg" alt="Ogunmila"></p></td>
            <td width="275" valign="top"><p>Miss Ogungbamila Olamide</p></td>
            <td width="319" valign="top"><p>Front Desk Officer</p></td>
          </tr>
          <tr>
            <td width="132" valign="top"><p>&nbsp;</p></td>
            <td width="275" valign="top"><p>Miss  Kojah Seyifunmi</p></td>
            <td width="319" valign="top"><p>Kitchen Officer</p></td>
          </tr>
          <tr>
            <td width="132" valign="top"><p>&nbsp;</p></td>
            <td width="275" valign="top"><p>Mrs. Kemi Olasupo </p></td>
            <td width="319" valign="top"><p>Child Minder</p></td>
          </tr>
          <tr>
            <td width="132" valign="top">&nbsp;</td>
            <td width="275" valign="top"><p>Mrs. Adebimpe Akintimehin-</p></td>
            <td width="319" valign="top"><p>Cleaner</p></td>
          </tr>
          <tr>
            <td width="132" valign="top"><p><img src="staff/Gabriel_Adewunmi.jpg" alt="gabriel akinwunmi"></p></td>
            <td width="275" valign="top"><p>Mr. Gabriel Akinwunmi</p></td>
            <td width="319" valign="top"><p>Security Officer</p></td>
          </tr>
        </table>
        <p><strong>ACCOUNT STAFF</strong></p>
        <table border="1" cellspacing="0" cellpadding="0">
          <tr>
            <td width="119" valign="top"><br>
              <strong>S/N</strong></td>
            <td width="296" valign="top"><p><strong>NAME</strong></p></td>
            <td width="216" valign="top"><p><strong>DESIGNATION</strong></p></td>
          </tr>
          <tr>
            <td width="119" valign="top"><p><img src="staff/Aro_Sanya_Adeboye.jpg"></p></td>
            <td width="296" valign="top"><p>Mr. Aro Sanya Adeboye<strong></strong></p></td>
            <td width="216" valign="top"><p>Account Officer<strong></strong></p></td>
          </tr>
          <tr>
            <td width="119" valign="top"><p><img src="staff/Bunmi_Shobowale.jpg"></p></td>
            <td width="296" valign="top"><p>Miss Shobowale Bunmi</p></td>
            <td width="216" valign="top"><p> Account Assistant</p></td>
          </tr>
        </table>
        <p><strong>PROJECT STAFF</strong></p>
        <table border="1" cellspacing="0" cellpadding="0">
          <tr>
            <td width="116" valign="top"><br></td>
            <td width="227" valign="top"><p><strong>NAME</strong></p></td>
            <td width="268" valign="top"><p><strong>DESIGNATION</strong></p></td>
          </tr>
          <tr>
            <td width="116" valign="top"><p><img src="staff/Mayokun_Akinlosotu.jpg"></p></td>
            <td width="227" valign="top"><p>Mr. Olumayokun Akinlosotu<strong></strong></p></td>
            <td width="268" valign="top"><p>Fresh Foundation Project (FFP) Manager </p></td>
          </tr>
          <tr>
            <td width="116" valign="top"><p><img src="staff/Akinosho_Olumide.jpg"></p></td>
            <td width="227" valign="top"><p>Mr. Akinosho Olumide<strong></strong></p></td>
            <td width="268" valign="top"><p>Project Officer<strong></strong></p></td>
          </tr>
          <tr>
            <td width="116" valign="top"><p><img src="staff/Patricia_Michael.jpg"></p></td>
            <td width="227" valign="top"><p>Miss Patricia Michael<strong></strong></p></td>
            <td width="268" valign="top"><p>Project Officer<strong></strong></p></td>
          </tr>
          <tr>
            <td width="116" valign="top"><p><img src="staff/Abiodun_Ogunwole.jpg" alt="Ogunwole Abiodun"></p></td>
            <td width="227" valign="top"><p>Mr. Ogunwole Abiodun<strong></strong></p></td>
            <td width="268" valign="top"><p>Project Officer<strong></strong></p></td>
          </tr>
          <tr>
            <td width="116" valign="top"><p>&nbsp;</p></td>
            <td width="227" valign="top"><p>Mr. Asokle John<strong></strong></p></td>
            <td width="268" valign="top"><p>Assistant project Officer<strong></strong></p></td>
          </tr>
          <tr>
            <td width="116" valign="top"><p><img src="staff/Doyin_Soyingbe.jpg"></p></td>
            <td width="227" valign="top"><p>Miss Soyingbe Adedoyin<strong></strong></p></td>
            <td width="268" valign="top"><p>Monitoring and Evaluation Officer (M&amp;E)<strong></strong></p></td>
          </tr>
          <tr>
            <td width="116" valign="top"><p><img src="staff/Tunde_Patrick.jpg"></p></td>
            <td width="227" valign="top"><p>Mr. Tunde Patrick<strong></strong></p></td>
            <td width="268" valign="top"><p>Monitoring and Evaluation Officer (M&amp;E)<strong></strong></p></td>
          </tr>
        </table>
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
