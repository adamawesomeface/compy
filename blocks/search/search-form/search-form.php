<?php $searchString = (get_search_query()) ? get_search_query() : 'Search...'; ?>
<form method="get" class="search-form" id="SearchForm" action="<?php bloginfo('url'); ?>/">
  <input type="text" value="<?php echo $searchString; ?>" <?php echo ($searchString == 'Search...') ? 'onclick="javascript:this.value=\'\'"' : ''; ?> name="s" id="s" class="textBox" />
  <button class="search-submit" id="searchsubmit">Search</button>
</form>
