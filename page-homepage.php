<?php
/** Template Name: Homepage */
get_header(); ?>
<article class="main-home-container container inner inner-<?php echo $post->post_name; ?>">
  <div class="container">
    <?php get_template_part('blocks/inner-header/inner-header'); ?>
    <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>
        <div class="columns">
          <div class="column is-9 page-container">
            <?php the_content('More'); ?>
          </div>
          <div class="column is-3">
          </div>
        </div>
      <?php endwhile; ?>
    <?php endif; ?>
  </div>
</article>
<?php get_footer();