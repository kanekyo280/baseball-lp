<?php
function baseball_lp_styles() {
  wp_enqueue_style(
    'baseball-style',
    get_template_directory_uri() . '/css/style.css',
    array(),
    filemtime(get_template_directory() . '/css/style.css')
  );
}
add_action('wp_enqueue_scripts', 'baseball_lp_styles');