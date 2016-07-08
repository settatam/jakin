 <footer class="row">
    <div class="large-12 columns">
      <hr />
      <div class="row">
        <div class="large-5 columns">
          <p>&copy; Xtreme Web Solutions.</p>
        </div>
        <div class="large-7 columns">
        
        </div>
      </div>
    </div>
  </footer>
 
 <div id="myModal" class="reveal-modal">
  <a class="close-reveal-modal">&#215;</a>
  <div class="row">
   <div class="large-12 columns">
     <!-- Upload Form Starts Here -->
     <div align="center">
       <!-- This is the upload button, you can change the ID to any variable of your choice but also change it in the JS and CSS files-->
       <div id="vpb_upload_button">Upload Image</div>
       <br clear="all" />
       <br clear="all" />
       <center>
         <div class="vpb_main_demo_wrapper" align="center">
           <!-- Main Wrapper -->
           <div id="vpb_uploads_error_displayer"></div>
           <!-- Error Message Displayer -->
           <div id="vpb_uploads_displayer"></div>
           <!-- Success Message (Files) Displayer -->
           <br clear="all" />
         </div>
       </center>
     </div>
   </div>
 </div>
 <div class="row" style="display: block;" id="enterdescription">
 <h4 id="titlename">Image File Name</h4>
 	<form>
 	<div class="row">
        <div class="large-2 columns">
          <label class="inline">Description</label>
        </div>
        <div class="large-10 columns">
          <input name="description" type="text" id="description"/>
          <input name="vpb_image_name" type="hidden" id="vpb_image_name"  value=""/>
          <input name="post_session" type="hidden" value="<?=$post_session?>" id="post_session"/>
        </div>
      </div>
      <div class="row">
        <div class="large-12 columns">
          <a class="success button right" href="javascript:void(0);" onclick="postDescription();">Enter Description</a>
          <input name="subcat" type="hidden" id="sub" value="1001" />
        </div>
      </div>
    </form>
 </div>
</div>

  <script>
  document.write('<script src=js/vendor/' +
  ('__proto__' in {} ? 'zepto' : 'jquery') +
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
