<article>
    <p class="post_format"><?php echo get_post_format(); ?></p>
    <h2><?php the_title() ?></h2>
    <?php
    the_post_thumbnail('thumbnail');
    ?>
    <p<?php the_author_posts_link(); ?>< /p>
        <p>Categories: <?php the_category(' '); ?> </p>
        <p><?php the_tags('Tags: ', ', '); ?></p>
        <p><?php the_content(); ?></p>

</article>