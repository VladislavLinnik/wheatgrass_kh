<?php 

function site_init (){
    wp_enqueue_style('main-style', get_template_directory_uri() . '/source/css/style.css', '', '', '');
    wp_enqueue_style('fontawesome-style', 'https://use.fontawesome.com/releases/v5.2.0/css/all.css', '', '', '');

    wp_enqueue_script('main-script', get_template_directory_uri() . '/source/js/index.js', null, '', true);
}
add_action('wp_enqueue_scripts', 'site_init' );





?>