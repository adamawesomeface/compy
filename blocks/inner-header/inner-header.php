<?php
  $title = get_the_title();
  if(is_404()){
    $title = 'Content Not Found (error: 404)';
  }
?>
<div class="columns is-multiline">
  <div class="column is-12">
    <h1><?php echo $title; ?></h1>
  </div>
</div>