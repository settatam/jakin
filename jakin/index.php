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
			
			<div class="profile_pic">
          <img src="img/ceo.jpg" class="profile_pic_image">
            </div>
            <div class="profile_caption text-center">
            <span>Olubukola Adebiyi, <br>
            </span><br>
            PRESIDENT / CEO</div>
			
		</div>
        <div class="large-8 columns text-center">
        <h5 class="grayexpand">
        JAKIN IS 10</h5>
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
            <li><a href="#">View All</a></li>
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
			 $a = mysql_query("SELECT page_title, post_id, post_session, post FROM posts WHERE post_id = '39' ORDER BY post_id DESC LIMIT 1");
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
<? include 'footer.php' ?>