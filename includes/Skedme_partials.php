<?php

class Skedme_partials {
    public function render_admin_notice() {
        $key = get_option('skedmeKey');
        if (! $key) {
            echo '<div class="error"><p><strong>' .  sprintf( __( 'Your button by Skedme Plugin is disabled. Please go to the <a href="%s">plugin settings</a> to enter a valid key.'), admin_url('options-general.php?page=skedme_dashboard')) .  '</strong></p></div>';
        }
    }

    public function register_embed_script() {
        $key = get_option('skedmeKey');
        if (! $key) { return; }

        wp_register_script('service-finder-booking.js','https://skedme.io/assets/service-finder-booking.js');
        wp_enqueue_script('service-finder-booking.js');
        add_filter('script_loader_tag', array($this, 'add_attributes_to_tag'), 10, 2);
    }


    public function add_attributes_to_tag($tag, $handle) {
        $key = get_option('skedmeKey');
        $side = get_option('skedmeSide', 'left');

        $margin = get_option('skedmeMargin');
        $theme = get_option('skedmeTheme', 'light');
        $size = get_option('skedmeSize', 'medium');
        $shape = get_option('skedmeShape', 'round');

        if ($side === 'right') {
            $horizontalMargin = "-$margin";
        } else {
            $horizontalMargin = $margin;
        }

        if ('service-finder-booking.js' === $handle) {
            $attributes = " side=\"$side\" "
                . "horizontalMargin=\"$horizontalMargin\" " 
                . "size=\"$size\" "
                . "shape=\"$shape\" "
                . "theme=\"$theme\" "
                . "key=\"$key\"";

            $tag = str_replace('<script ', "<script $attributes " , $tag);
        }

        return $tag;
    }

    public function render_settings_page() {
        $this->render('settings_page');
    }

    public function render($page) {
        if (! preg_match("/[A-Za-z_]/", $page)) { return; }

        include_once plugin_dir_path( dirname( __FILE__ ) ) . "partials/$page.php";
    }
}
