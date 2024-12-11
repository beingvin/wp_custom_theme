<?php get_header() ?>
<img class="img-fluid" src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />
<div class="content-area">
    <main>
        <section class="slide">
            <div class="container">
                <div class="row text-center">
                    Slide
                </div>
            </div>
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
                        News
                    </div>
                </div>
            </div>
        </section>
        <section class="map">
            <div class="container">
                <div class="row text-center">
                    Map
                </div>
            </div>
        </section>
    </main>
</div>
<?php get_footer() ?>