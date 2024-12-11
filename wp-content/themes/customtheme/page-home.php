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
            <div class="container">
                <div class="row">
                    Services
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