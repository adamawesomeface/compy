<?php
/**
 * @package 
 * @subpackage 
 */
get_header(); ?>

<article class="blog-list-container category">
  <div class="container">
    <?php get_template_part('blocks/blog/blog-list-header/blog-list-header'); ?>
    <div class="columns is-multiline">
      <div class="column is-9">
        <?php
          $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
          $args = array(
            'posts_per_page' => 2,
            'paged'          => $paged
          );
          if(get_query_var('cat')):
            $catID       = get_query_var( 'cat' );
            $args['cat'] = $catID;
          endif;
          $posts = new WP_Query( $args );
          ?>
          <?php if ($posts->have_posts()) : ?>
            <div class="blog-list-posts">
              <?php while ($posts->have_posts()) : $posts->the_post(); ?>
                <?php get_template_part('blocks/blog/blog-list-post/blog-list-post'); ?>
              <?php endwhile; ?>
            </div>
          <?php endif; ?>
      </div>
      <?php get_template_part('blocks/sidebars/blog-sidebar/blog-sidebar'); ?>
    </div>
  </div>
<div class="flex-content">
  <?php get_template_part('blocks/pagination/pagination'); ?>
</div>
</article>

<?php get_footer();