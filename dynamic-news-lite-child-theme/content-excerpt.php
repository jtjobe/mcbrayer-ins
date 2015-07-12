 <article id="post-<?php the_ID(); ?>" <?php post_class('content-excerpt'); ?>>

    <h2 class="post-title entry-title"><a href="<?php esc_url(the_permalink()) ?>" rel="bookmark"><?php the_title(); ?></a></h2>
    
    <!-- This removes the extra post information (Date, Author, 'Leave a comment', 'Edit Post') -->
    <!-- <div class="postmeta"><?php dynamicnews_display_postmeta(); ?></div> -->

    <?php dynamicnews_display_thumbnail_index(); ?>
    
    <div class="entry clearfix">
      <?php the_excerpt(); ?>
      <a href="<?php esc_url(the_permalink()) ?>" class="more-link"><?php _e('Read more', 'dynamicnewslite'); ?></a>
    </div>
    
    <!-- This removes the category label under a post excerpt (either "The McBrayer Agency Community Causes" or "The McBrayer Agency Blog") -->
    <!-- <div class="postinfo clearfix"><?php dynamicnews_display_postinfo_index(); ?></div> -->

  </article>