<div class="col-md-4">
    <div class="tile tile-category">
    <a href="<?php the_permalink(); ?>">
      <span class="imageContainer">
        <?php 
          $url = DEFAULT_IMAGE;
          if(has_post_thumbnail() ) {
            the_post_thumbnail( 'medium' );
          } else {
            echo $url;
          };
        ?>
      </span>
    </a>
    <div class="content">
      <?php $categories = get_the_category(); ?>
      <?php if($categories): ?>
        <div class="type"><?php echo $categories[0]->name; ?></div>
      <?php endif; ?>
      <a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
      <p class="date"><?php echo the_time('F j, Y'); ?></p>
      <p><?php echo get_the_excerpt(); ?></p>
      <a href="<?php the_permalink(); ?>" class="button">Read More</a>
    </div>
  </div>
</div>