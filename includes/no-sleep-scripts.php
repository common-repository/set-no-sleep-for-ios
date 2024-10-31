<?php
// Add Scripts
add_action('wp_enqueue_scripts' , 'nosleep_add_scripts');
function nosleep_add_scripts(){
    wp_enqueue_script('no-sleep-main-script', plugins_url( '/js/NoSleep.js', __FILE__ ));
    
}

