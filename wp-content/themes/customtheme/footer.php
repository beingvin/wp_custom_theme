<footer>
    <div class="container">
        <div class="row">
            <div class="copyright col-sm-7 col-4">
                <p><?php echo get_theme_mod('set_copyright'); ?> </p>
            </div>
            <nav class="footer-menu col-sm-5 col-8 text-right ">
                <?php wp_nav_menu(array('them_location' => "footer_menu")); ?>
            </nav>
        </div>
    </div>
</footer>
<?php wp_footer() ?>

//fitvids.js
<script>
  jQuery(document).ready(function($){
    // Target your .container, .wrapper, .post, etc.
    $(".is-type-video").fitVids();
  });
</script>


</body>

</html>