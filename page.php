<?php
get_header(); ?>

<?php get_template_part('blocks/progress-bar/progress-bar'); ?>

<article class="main-inner-content inner inner-<?php echo $post->post_name; ?>">
	<div class="container">
	  <?php get_template_part('blocks/inner-header/inner-header'); ?>
	  <div class="columns">
	    <div class="column is-9 page-container">
	      <?php if (have_posts()) : ?>
	        <?php while (have_posts()) : the_post(); ?>
	        	<div class="main-content">
	        		<?php the_content('More'); ?>
	        	</div>
	        <?php endwhile; ?>
	      <?php endif; ?>
	    </div>
	    <?php get_sidebar(); ?>
	  </div>
	</div>
</article>

<?php get_footer();
