<?php 

add_action('init','add_get_val');
function add_get_val() { 
    global $wp; 
    $wp->add_query_var('firstName');
    $wp->add_query_var('lastName');
    $wp->add_query_var('amount');
}

?>