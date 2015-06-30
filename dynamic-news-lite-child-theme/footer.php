
  <?php do_action('dynamicnews_before_footer'); ?>
  
  <div id="footer-wrap">
  
    <footer id="footer" class="container clearfix" role="contentinfo">

      <!-- Links block 1 -->
      <div class="footer-col">
        <p class="footer-title title menu-title">Home<p>
        <p class="footer-title title menu-title">Get Quote<p>
        <p class="footer-title title menu-title">Available Policies<p>
          <p class="footer-text">Auto Insurance</p>
          <p class="footer-text">Homeowners Insurance</p>
          <p class="footer-text">Life Insurance</p>
          <p class="footer-text">Renters Insurance</p>
          <p class="footer-text">Motorcycle Insurance</p>
          <p class="footer-text">Umbrella Insurance</p>
        <p class="footer-title title menu-title">Rewards Program<p>
      </div>

      <!-- Links block 2 -->
      <div class="footer-col">
        <p class="footer-title title menu-title">Community Support<p>
          <p class="footer-text">Our Community Causes</p>
          <p class="footer-text">Suggest A Cause</p>
        <p class="footer-title title menu-title">About Us<p>
          <p class="footer-text">David McBrayer</p>
          <p class="footer-text">Adam McBrayer</p>
          <p class="footer-text">Sandy McBrayer</p>
          <p class="footer-text">Turner May</p>
        <p class="footer-title title menu-title">Blog<p>
      </div>
     
     <!-- Contact block -->
      <div class="footer-col contact-col">
        <p class="footer-title title">Contact Us<p>
        <div class="footer-col-row">
          <p class="footer-text">The McBrayer Agency</p>
        </div>
        <div class="footer-col-row">
          <p class="footer-text">(205) 304-0414</p>
          <p class="footer-text">(205) 594-6275 fax</p>
          <p class="footer-text small-email-text">info@themcbrayeragency.com</p>
        </div>
        <div class="footer-col-row">
          <p class="footer-text">122 1st Street S.</p>
          <p class="footer-text">Alabaster, AL 35007</p>
        </div>
        <div class="contact-col-button">
          <a href="https://www.google.com/maps/dir/Current+Location/122+1st+St+S,+Alabaster,+AL+35007" target='_blank'><p>Get Directions</p></a>
        </div>
        <div class="contact-col-button">
          <a href="tel:+2053040414">Call Now</a>
        </div>
      </div>


      
      <!-- Logo, Search and Social Icons column -->
      <div class="footer-col">

        <!-- Logo with blue BG -->
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-blue-bg.png" alt="McBrayer Insurance Agency Logo" class="footer-logo"/>

        <!-- Social Icons -->
        <div class="footer-social-icons" class="social-icons-wrap clearfix">
          <?php dynamicnews_display_social_icons(); ?>
        </div>

        <!-- Search Bar -->
        <div class="footer-search-bar">
          <form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
            <label>
              <span class="screen-reader-text"><?php _ex( 'Search for:', 'label', 'dynamicnewslite' ); ?></span>
                <input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'dynamicnewslite' ); ?>" value="<?php echo esc_attr( get_search_query() ); ?>" name="s">
            </label>
            <button type="submit" class="search-submit">
              <span class="genericon-search"></span>
            </button>
          </form>
        </div>
        
        
      </div>
      
    </footer>
    
  </div>

</div><!-- end #wrapper -->

<?php wp_footer(); ?>
</body>
</html>