<?php

// Exit if accessed directly
if ( !defined('ABSPATH')) exit;
?>
<!doctype html>
<!--[if !IE]>      <html class="no-js non-ie" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7 ]>    <html class="no-js ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8 ]>    <html class="no-js ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 9 ]>    <html class="no-js ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 9]><!-->
<html class="no-js" <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo('charset'); ?>" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>
<?php bloginfo('name'); ?>
<?php is_home() ? bloginfo('description') : wp_title('Hands-on marketing attention yields better results'); ?>
</title>
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<meta name="keywords" content="healthcare,consumer,managed markets,insight,strategy,creative"/>
<meta name="description" content="SproutWorks responds to the needs of your business by assembling talent that reflects your growth objectives. So you see value in every team member and get more beanstalks for your beans" />
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
<!--<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/parallax-2013.js"></script>-->
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/nbw-mobile.js"></script>
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
	$('#home-2').localScroll();
	$('img.wp-image-223').attr('src','http://sprout-works.com/wp-content/uploads/2013/07/Creative_Thumbnails_iphone.png');
	$('img.wp-image-223').attr('width','390');
	$('img.wp-image-223').attr('height','294');	
	if ($(window).width() <= 320) {	
		$('img.wp-image-223').attr('src','http://sprout-works.com/wp-content/uploads/2013/07/iphone-portrait-Creative_Thumbnails_iphone.png');
		$('img.wp-image-223').attr('width','273');
		$('img.wp-image-223').attr('height','206');		
	}
	var firstworkphtml = $('#work .story').find("p:first").html();
	$workpemail = $('#work .story p.work-email');
	$('#work .story').find("p:first").remove();
	$workpemail.before('<p>'+firstworkphtml+'</p>');
	$('h2 br').remove();
});
<!--
 var viewportwidth, viewportheight;
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
<!--
function viewport()
{
var e = window, a = 'inner';
if ( !( 'innerWidth' in window ) )
{
a = 'client';
e = document.documentElement || document.body;
}
return { width : e[ a+'Width' ] , height : e[ a+'Height' ] }
}
//-->
<!--
var w=window,d=document,e=d.documentElement,g=d.getElementsByTagName('body')[0],x=w.innerWidth||e.clientWidth||g.clientWidth,y=w.innerHeight||e.clientHeight||g.clientHeight;
//-->
</script>
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/sprout-works.js"></script>
<?php wp_head(); ?>
<link href='http://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700,300italic,400italic,500italic,700italic' rel='stylesheet' type='text/css'>
</head>
