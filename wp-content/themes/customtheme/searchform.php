<form role="search" method="get" class="search-form" action="<?php echo esc_url(home_url('/')); ?>">
    <div class="input-group">
        <input type="search"
            class="form-control"
            placeholder="<?php echo esc_attr_x('Search...', 'placeholder', 'textdomain'); ?>"
            value="<?php echo get_search_query(); ?>"
            name="s"
            aria-label="<?php echo esc_attr_x('Search for:', 'label', 'textdomain'); ?>">
        <div class="input-group-append">
            <button class="btn btn-primary" type="submit" aria-label="<?php echo esc_attr_x('Submit search', 'button', 'textdomain'); ?>">
                ok
            </button>
        </div>
    </div>
</form>