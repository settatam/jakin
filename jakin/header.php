<? include 'vegetables.php'; ?>
<? include 'functions.php'; ?>
<!DOCTYPE html>
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8" />

  <!-- Set the viewport width to device width for mobile -->
  <meta name="viewport" content="width=device-width" />

  <title>Welcome to JAKIN N.G.O ::: <?=$title?></title>

  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/foundation.css">
  
  <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
<link rel="icon" href="/favicon.ico" type="image/x-icon">

  <script src="js/vendor/custom.modernizr.js"></script>
  <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-42466866-1', 'jakinministry.org');
  ga('send', 'pageview');

</script>
</head>
<body>

<div class="container whites" style="padding:25px 0">
	<div class="row">
	<div class="large-3 columns" id="logo"><img src="img/logo.png" title="Welcome to JakinNGO"/></div>
    <div class="large-2 large-offset-5 columns" style="padding-top: 15px;">
    				<a class="socialIcons"  href="https://www.facebook.com/groups/125318704677/"><img src="social/facebook-32.png"></a>
                    <a class="socialIcons"  href="https://twitter.com/jakinministry"><img src="social/twitter-32.png"></a>
                    <a class="socialIcons"  href="#"><img src="social/youtube-32.png"></a>
    </div>
</div>
</div>

<!-- Navigation -->
<div class="container" style="padding: 0; background-color: #006600">
<div class="row">
  <nav class="top-bar">
  
  <!--  <ul class="title-area">
       Title Area 
      <li class="name">
        <h1>
          <a href="#">
            Top Bar Title
          </a>
        </h1>
      </li>
      <li class="toggle-topbar menu-icon"><a href="#"><span>menu</span></a></li>
    </ul> -->
 
    <section class="top-bar-section">
      <!-- Right Nav Section -->
      <ul class="left">
      <li class="divider"></li>
      <li>
      <a href="index.php">Home</a>
      </li>
        <li class="divider"></li>
        <li class="has-dropdown">
          <a href="#">About Us</a>
          <ul class="dropdown"> 
            <?=getSubs(4, "aboutus")?>
          </ul>
        </li>
        <li class="divider"></li>
        <li class="has-dropdown"><a href="#">Projects</a>
        <ul class="dropdown"> 
            <?=getSubs(1, "projects")?>
          </ul>
          </li>
        <li class="divider"></li>
        <li>
          <a href="gallery.php">Photo Gallery</a>
          
        </li>
        <li class="divider"></li>
        <li class="has-dropdown"><a href="#">Support</a>
        	<ul class="dropdown">
            <?=getSubs(6, "support")?>
            </ul>
            </li>
        <li class="divider"></li>
        <li class="has-dropdown"><a href="#">Communicate</a>
        <ul class="dropdown">
            <?=getSubs(5, "communicate")?>
            </ul>
            </li>
        <li class="divider"></li>
      </ul>
    </section>
  </nav>
  </div>
 </div>
  
 
  <!-- End Top Bar -->