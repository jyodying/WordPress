<?php
/*
Template Name: Parallax
*/
get_header(); 
?>
<body>
<ul id="nav">
  <?php $pages = get_pages(array('child_of' => 0,'sort_order' => 'ASC','sort_column' => 'menu_order', 'depth'=>1,'exclude'=>199)); 
foreach ($pages as $page_data) { 
	$title = $page_data->post_title; 
	$post_slug = $page_data->post_name; ?>
  <li id="li-<?php echo $post_slug; ?>"><a href="#<?php echo $post_slug; ?>" title="Next Section"><?php echo $title; ?></a></li>
  <?php } ?>
</ul>
<div id="main" role="main">
  <?php $pages = get_pages(array('child_of' => 0,'sort_order' => 'ASC','sort_column' => 'menu_order', 'depth'=>1,'exclude'=>199)); 
foreach ($pages as $page_data) {
	$content = apply_filters('the_content', $page_data->post_content); 
    $title = $page_data->post_title; 
	$post_slug = $page_data->post_name; ?>
  <div id="<?php echo $post_slug; ?>">
    <?php if ($post_slug == 'home') { ?>
    <div class="story">
      <h1><a href="<?php bloginfo('url'); ?>">
        <?php bloginfo('name'); ?>
        </a> |
        <?php bloginfo('description'); ?>
      </h1>
      <div class="sprout"></div>
      <?php echo $content; ?> </div>
    <?php } elseif ($post_slug == 'strategy') { ?>
    <div class="story">
      <div class="sprout-strategy"></div>
      <?php echo $content; ?> </div>
    <?php } elseif ($post_slug == 'creative') { ?>
    <div class="light-bulb"></div>
    <div class="story"><?php echo $content; ?></div>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <?php if (class_exists('Gallery')) { $Gallery = new Gallery(); $Gallery -> slideshow($output = true, $post_id = 35); }; ?>
    <?php endwhile; ?>
    <?php endif; ?>
    <?php } elseif ($post_slug == 'about-us') { ?>
    <div class="clock"></div>
    <div class="joe-tully"></div>
    <div class="silhouette"></div>
    <div class="story"><?php echo $content; ?></div>
    <?php } elseif ($post_slug == 'contact') { ?>
    <div class="ipad"></div>
    <div class="story"><?php echo $content; ?></div>
    <div class="contact-background"></div>
    <?php } elseif ($post_slug == 'resources') { ?>
    <div class="sprout-feed"></div>
    <div class="story"><?php echo $content; ?>
      <div class="feeds">
        <div class="feed">
        <?php sp_getFeedContent("feeds2");?>
        <?php //sp_getFeedContent("smallBusinessNews");?>
          <?php //simple_feed_list('http://www.businessweek.com/search/rssinterstitial.html?target=www.businessweek.com/rss/smallbiz.rss','limit=5&desc=500'); ?>
        </div>
        <div class="feed">
        <?php //sp_getFeedContent("SmallBusinessTrends");?>
          <?php //simple_feed_list('http://feeds.feedburner.com/SmallBusinessTrends?format=xml','limit=5&desc=250'); ?>
        </div>
        <div class="feed">
        <?php //sp_getFeedContent("feedname");?>
          <?php //simple_feed_list('http://feeds.reuters.com/reuters/smallBusinessNews','limit=5&desc=250'); ?>
        </div>
      </div>
    </div>
    <?php } ?>
  </div>
  <?php } ?>
</div>
<ul id="social">
  <li id="facebook"><a href="http://www.facebook.com/SproutWorksNYC" title="Facebook" target="_blank">Facebook</a></li>
  <li id="twitter"><a href="http://twitter.com/sproutworksnyc" title="Twitter" target="_blank">Twitter</a></li>
  <li id="linkedin"><a href="http://www.linkedin.com/company/sproutworks" title="LinkedIn" target="_blank">LinkedIn</a></li>
</ul>
<!-- // End of #main -->
</body>
</html>