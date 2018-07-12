'use strict';
jQuery(document).ready(function () {
  // FORM SUBMISSIONS - SEARCH
  jQuery('#searchsubmit').click(function() {
      jQuery('#searchform').submit();
  });

  jQuery('.search').on('click',function(e){
    e.preventDefault();
    jQuery(this).closest('.search-container').toggleClass('active');
  });
});