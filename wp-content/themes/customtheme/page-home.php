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
                    <iframe class="googlemap" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d448193.9510303648!2d76.76356891374634!3d28.644287353477026!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cfd5b347eb62d%3A0x37205b715389640!2sDelhi!5e0!3m2!1sen!2sin!4v1734096087746!5m2!1sen!2sin" width="400" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </section>
    </main>
</div>
<?php get_footer() ?>