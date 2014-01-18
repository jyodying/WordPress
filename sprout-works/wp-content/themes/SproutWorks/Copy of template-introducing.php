<?php
/*
Template Name: HTML5
*/
?>
<?php 
get_header(); 
?>
<body>
<ul id="nav">
  <?php $pages = get_pages(array('child_of' => 0,'sort_order' => 'ASC','sort_column' => 'menu_order')); 
foreach ($pages as $page_data) { 
	$title = $page_data->post_title; 
	$post_slug = $page_data->post_name; ?>
  <li><a href="#<?php echo $post_slug; ?>" title="Next Section"><?php echo $title; ?></a></li>
  <?php } ?>
</ul>
<div id="main" role="main">
  <?php $pages = get_pages(array('child_of' => 0,'sort_order' => 'ASC','sort_column' => 'menu_order')); 
foreach ($pages as $page_data) {
	$content = apply_filters('the_content', $page_data->post_content); 
    $title = $page_data->post_title; 
	$post_slug = $page_data->post_name; ?>
  <section id="<?php echo $post_slug; ?>" data-speed="<?php echo rand(4,10); ?>" data-type="background">
    <!--<div class="smashinglogo" data-type="sprite" data-offsetY="100" data-Xposition="50%" data-speed="-2"></div>
    <div class="photograph" data-type="sprite" data-offsetY="1250" data-Xposition="25%" data-speed="2"></div> -->
    <article class="story">
      <?php if ($post_slug == 'home') { ?>
      <h1><a href="<?php bloginfo('url'); ?>">
        <?php bloginfo('name'); ?>
        </a> |
        <?php bloginfo('description'); ?>
      </h1>
      <div class="sprout"></div>
      <?php } elseif ($post_slug == 'strategy') { ?>

      <div class="sprout-strategy"></div>
      <?php } elseif ($post_slug == 'creative') { ?>

      <div class="light-bulb"></div>
      <?php } elseif ($post_slug == 'about-us') { ?>
      <div class="clock"></div>
		<div class="joe-tully"></div>
      <div class="silhouette"></div>
      <?php } elseif ($post_slug == 'contact') { ?>

      <div class="ipad"></div>
      <?php } elseif ($post_slug == 'resources') { ?>

      <div class="sprout-feed"></div>
      <?php } ?>
      <?php echo $content; ?></article>
    <!--<div class="byebye" data-type="sprite" data-offsetY="-1600" data-Xposition="50%" data-speed="-2"></div> -->
  </section>
  <?php } ?>
  <p class="center">P.S - You've scrolled <span id="pixels">0</span> Pixels. Oh Yeah!</p>
</div>
<!-- // End of #main -->
</body>
</html>