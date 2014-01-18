<?php 
get_header(); 
?>

		<!-- Column 1 /Content -->
		<div class="grid_9  omega right-column">

                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                        <!-- Blog Post -->
			<div class="post">
                            <!-- Post Title -->
                            <h3 class="title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
                            <!-- Post Data -->
                            <p class="sub"><?php the_time('F j, Y'); ?> at <?php the_time('g:i a'); ?> | <?php the_category(', '); ?> | <?php comments_number('No comment', '1 comment', '% comments'); ?></p>
                            <div class="hr dotted clearfix">&nbsp;</div>
                            <?php the_content(); ?>

			</div>
			<div class="hr clearfix">&nbsp;</div>
	<?php endwhile; else: ?>

	<h2>Woops...</h2>

	<p>Sorry, no posts we're found.</p>

	<?php endif; ?>
    </div>

<?php get_footer(); ?> 