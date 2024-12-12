<article>
    <?php echo get_post_format(); ?>
    <a href="<?php the_permalink(); ?>">
        <h2><?php the_title() ?></h2>
    </a>
    <a href="<?php the_permalink(); ?>">

        <?php
        the_post_thumbnail('thumbnail');
        // the_post_thumbnail((array(375, 275)));  

        ?>

    </a>

    <p>Posted in <?php echo get_the_date(); ?> by <?php the_author_posts_link(); ?></p>
    <p>Categories: <?php the_category(' '); ?> </p>
    <p><?php the_tags('Tags: ', ', '); ?></p>
    <p><?php the_content(); ?></p>

</article>