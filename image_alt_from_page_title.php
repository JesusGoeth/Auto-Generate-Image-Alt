<?php
/**
 * Automatically adds alt text to images based on the current page or post title.
 * Intended for use in a theme’s functions.php or included from a functions folder.
 */

function image_alt_from_page_title($attr, $attachment) {
    global $post;

    if (empty($attr['alt']) && $post) {
        $attr['alt'] = get_the_title($post->ID) . ' image';
    }

    return $attr;
}
add_filter('wp_get_attachment_image_attributes', 'image_alt_from_page_title', 10, 2);
