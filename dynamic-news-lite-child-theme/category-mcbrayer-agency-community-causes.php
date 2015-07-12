<!-- This is the template for the Community Cause index page -->

<?php get_header(); ?>

<?php // Get Theme Options from Database
  $theme_options = dynamicnews_theme_options();
?>

  <div id="wrap" class="container clearfix">
    
    <section id="content" class="primary" role="main">

    <?php if (have_posts()) : while (have_posts()) : the_post();
    
      // Changed 'context' to 'context-excerpt' so that only previews are shown on the category page, rather than the entire post
      get_template_part( 'content-excerpt', $theme_options['posts_length'] );
    
      endwhile;
      
    dynamicnews_display_pagination();

    endif; ?>
      
    </section>
    
    <?php get_sidebar(); ?>
  </div>
  
<?php get_footer(); ?>  