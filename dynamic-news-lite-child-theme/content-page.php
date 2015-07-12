
  <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    
    <!-- Commented out the normal page title so it can be placed differently -->
    <!-- In order to place page title below picture, it must be placed directly into the content editor on a specific Wordpress page -->   
    <!--<h2 class="page-title entry-title"><?php the_title(); ?></h2> -->

    <div class="entry clearfix">      
      <?php the_content(); ?>   
    </div>
    <?php wp_link_pages(); ?>

  </div>