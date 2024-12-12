<article id="<?php the_ID() ?>" <?php post_class() ?>>
    <header>
        <h2><?php the_title() ?></h2>
        <div class="meta-info">
            <p>Posted in <?php echo get_the_date(); ?> by <?php the_author_posts_link(); ?> </p>
            <?php
            if (has_category()):
            ?>
                <p>Categories : <span><?php the_category(' '); ?></p>
            <?php endif; ?>
            <p><?php the_tags('Tags: ', ', '); ?></p>
        </div>
        <div class="content">
            <?php the_excerpt(); ?>
        </div>
    </header>
</article>