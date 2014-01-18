<!doctype html>
<html class="no-js" lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>
<?php bloginfo('name'); ?>
<?php is_home() ? bloginfo('description') : wp_title(''); ?>
</title>
<meta name="keywords" content=""/>
<meta name="description" content="<?php bloginfo('description') ?>" />
<meta name="author" content="Jedsada Yodying">
<meta http-equiv="content-type" content="<?php bloginfo('html_type') ?>; charset=<?php bloginfo('charset') ?>" />
<meta name="theme_template_dir" content="<?php bloginfo('stylesheet_directory'); ?>" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" media="screen" />
<!-- [favicon] begin -->
<link rel="shortcut icon" type="image/x-icon" href="http://sprout-works.com/wp-content/uploads/2011/12/favicon.ico" />
<link rel="icon" type="image/x-icon" href="http://sprout-works.com/wp-content/uploads/2011/12/favicon.ico" />
<!-- [favicon] end -->
<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="Atom 1.0" href="<?php bloginfo('atom_url'); ?>" />
<!--[if IE]>



		        <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/ie.css" type="text/css" media="screen, projection" />



		  <![endif]-->
<!-- Some hacks for the dreaded IE6 ;) -->
<!--[if lt IE 6]>



			<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/ie6.css" type="text/css" media="screen" />



			<script type="text/javascript">



				var clear="<?php bloginfo('stylesheet_directory'); ?>/images/clear.gif";



			</script>



			<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/unitpngfix.js"></script>



		<![endif]-->
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/nbw-parallax.js"></script>
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.localscroll-1.2.7-min.js"></script>
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.scrollTo-1.4.2-min.js"></script>
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.inview.js"></script>
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.lightbox-0.5.js"></script>
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/customInput.jquery.js"></script>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/css/customInput.css" media="screen" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/css/jquery.lightbox-0.5.css" media="screen" />
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/lightbox.css" type="text/css" media="screen" />
<script type="text/javascript">

$(function(){

	$('#nav').localScroll();

	$('#slideshow a').lightBox({fixedNavigation:true});

	$('input').customInput();

});

</script>
<script type="text/javascript">

<!--

 

 var viewportwidth;

 var viewportheight;

  

 // the more standards compliant browsers (mozilla/netscape/opera/IE7) use window.innerWidth and window.innerHeight

  

 if (typeof window.innerWidth != 'undefined')

 {

      viewportwidth = window.innerWidth,

      viewportheight = window.innerHeight

 }

  

// IE6 in standards compliant mode (i.e. with a valid doctype as the first line in the document)

 

 else if (typeof document.documentElement != 'undefined'

     && typeof document.documentElement.clientWidth !=

     'undefined' && document.documentElement.clientWidth != 0)

 {

       viewportwidth = document.documentElement.clientWidth,

       viewportheight = document.documentElement.clientHeight

 }

  

 // older versions of IE

  

 else

 {

       viewportwidth = document.getElementsByTagName('body')[0].clientWidth,

       viewportheight = document.getElementsByTagName('body')[0].clientHeight

 }

//document.write('<p>Your viewport width is '+viewportwidth+'x'+viewportheight+'</p>');

//-->

</script>
<script type="text/javascript">

<!--

function viewport()

{

var e = window

, a = 'inner';

if ( !( 'innerWidth' in window ) )

{

a = 'client';

e = document.documentElement || document.body;

}

return { width : e[ a+'Width' ] , height : e[ a+'Height' ] }

}

//-->

</script>
<script type="text/javascript">

<!--

var w=window,d=document,e=d.documentElement,g=d.getElementsByTagName('body')[0],x=w.innerWidth||e.clientWidth||g.clientWidth,y=w.innerHeight||e.clientHeight||g.clientHeight;

//-->

</script>
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/sprout-works.js"></script>
<?php wp_head(); ?>
<link href='http://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700,300italic,400italic,500italic,700italic' rel='stylesheet' type='text/css'>
</head>
