<? include 'header.php'; ?>
<!-- Content Slider -->

		<div class="orbit-container">	
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


      <div class="container whites" style="padding-bottom: 15px;">
    <div class="row">
    <div class="large-12 columns">

			  <div class="large-8 columns">
    <h4 class="subheader" style="color: #09C; padding-bottom: 10px;">Welcome to Jakin N.G.O</h4>
		<div class="large-4 columns">
			
		
          <img src="img/ceo.jpg" class="border" style="height: 200px;">
          
          
            <div class="profile_caption text-center">
            <span>Olubukola Adebiyi, <br>
            </span><br>
            PRESIDENT / CEO</div>
			
		</div>
        <div class="large-8 columns text-center">
        <h5 class="grayexpand">
        JAKIN IS 11</h5>
			<blockquote class="text-centered">
            <p>Just like a mustard seed, the vision of JAKIN started on October 12th 2003, today it has grown into a massive tree providing succor to vulnerable groups in Nigeria and across Africa.</p>
            <p><a href="jakinis10.php">READ MORE</a></p>
			</blockquote>
		
			
		</div>
       
        </div>
              
              <div class="large-4 columns">
            <div class="panel">
            <h6>LATEST NEWS</h6>
            <ul class="side-nav">
            <?
			$k = mysql_query("SELECT page_title, post_id FROM posts WHERE subcat = '12' ORDER BY post_id DESC LIMIT 4");
			while($l = mysql_fetch_object($k)) { ?> 
            <li><a href="newsdetail.php?pid=<?=$l->post_id?>"><?=substr(stripslashes($l->page_title),0, 50)?> ... </a></li><hr style="margin: 0.5675em 0">
            <? } ?>
            <li><a href="news.php">View All</a></li>
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
        <li class ="clearing-featured-img">
        <? 
		$f=mysql_query("SELECT post_id, page_title, image FROM posts WHERE page_id = 50 AND subcat = 1 order by post_id DESC LIMIT 1");
		$g = mysql_fetch_object($f);
		?>
        <a href="images/featured1.jpg"><img src="admin/uploaded_files/<?=$g->image?>.jpg" data-caption="<?=$g->page_title?>"/></a>
        <div class="img-text"><?=$g->page_title?></div></li>
        </ul>
        </div>
        <div class="large-7 columns">
        <h3 class="dark">Quick View of Things We Do ...</h3>
        <p class="lead dark">Jakin N.G.O regularly executes projects. Our projects may be Jakin Initiated or externally (donor) funded</p>
        <?
        $k=mysql_query("SELECT post_id, page_title, image FROM posts WHERE page_id = 50 AND subcat = 2 order by post_id DESC LIMIT 3");
		
		?>
        <div class="row">
        <? while($h = mysql_fetch_object($k)){ ?>
         <div class="large-4 columns">
         <div class="full bottompadded">
         <ul class="clearing-thumbs clearing-feature" data-clearing>
              <li class="clearing-featured-img"><a href="<?=$h->image?>"><img src="admin/uploaded_files/<?=$h->image?>.jpg" data-caption="<?=$h->page_title?>"/></a>
              <div class="img-text" style="width: 100%"><?=$h->page_title?></div></li>
         </ul>
         </div>
         </div>
         <? } ?>
 
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
			 $a = mysql_query("SELECT page_title, post_id, post_session, post FROM posts WHERE subcat = '30' ORDER BY post_id DESC LIMIT 1");
			 $b = mysql_fetch_object($a)?>
           	
         	 <h5 class="dark" style="font-weight: bold;"><?=stripslashes($b->page_title)?></h5>
       
       		<? $t = mysql_query("SELECT * FROM gallery WHERE post_session = '".$b->post_session."' LIMIT 1"); 
			$n = mysql_num_rows($t);
			?>

		<? while($u = mysql_fetch_object($t)) { ?>
    		<div class="full"><a href="newsdetail.php?pid=<?=$b->post_id?>"><img src="admin/uploaded_files/<?=$u->picture?>.jpg"></a></div>
		<? }?>
    		<div class="row"><div class="large-12 columns" style="font-size: 14px; line-height: 20px;"><?=substr(stripslashes($b->post), 0, 103)?> ...</div></div>
            <p style="margin-top: 10px;"><a href="newsdetail.php?pid=<?=$b->post_id?>">Read More</a></p>
			<a href="events.php" class="button small radius">View All Upcoming Events</a>
           
           </div>
           
           <div class="large-6 columns">
            <h6>SAMARITAN PLATFORM - Urgent needs</h6>
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
			<p><a href="pledge.php?pageid=Pledge-Form" class="button success">Fill A Pledge Form Now</a>
   			<br /><a href="http://jakinministry.org/support.php?pageid=Donate-Now" class="button secondary">Make an Online Donation &rarr;</a></p>
            
           
           </div>
           <div style="clear: left;"></div>
			</div>
            </div>
            <div class="large-4 columns">
            <div class="panel"><h6><a href="#">Success Stories</a></h6>
            <?
			$g = mysql_query("SELECT post, post_id, page_title, post_session from posts WHERE subcat = '13' ORDER BY post_id DESC LIMIT 1");
			$h = mysql_fetch_object($g);
			?>
            <img src="admin/uploaded_files/<?=galleryImage($h->post_session)?>.jpg">
           <div class="row"><div class="large-12 columns"><?=substr(stripslashes($h->post), 0, 103)?> ...</div></div>
            <a href="newsdetail.php?pid=<?=$h->post_id?>">Read More</a>
            </div>
            </div>
		</div>
</div>
<? include 'footer.php' ?>