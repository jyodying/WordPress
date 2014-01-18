<?php
/*
Template Name: 2013
*/
require_once 'Mobile_Detect.php';
$detect = new Mobile_Detect;
$deviceType = ($detect->isMobile() ? ($detect->isTablet() ? 'tablet' : 'phone') : 'computer');
$scriptVersion = $detect->getScriptVersion();
//echo $deviceType;
if ($deviceType<>'phone') {
	get_header('parallax-2013'); 
} else {
	get_header('mobile'); 
}
?>
<body <?php body_class($class); ?>>
<?php if ($deviceType=='phone') { ?>
      <h1><a href="<?php bloginfo('url'); ?>">
        <?php bloginfo('name'); ?>
        </a> |
        <?php bloginfo('description'); ?>
      </h1>
<?php } ?>      
<ul id="nav">
  <?php $pages = get_pages(array('child_of' => 199,'sort_order' => 'ASC','sort_column' => 'menu_order')); 
foreach ($pages as $page_data) { 
	$title = $page_data->post_title; 
	$post_slug = $page_data->post_name; ?>
  <li id="li-<?php echo $post_slug; ?>"><a href="#<?php echo $post_slug; ?>" title="Next Section"><?php echo $title; ?></a></li>
  <?php } ?>
  <span class="stretch"></span>
</ul>
<div id="main" role="main">
  <?php $pages = get_pages(array('child_of' => 199,'sort_order' => 'ASC','sort_column' => 'menu_order')); 
foreach ($pages as $page_data) {
	$content = apply_filters('the_content', $page_data->post_content); 
    $title = $page_data->post_title; 
	$post_slug = $page_data->post_name; ?>
  <div id="<?php echo $post_slug; ?>">
    <?php if ($post_slug == 'home-2') { ?>
    <div class="story">
<?php if ($deviceType<>'phone') { ?>    
      <h1><a href="<?php bloginfo('url'); ?>">
        <?php bloginfo('name'); ?>
        </a> |
        <?php bloginfo('description'); ?>
      </h1>
<?php } ?>          
      <div class="sprout"></div>
      <?php echo $content; ?>
      <div class="clear"></div>
    </div>
    <?php } elseif ($post_slug == 'depth') { ?>
    <div id="ipad-fix-trees"></div>
    <div class="story">
      <div class="depth-strategy"></div>
      <?php echo $content; ?>
      <div class="clear"></div>
    </div>
    <?php } elseif ($post_slug == 'work') { ?>
    <div class="light-bulb"></div>
    <div id="ipad-fix-light-bulb"></div>    
    <div class="story"><?php echo $content; ?>
      <div class="clear"></div>
    </div>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <?php //if (class_exists('Gallery')) { $Gallery = new Gallery(); $Gallery -> slideshow($output = true, $post_id = 35); }; ?>
    <?php endwhile; ?>
    <?php endif; ?>
    <?php } elseif ($post_slug == 'us') { ?>
    <div class="story"><?php echo $content; ?>
      <div class="clear"></div>
    </div>

    <?php } ?>
  </div>    
  <?php } ?>
</div>
<div id="footer">
      <ul id="social">
        <li id="linkedin"><a href="http://www.linkedin.com/company/sproutworks" title="LinkedIn" target="_blank">LinkedIn</a></li>
        <li id="twitter"><a href="http://twitter.com/sproutworksnyc" title="Twitter" target="_blank">Twitter</a></li>
        <li id="facebook"><a href="http://www.facebook.com/SproutWorksNYC" title="Facebook" target="_blank">Facebook</a></li>
      </ul>    
      <p id="footer-email"><a href="mailto:info@sprout-works.com">info@sprout-works.com</a></p>
      <p id="copyright">&copy;2013 SproutWorks. All rights reserved.</p>
    </div>
<!-- // End of #main -->
<?php get_footer(); ?>
