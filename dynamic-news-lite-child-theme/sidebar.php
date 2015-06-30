  <section id="sidebar" class="secondary clearfix" role="complementary">

    <!-- Click Here for $10 button -->
    <div class="click-for-10-button">
      <p class="title">Click Here for $10</p>
    </div>

    <!-- Recent News section (aka: recent posts) -->
    <div class="widget-box">
      <div class="widget-title title">
        <p><?php _e("Recent News"); ?></p>
      </div>
      <div class="widget-contents">
        <ul>
          <?php
            $recent_posts = wp_get_recent_posts(array('numberposts' => '8', 'post_status' => 'publish'));
            foreach( $recent_posts as $recent ) {
              echo '<li class="recent-items"><a href="' . esc_url(get_permalink($recent['ID'])) . '" title="Look '.esc_attr($recent['post_title']).'" >' . $recent['post_title'] . '</a></li>';
            }
          ?>
        </ul>
      </div>
    </div>

  

  </section>
