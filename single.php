<?php
/**
 * @package
 * @subpackage
 */
get_header(); ?>

<article class="main-inner-content inner inner-single single <?php echo $post->post_name; ?>">
  <div class="container">
    <?php get_template_part('blocks/inner-header/inner-header'); ?>
    <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>
        <div class="columns">
          <div class="column is-9 single-post-content">
            <?php if ( has_post_thumbnail() ): ?>
              <?php the_post_thumbnail('full'); ?>
            <?php endif; ?>
            <?php the_content('More'); ?>
          </div>
          <?php get_sidebar(); ?>
        </div>
      <?php endwhile; ?>
    <?php endif; ?>
  </div>
</article>
<?php get_footer(); ?>