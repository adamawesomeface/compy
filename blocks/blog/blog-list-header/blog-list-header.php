<div class="columns is-multiline">
  <div class="column is-12">
    <h1>
        <?php if ( is_day() ) : ?>
            <?php printf( __( 'Daily Archives: <span>%s</span>', 'theme' ), get_the_date() ); ?>
        <?php elseif ( is_month() ) : ?>
            <?php printf( __( 'Monthly Archives: <span>%s</span>', 'theme' ), get_the_date('F Y') ); ?>
        <?php elseif ( is_year() ) : ?>
            <?php printf( __( 'Yearly Archives: <span>%s</span>', 'theme' ), get_the_date('Y') ); ?>
        <?php elseif ( is_category() ) : ?>
            <?php printf( __( '%s Archive', 'theme' ), single_cat_title() ); ?>
        <?php else : ?>
            <?php _e( 'Blog Archives', 'theme' ); ?>
        <?php endif; ?>
    </h1>
  </div>
</div>