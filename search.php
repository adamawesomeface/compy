<?php
/**
 * @package
 * @subpackage
 */
get_header(); ?>

<article class="main-inner-content inner search">
  <div class="container">
    <?php get_template_part('block/search/search-results/search-result-header/search-result-header'); ?>
    <div class="columns">
      <div class="column is-9 page-container">
      <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
          <?php get_template_part('block/search/search-results/search-result-list/search-result-list'); ?>
        <?php endwhile; ?>
      <?php else: ?>
        <?php get_template_part('block/search/search-results/search-no-results/search-no-results'); ?>
      <?php endif; ?>
    </div>
    <?php get_sidebar(); ?>
  </div>
</article>
<?php get_footer();