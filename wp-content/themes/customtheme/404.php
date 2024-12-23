<?php get_header() ?>

<img class="img-fluid" src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />

<div class="content-area">
    <main>
        <section class="middle-area">
            <div class="container">
                <div class="row ">
                    <div class="archive col-md-9">
                        <div class="error-404">
                            <header>
                                <h1><?php _e('Page not found ', 'wp_custom_theme') ?> </h1>
                                <p> <?php _e("Unfortunatly, the page you tried to reach doesn't exist on this site!", 'wp_custom_theme') ?> </p>
                            </header>
                            <div class="error">
                                <p> <?php _e('How about doing a search', 'wp_custom_theme') ?> </p>
                                <?php get_search_form(); ?>
                                <?php the_widget('WP_Widget_Recent_Posts', array('title' => __('Latest Posts', 'wp_custom_theme'), 'number' => 3)) ?>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
</div>
</section>
</main>
</div>
<?php get_footer() ?>