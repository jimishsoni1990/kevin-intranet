<?php
$image = get_sub_field('image'); // Get the image URL from ACF field
$link = get_sub_field('image_link'); // Get the URL from ACF field

 

if ($link) {
    echo '<a href="' . esc_url($link) . '"><img src="' . esc_url($image) . '" alt=""></a>';
} else {
    echo '<img src="' . esc_url($image) . '" alt="">';
}
