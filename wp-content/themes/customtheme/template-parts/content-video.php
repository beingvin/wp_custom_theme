<article <?php post_class() ?>>
    <p class="post_format"><?php echo get_post_format(); ?></p>
    <a href="<?php the_permalink(); ?>">
        <h2><?php the_title() ?></h2>
    </a>
    <a href="<?php the_permalink(); ?>">
        <?php
        the_post_thumbnail('thumbnail');
        ?>
    </a>
    <p>Posted in <?php echo get_the_date(); ?></p>
    <p>Categories: <?php the_category(' '); ?> </p>
    <p><?php the_tags('Tags: ', ', '); ?></p>
    <p><?php the_content(); ?></p>

</article>  