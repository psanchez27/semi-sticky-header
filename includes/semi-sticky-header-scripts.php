<?php

//Load JS on the front end
function semi_sticky_header_scripts(){
  wp_enqueue_script( 'semi-sticky-header-frontend-scripts', SEMI_STICKY_HEADER_URL . '/js/semi-sticky-header-scripts.js', [], time(), true );
}

add_action( 'wp_enqueue_scripts', 'semi_sticky_header_scripts' );
