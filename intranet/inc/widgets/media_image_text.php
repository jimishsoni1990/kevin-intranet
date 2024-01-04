<?php
$imageMedia = get_sub_field('image_media'); // Get the image URL from ACF field "image"
$mediaText = get_sub_field('media_text'); // Get the content from ACF field "media_text"
?>

 

<div class="d-flex">
<div class="flex-shrink-0">
<?php if ($imageMedia) : ?>
<img src="<?php echo esc_url($imageMedia['url']); ?>" alt="">
<?php endif; ?>
</div>
<div class="flex-grow-1 ms-3">
<?php echo $mediaText; ?>
</div>
</div>