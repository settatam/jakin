<?
session_start();
include 'vegetables.php';
$page_id = mysql_escape_string($_GET['pageid']);
$sub = mysql_escape_string($_GET['sub']);
$sid = mysql_escape_string($_GET['sid']);
$t = mysql_query("SELECT post FROM posts where post_id = '$page_id'") or die (mysql_error());
$n = mysql_num_rows($t);
$u = mysql_fetch_object($t);
$post = $u->post;
include 'vegetables.php';
include 'functions.php';
$post_session = getPostCode($uid);
$page_id = mysql_escape_string($_REQUEST['id']);
if($_POST['submit']) {
	$id = clean($_POST['title']);
	$title = mysql_escape_string($_POST['title']);
	$editor = mysql_escape_string($_POST['editor']);
	$feature = mysql_escape_string($_POST['featured']);
	mysql_query("UPDATE posts SET post = '$editor' WHERE long_id = '$page_id'"); 
	$message = "Your page has been updated";
}
?>

 <!-- Header and Nav -->
<? include 'header.php' ?>
<link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/2.9.0/build/menu/assets/skins/sam/menu.css" />
<link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/2.9.0/build/button/assets/skins/sam/button.css" />
<link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/2.9.0/build/container/assets/skins/sam/container.css" />
<link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/2.9.0/build/editor/assets/skins/sam/editor.css" />
<script type="text/javascript" src="http://yui.yahooapis.com/2.9.0/build/yahoo-dom-event/yahoo-dom-event.js"></script>
<script type="text/javascript" src="http://yui.yahooapis.com/2.9.0/build/animation/animation-min.js"></script>
<script type="text/javascript" src="http://yui.yahooapis.com/2.9.0/build/element/element-min.js"></script>
<script type="text/javascript" src="http://yui.yahooapis.com/2.9.0/build/container/container-min.js"></script>
<script type="text/javascript" src="http://yui.yahooapis.com/2.9.0/build/menu/menu-min.js"></script>
<script type="text/javascript" src="http://yui.yahooapis.com/2.9.0/build/button/button-min.js"></script>
<script type="text/javascript" src="http://yui.yahooapis.com/2.9.0/build/editor/editor-min.js"></script>

<style>
    .yui-skin-sam .yui-toolbar-container .yui-toolbar-editcode span.yui-toolbar-icon {
        background-image: url( assets/html_editor.gif );
        background-position: 0 1px;
        left: 5px;
    }
    .yui-skin-sam .yui-toolbar-container .yui-button-editcode-selected span.yui-toolbar-icon {
        background-image: url( assets/html_editor.gif );
        background-position: 0 1px;
        left: 5px;
    }
    .editor-hidden {
        visibility: hidden;
        top: -9999px;
        left: -9999px;
        position: absolute;
    }
    textarea {
        border: 0;
        margin: 0;
        padding: 0;
   }
</style>
<style>
.yui-toolbar-group-insertitem {
    *width: auto;
}
</style>
  <!-- End Header and Nav -->
<div class="row">

 <? include 'lefty.php' ?>

  <!-- Main Body ... Configured to pull first to the left on smaller screens -->

<div class="large-9 columns">

<div class="row">

