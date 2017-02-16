<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>News Aggregator</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300italic,400italic,600,600italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Crete+Round' rel='stylesheet' type='text/css'>
<link href="<?php echo url();?>/user/css/bootstrap.css" rel="stylesheet">
<link href="<?php echo url();?>/user/css/bootstrap-responsive.css" rel="stylesheet">
<link href="<?php echo url();?>/user/css/style.css" rel="stylesheet">
<link href="<?php echo url();?>/user/css/flexslider.css" type="text/css" media="screen" rel="stylesheet"  />
<link href="<?php echo url();?>/user/css/jquery.fancybox.css" rel="stylesheet">
<link href="<?php echo url();?>/user/css/cloud-zoom.css" rel="stylesheet">

<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
<!-- fav -->
<link rel="shortcut icon" href="assets/ico/favicon.html">
</head>
<body>
<!-- Header Start -->
@include('user.blocks.header')
<!-- Header End -->

<div id="maincontainer">
  
  @include('user.pages.latest')

</div>
<!-- Footer -->
@include('user.blocks.footer')
<!-- javascript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="<?php echo url();?>/user/js/jquery.js"></script>
<script src="<?php echo url();?>/user/js/bootstrap.js"></script>
<script src="<?php echo url();?>/user/js/respond.min.js"></script>
<script src="<?php echo url();?>/user/js/application.js"></script>
<script src="<?php echo url();?>/user/js/bootstrap-tooltip.js"></script>
<script defer src="<?php echo url();?>/user/js/jquery.fancybox.js"></script>
<script defer src="<?php echo url();?>/user/js/jquery.flexslider.js"></script>
<script type="text/javascript" src="<?php echo url();?>/user/js/jquery.tweet.js"></script>
<script  src="<?php echo url();?>/user/js/cloud-zoom.1.0.2.js"></script>
<script  type="text/javascript" src="<?php echo url();?>/user/js/jquery.validate.js"></script>
<script type="text/javascript"  src="<?php echo url();?>/user/js/jquery.carouFredSel-6.1.0-packed.js"></script>
<script type="text/javascript"  src="<?php echo url();?>/user/js/jquery.mousewheel.min.js"></script>
<script type="text/javascript"  src="<?php echo url();?>/user/js/jquery.touchSwipe.min.js"></script>
<script type="text/javascript"  src="<?php echo url();?>/user/js/jquery.ba-throttle-debounce.min.js"></script>
<script defer src="<?php echo url();?>/user/js/custom.js"></script>
</body>
</html>