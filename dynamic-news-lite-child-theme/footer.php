
  <?php do_action('dynamicnews_before_footer'); ?>
  
  <div id="footer-wrap">
  
    <footer id="footer" class="container clearfix" role="contentinfo">

      <!-- Links block 1 -->
      <div class="footer-col">
        <p>Hey</p>
      </div>

      <!-- Links block 2 -->
      <div class="footer-col">
                <p>Hey</p>

      </div>
     
     <!-- Contact block -->
      <div class="footer-col contact-col">
        <p class="footer-title title">Contact Us<p>
        <div class="footer-col-section">
          <p>770.846.4414</p>
          <p>mcbrayer@gmail.com</p>
        </div>
        <div class="footer-col-section">
          <p>199 McBrayer Street</p>
          <p>Athens, GA 30601</p>
        </div>
        <div class="contact-col-button">
          <p>Get Directions</p>
        </div>
        <div class="contact-col-button">
          <p>Call Now</p>
        </div>
      </div>
      
      <!-- Logo, Search and Social Icons block -->
      <div class="footer-col">
        <h1>SEARCH AND LOGO</h1>
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-white-bg.png" alt="McBrayer Insurance Agency Logo" />

         <!-- Social Icons -->
          <div class="footer-social-icons" class="social-icons-wrap clearfix">
            <?php dynamicnews_display_social_icons(); ?>
          </div>
        
        
      </div>
      
    </footer>
    
  </div>

</div><!-- end #wrapper -->

<?php wp_footer(); ?>
</body>
</html>