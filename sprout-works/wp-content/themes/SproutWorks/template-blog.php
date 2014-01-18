<?php
/*
Template Name: Blog
*/
get_header(); 
?>
<body>

<ul id="nav">
  <?php $pages = get_pages(array('child_of' => 0,'sort_order' => 'ASC','sort_column' => 'menu_order')); 
foreach ($pages as $page_data) { 
	$title = $page_data->post_title; 
	$post_slug = $page_data->post_name; ?>
  <li id="li-<?php echo $post_slug; ?>"><a href="#<?php echo $post_slug; ?>" title="Next Section"><?php echo $title; ?></a></li>
  <?php } ?>
</ul>
<div id="main" role="main">
  <div id="home">
<!-- WP Loop -->

<h2 class="page_headline">
  <?php echo get_the_title($post->post_parent); ?>
</h2>
<div class="clearfix"></div>
<?php if (have_posts()) : ?>
<div class="holder">
  <div id="pane2" class="scroll-pane">
    <?php while (have_posts()) : the_post(); ?>
      <!--<div class="date">
<?php the_time('M/y'); ?>
<p class="date-month"><?php the_time('j'); ?></p>
</div> -->
      <h3 id="<?php echo get_slug_by_id($post->post_parent); ?>"><a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title(); ?>">
        <?php the_title(); ?>
        </a></h3>
      <!--<h1><?php the_title(); ?></a></h1> -->
      <!--<div class="preview"><a href="#" class="view-excerpt"></a></div> -->
      <div class="clearfix"></div>
      <!--<p class="post_info">         
<?php comments_popup_link('No comments','1 Comment','% Comments','','Comments off'); ?> &middot; 
Posted by <i><?php the_author(); ?></i> in <?php the_category(', '); ?><?php if ( is_user_logged_in() ) : ?><?php edit_post_link('Edit', ' &middot; ', ''); ?><?php endif; ?>
</p> -->
    <?php
/* This code retrieves all our admin options. */
global $options;
foreach ($options as $value) {
	if (get_settings( $value['id'] ) === FALSE) { $$value['id'] = $value['std']; } else { $$value['id'] = get_settings( $value['id'] ); }
}
?>
    <div class="excerpt">
      <?php /* Post options */
//if ($jq_post_display == "false") {
//the_content();
//wp_link_pages();
//} else { 
the_excerpt();
//} ?>
      <div class="clearfix"></div>
      <!--<p class="tag_info">
<?php $tag = get_the_tags(); if (! $tag) {echo "No tags";} else {the_tags('', ' &middot; ', '');} ?>
</p> -->
    </div>
    <?php endwhile; ?>
    <p class="previous-posts">
      <?php previous_posts_link('<< Latest posts'); ?>
    </p>
    <p class="next-posts">
      <?php next_posts_link('Older posts >>'); ?>
    </p>
    <?php else : ?>
    <p class="not-found">
      <?php _e('Sorry, no posts matched your criteria.'); ?>
    </p>
  </div>
</div>
<?php endif; ?>
</div>
</div>
  </div>
</div>
<ul id="social">
  <li id="facebook"><a href="http://facebook.com/sprout-works" title="Facebook" target="_blank">Facebook</a></li>
  <li id="twitter"><a href="http://twitter.com/sprout-works" title="Twitter" target="_blank">Twitter</a></li>
  <li id="linkedin"><a href="http://linkedin.com/sprout-works" title="LinkedIn" target="_blank">LinkedIn</a></li>
</ul>
<!-- // End of #main -->
</body>
</html>