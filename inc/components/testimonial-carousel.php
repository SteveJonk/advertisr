<?php

function testimonial_carousel_function()
{

    $post = new WP_Query(array(
        'posts_per_page' => -1,
        'post_type' => 'testimonial',
        'orderby' => 'menu_order',
        'order' => 'ASC'
    ));

    ob_start(); ?>
    <div class="swiper">
        <div class="swiper-wrapper">
            <?php while ($post->have_posts()) {
                $post->the_post(); ?>

                <div class="swiper-slide">
                    <div class="swiper-slide__inner lg:w-[85%] mx-auto">
                        <div class="container">
                            <?php the_content(); ?>
                        </div>
                    </div>
                </div>

            <?php } ?>
        </div>

        <div class="swiper-button swiper-button-prev"></div>
        <div class="swiper-button swiper-button-next"></div>
    </div>
    <?php
    wp_reset_postdata(); ?>


<?php return ob_get_clean();
}

add_shortcode('testimonials', 'testimonial_carousel_function');

?>