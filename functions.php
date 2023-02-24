<?php

function example_site_custom_excerpt_length( $length ) {
    return 20;
}

add_filter( 'excerpt_length', 'example_site_custom_excerpt_length', 999 );
