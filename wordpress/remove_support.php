<?php 

// This allows for passing an array of types to remove support for instead of having to do it one at a time.
add_action( 'init', function () {
    $postType = 'my_custom_post_type';
    remove_support( $postType, array( 'excerpt', 'editor' ) );
} );

function remove_support( $postType, array $types ) {
    foreach ( $types as $type ) {
        remove_post_type_support( $postType, $type );
    }
}