<h4>Create A  Page</h4>
<hr> 
</div>

  <div class="row">
    <form action="" method="post" class="custom yui-skin-sam">
      <div class="row">
        <div class="large-2 columns">
          <label class="inline">Title</label>
        </div>
        <div class="large-10 columns">
          <input name="title" type="text" id="title"/>
        </div>
      </div>
      <?
	  if($page_id == 1) {
	  ?>
      <div class="row">
        <div class="large-2 columns">
          <label class="inline">Choose Category</label>
        </div>
        <div class="large-10 columns">
          <input name="title" type="text" id="title"/>
        </div>
      </div>
    <?  } ?>
      <div class="row">
       <div class="large-2 columns">
          <label class="inline">&nbsp;</label>
        </div>
        <div class="large-10 columns">
          <textarea name="editor" cols="" rows="" id="editor"><?=$post?></textarea>
        </div>
      </div>
      <div class="row">
       <div class="large-2 columns">
          <label class="inline">&nbsp;</label>
        </div>
        <div class="large-10 columns">
          <label class="inline"><a href="#" data-reveal-id="myModal">Upload Pictures for Gallery</a></label>
        </div>
      </div>
      <div class="row">
       <div class="large-10 large-offset-2 columns">
          <label class="inline">
            <input name="featured" type="checkbox" value="1"> 
            &nbsp;&nbsp; Add Gallery</label>
        </div>
      </div>
      
      <div class="row">
        <div class="large-12 columns">
          <input name="submit" type="submit" value="Edit Page" class="success button right">
          <input name="subcat" type="hidden" id="sub" value="1001" />
        </div>
      </div>
    </form>
  </div>
</div>
</div>
 <!-- Nav Sidebar -->
        <!-- Main Feed -->
    <!-- This has been source ordered to come first in the markup (and on small devices) but to be to the right of the nav on larger screens -->

    <!-- This is source ordered to be pulled to the left on larger screens -->
  
            
 
 
  <!-- Right Sidebar -->
  <!-- On small devices this column is hidden -->


  <!-- Footer -->
 <script>

(function() {
    var Dom = YAHOO.util.Dom,
        Event = YAHOO.util.Event;
    
    var myConfig = {
        height: '300px',
        width: '620px',
        animate: true,
        dompath: true,
		handleSubmit: true,
        focusAtStart: true
    };

    var state = 'off';
    YAHOO.log('Set state to off..', 'info', 'example');

    YAHOO.log('Create the Editor..', 'info', 'example');
    var myEditor = new YAHOO.widget.Editor('editor', myConfig);
    myEditor.on('toolbarLoaded', function() {
        var codeConfig = {
            type: 'push', label: 'Edit HTML Code', value: 'editcode'
        };
        YAHOO.log('Create the (editcode) Button', 'info', 'example');
        this.toolbar.addButtonToGroup(codeConfig, 'insertitem');
        
        this.toolbar.on('editcodeClick', function() {
            var ta = this.get('element'),
                iframe = this.get('iframe').get('element');

            if (state == 'on') {
                state = 'off';
                this.toolbar.set('disabled', false);
                YAHOO.log('Show the Editor', 'info', 'example');
                YAHOO.log('Inject the HTML from the textarea into the editor', 'info', 'example');
                this.setEditorHTML(ta.value);
                if (!this.browser.ie) {
                    this._setDesignMode('on');
                }

                Dom.removeClass(iframe, 'editor-hidden');
                Dom.addClass(ta, 'editor-hidden');
                this.show();
                this._focusWindow();
            } else {
                state = 'on';
                YAHOO.log('Show the Code Editor', 'info', 'example');
                this.cleanHTML();
                YAHOO.log('Save the Editors HTML', 'info', 'example');
                Dom.addClass(iframe, 'editor-hidden');
                Dom.removeClass(ta, 'editor-hidden');
                this.toolbar.set('disabled', true);
                this.toolbar.getButtonByValue('editcode').set('disabled', false);
                this.toolbar.selectButton('editcode');
                this.dompath.innerHTML = 'Editing HTML Code';
                this.hide();
            }
            return false;
        }, this, true);

        this.on('cleanHTML', function(ev) {
            YAHOO.log('cleanHTML callback fired..', 'info', 'example');
            this.get('element').value = ev.html;
        }, this, true);
        
        this.on('afterRender', function() {
            var wrapper = this.get('editor_wrapper');
            wrapper.appendChild(this.get('element'));
            this.setStyle('width', '100%');
            this.setStyle('height', '100%');
            this.setStyle('visibility', '');
            this.setStyle('top', '');
            this.setStyle('left', '');
            this.setStyle('position', '');

            this.addClass('editor-hidden');
        }, this, true);
    }, myEditor, true);
    myEditor.render();

})();
</script>

<? include 'footer.php' ?>