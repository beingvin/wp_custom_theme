<?php get_header() ?>
<img class="img-fluid" src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />
<div class="content-area">
    <main>
        <section class="slide">
            <?php
            echo do_shortcode('[smartslider3 alias="home-slider"]');
            ?>
        </section>
        <section class="services">
            <div class="container p-5">
                <h2>Our Services</h2>
                <div class="row py-5">
                    <div class="col-sm-4 b-">
                        <div class="services-item ">
                            <?php
                            if (is_active_sidebar('services-1')) {
                                dynamic_sidebar('services-1');
                            }
                            ?>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="services-item">
                            <?php
                            if (is_active_sidebar('services-2')) {
                                dynamic_sidebar('services-2');
                            }
                            ?>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="services-item">
                            <?php
                            if (is_active_sidebar('services-3')) {
                                dynamic_sidebar('services-3');
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="middle-area">
            <div class="container">
                <div class="row ">
                    <aside class="sidebar col-md-3 h-100 py-5"><?php get_sidebar('home'); ?></aside>
                    <div class="news col-md-9">
                        <div class="row">
                            <?php
                            // First Loop
                            $featured = new WP_Query('post_type=post&posts_per_page=1&cat=22,17');
                            if ($featured->have_posts()):
                                while ($featured->have_posts()): $featured->the_post();
                            ?>
                                    <div class="col-12">
                                        <?php get_template_part('template-parts/content', 'featured') ?>
                                    </div>
                                <?php
                                endwhile;
                                wp_reset_postdata();
                            endif;

                            // Second Loop
                            $args = array(
                                'post_type' => 'post',
                                'posts_per_page' => 2,
                                'category__not_in' => array(17),
                                'category__in' => array(22),
                                'offset' => 1
                            );
                            $secondary = new WP_Query($args);
                            if ($secondary->have_posts()):
                                ?>
                                <div class="row">
                                    <?php
                                    while ($secondary->have_posts()): $secondary->the_post();
                                    ?>
                                        <div class="col-sm-6 mb-3">
                                            <?php get_template_part('template-parts/content', 'secondary') ?>
                                        </div>
                                    <?php
                                    endwhile;
                                    ?>
                                </div>
                            <?php
                                wp_reset_postdata();
                            endif;
                            ?>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <section class="map">
            <div class="container">
                <div class="row text-center">
                    <?php
                    if (get_theme_mod('set_map_src')) {
                        // If a custom map source is set, use it
                        $address = get_theme_mod('set_map_src');
                    ?>
                        <iframe class="googlemap" src="<?php echo esc_url($address); ?>" width="400" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <?php
                    } else {
                        // If no custom map source, use API key and address
                        $key = get_theme_mod('set_map_apikey');
                        $address = urlencode(get_theme_mod('set_map_address'));
                    ?>
                        <iframe
                            width="100%"
                            height="350"
                            frameborder="0"
                            style="border:0;"
                            src="https://www.google.com/maps/embed/v1/place?key=<?php echo esc_attr($key); ?>&q=<?php echo esc_attr($address); ?>&zoom=15"
                            allowfullscreen>
                        </iframe>
                    <?php
                    }
                    ?>


                </div>
            </div>
        </section>
    </main>
</div>
<?php get_footer() ?>