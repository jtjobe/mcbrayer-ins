<!DOCTYPE html><!-- HTML 5 -->
<html <?php language_attributes(); ?>>

<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php // Get Theme Options from Database
  $theme_options = dynamicnews_theme_options();
?>

<div id="wrapper" class="hfeed">
  
  <div id="header-wrap">
  
    <header id="header" class="container clearfix" role="banner">

      <div id="logo" class="clearfix">
        <!-- Main Logo -->
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-white-bg.png" alt="McBrayer Insurance Agency Logo" />
      </div>
      
      <div id="header-content" class="clearfix">
        <div class="header-content-container">

          
          <!-- Search Bar -->
          <div class="header-search-bar">
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

          <!-- Social Icons -->
          <div class="header-social-icons" class="social-icons-wrap clearfix">
            <?php dynamicnews_display_social_icons(); ?>
          </div>

        </div>
      </div>

    </header>
  
  </div>
  
  <div id="navi-wrap">
    <nav id="mainnav" class="container clearfix" role="navigation">
      <?php 
        // Get Navigation out of Theme Options
        wp_nav_menu(array('theme_location' => 'primary', 'container' => false, 'menu_id' => 'mainnav-menu', 'echo' => true, 'fallback_cb' => 'dynamicnews_default_menu', 'before' => '', 'after' => '', 'link_before' => '', 'link_after' => '', 'depth' => 0));
      ?>
    </nav>
  </div>
  
  <?php // Display Custom Header Image
    dynamicnews_display_custom_header(); ?>