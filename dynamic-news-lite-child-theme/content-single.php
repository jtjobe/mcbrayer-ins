  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  
    <h2 class="post-title entry-title"><?php the_title(); ?></h2>
    
    <!-- Removes 'meta' information from top of single post -->
    <!-- <div class="postmeta"><?php dynamicnews_display_postmeta(); ?></div> -->
    
    <?php dynamicnews_display_thumbnail_single(); ?>
    
    <div class="entry clearfix">
      <?php the_content(); ?>
      <!-- <?php trackback_rdf(); ?> -->
      <div class="page-links"><?php wp_link_pages(); ?></div>     
    </div>
    
    <!-- Removes info on Category label and tags from bottom of single post -->
    <!--<div class="postinfo clearfix"><?php dynamicnews_display_postinfo_single(); ?>
      </div> -->

  </article>