<?php

add_action( 'wp_enqueue_scripts', function() {
  wp_enqueue_style('docpress-style', DOCS_URI.'/assets/style.css', false, '1.0', 'all');
});