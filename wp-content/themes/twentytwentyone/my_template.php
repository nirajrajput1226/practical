<?php /* Template Name: my template */ 

get_header();

wp_title();
?>
<hr>
<?php 

if ( get_query_var('q') ) {
    echo get_query_var('q');
}

get_footer();

?>