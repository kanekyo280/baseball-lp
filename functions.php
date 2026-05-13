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


function my_enqueue_scripts() {
    wp_enqueue_script(
        'my-script',                      
        get_template_directory_uri() . '/js/functions.js', 
        array('jquery'),                  
        '1.0.0',                          
        true   
    );                           
}
add_action('wp_enqueue_scripts', 'my_enqueue_scripts');

?>