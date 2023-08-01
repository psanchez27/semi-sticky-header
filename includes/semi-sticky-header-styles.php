<?php

//Load CSS on front end
function semi_sticky_header_frontend_styles()
{
  wp_enqueue_style('semi-sticky-header-frontend-css', SEMI_STICKY_HEADER_URL . '/css/semi-stickt-header-styles.css', [], time(), 'all');
}

add_action('wp_enqueue_scripts', 'semi_sticky_header_frontend_styles');
