<meta property="og:url"                content="<?php echo current_url(); ?>" />
<meta property="og:type"               content="article" />
<meta property="og:title"              content="<?php echo  $product_details['category_name'] ; ?>" />
<meta property="og:description"        content="<?php echo  $product_details['sub_category_name'] ; ?>" />
<meta property="og:image"              content="<?php echo  base_url().$product_details['image'] ; ?>" />



<a href="https://twitter.com/intent/tweet?text=<?php echo current_url(); ?>"              class="btn btn-social-icon btn-twitter"  target="_blank">
  <span class="fa fa-twitter"></span>
</a>
<a href="http://www.facebook.com/sharer/sharer.php?u=<?php echo current_url(); ?>"  class="btn btn-social-icon btn-twitter" target="_blank">
  <span class="fa fa-facebook"></span>
</a>
<a href="https://www.linkedin.com/cws/share?url=<?php echo current_url(); ?>"  class="btn btn-social-icon btn-twitter" target="_blank">
  <span class="fa fa-linkedin" ></span>
</a>
<a href="https://plus.google.com/share?url=<?php echo current_url(); ?>"  class="btn btn-social-icon btn-twitter" target="_blank">
  <span class="fa fa-google-plus" ></span>
</a>