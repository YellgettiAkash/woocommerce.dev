<?php

echo $image = get_the_post_thumbnail( $post->ID, apply_filters( 'single_product_large_thumbnail_size', 'shop_single' ), array(
'title' => $image_title,
'class' => "img-responsive img-custom-size {{ imageFrameClass }} {{ imageMatColorClass }} {{ imageMatHeightWidthClass }}"   
));



?>