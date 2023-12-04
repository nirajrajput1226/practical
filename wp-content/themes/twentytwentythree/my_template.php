<?php /* Template Name: my template */ 

get_header();

wp_title();

if ( get_query_var('firstName') ) {
    echo get_query_var('firstName');
}

if ( get_query_var('lastName') ) {
    echo get_query_var('lastName');
}

if ( get_query_var('amount') ) {
    echo get_query_var('amount');
}
get_footer();

?>