<? $page_id = mysql_escape_string($_GET['pageid']); ?>
<? include 'header.php'; ?>
<? $y = mysql_query("SELECT * FROM posts WHERE long_id = '$page_id'"); ?>
<? $z = mysql_fetch_object($y); ?>
    <div class="container white" style="padding:0">
	  <div class="row" style="background-color: white">
      <? include 'leftl.php' ?>
       <div class="large-9 columns" style="margin-bottom: 15px;">
   		<h3 class="subheader">Contact Us</h3>
        <hr>
        <img src="img/subimage.jpg"/>
        <hr>
        <h4 class="subheader">Our Contact Address</h4>
        
        <p><strong>Address:</strong> 51, Iwaya road,
        
        Yaba, Lagos.<br />
        <strong>Phone:</strong> 01-8173006, 01-8522936, 234-803-358-1224, 234-802-673-9766</p>
<p>
        <strong>Email: </strong>info@jakinministry.org , jakinministry@yahoo.com</p>
     
        <p><iframe width="600" height="450" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=51%20Iwaya%20Road%2C%20Lagos%20Mainland%2C%20Lagos%2C%20Nigeria&key=AIzaSyDfdm1kmWkMNIpF7Uuyw5PU1gVbHfoKroE"></iframe></p>
        <p><a href="volunteer.php?pageid=Pledge-Form">Click Here to Become A Volunteer</a></p>
        <p> <a href="pledge.php?pageid=Pledge-Form">Click Here to make a Financial Pledge</a>        </p>
        <form action="" method="post">
          <div class="row">
            <div class="large-11 columns">
          <h6>Fill the form below to CONTACT US.</h6>
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
                  <input name="email2" type="text" id="email2" />
                </div>
              </div>
              <div class="row">
                <div class="large-3 columns">
                  <label class="inline">Comment</label>
                </div>
                <div class="large-9 columns">
                  <textarea name="occupation" id="occupation"></textarea>
                </div>
              </div>
          <div class="row">
          
              
                <div class="large-9 large-offset-3 columns">
                  <input name="postit" type="hidden" id="postit" value="1001">
                  <input class="button left radius success" value="Contact Us" type="submit"/>
                
            
            </div>
            <div class="large-4 columns"></div>
          </div>
        </form>
       
        
        <h6>&nbsp;</h6>
       </div>
    	
	    </div>
        
      </div>
	</div>
<? include 'footer.php' ?>