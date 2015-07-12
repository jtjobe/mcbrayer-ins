<!-- This is the template for the Blog index page -->

<?php get_header(); ?>

<?php // Get Theme Options from Database
  $theme_options = dynamicnews_theme_options();
?>

  <div id="wrap" class="container clearfix">
    
    <section id="content" class="primary" role="main">

      <!-- Email Sign Up form for blog page -->
      <div role="form" class="wpcf7" id="wpcf7-f100-p12-o1" lang="en-US" dir="ltr">
      <div class="screen-reader-response"></div>
      <form name="" action="/contact#wpcf7-f100-p12-o1" method="post" class="wpcf7-form" novalidate="novalidate">
      <div style="display: none;">
      <input type="hidden" name="_wpcf7" value="100" />
      <input type="hidden" name="_wpcf7_version" value="4.2.1" />
      <input type="hidden" name="_wpcf7_locale" value="en_US" />
      <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f100-p12-o1" />
      <input type="hidden" name="_wpnonce" value="78c1d3f08e" />
      </div>
      <p><span class="wpcf7-form-control-wrap your-email"><input type="email" name="your-email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder="Enter your email to subscribe to our blog" /></span><input type="submit" value="Sign Up" class="wpcf7-form-control wpcf7-submit blog-page-email-sign-up" /></p>
      <div class="wpcf7-response-output wpcf7-display-none"></div></form></div>
      <!-- End of form -->

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