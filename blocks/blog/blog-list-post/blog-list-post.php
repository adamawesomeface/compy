<div class="blog-list-post">
  <?php if(has_post_thumbnail() ) the_post_thumbnail( 'medium' ); ?>
  <div class="content">
    <a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
    <div class="date"><?php echo the_time('F j, Y'); ?></div>
    <div class="text">
      <p><?php echo get_the_excerpt(); ?></p>
    </div>
    <a href="<?php the_permalink(); ?>" class="button">Read More</a>
  </div>
</div>