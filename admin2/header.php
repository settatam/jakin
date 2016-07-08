<!DOCTYPE html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8" />

  <!-- Set the viewport width to device width for mobile -->
  <meta name="viewport" content="width=device-width" />

  <title>Welcome to Admin</title>

  <!-- Included CSS Files -->
  
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/foundation.css">
  <link rel="stylesheet" href="css/styles.css">

  <script src="../js/vendor/custom.modernizr.js"></script>
  <script src="js/jquery_1.5.2.js"></script>
  <script src="js/ajaxupload.3.5.js"></script>
  <script src="js/uploader.js"></script>
 <script type="text/javascript" language="javascript">
function confirmDelete(delUrl) {
  if (confirm("Are you sure you want to delete")) {
    document.location = delUrl;
  }
}
</script>

</head>
<body>
  <div class="row">
    <div class="large-12 columns">
      <div class="panel">
        <h1>Welcome to Admin        </h1>
        <p><a href="index.php">Home </a> | <a href="reports.php">Projects Manager</a> | <a href="category.php">Category Manager</a> | <a href="logout.php">Logout</a> | <a href="index.php">Pages Manager</a></p>
      </div>
    </div>
 </div>