<?php

const SKEDME_LOGO = '';

class Skedme {
	public function __construct() {
        $this->version = '1.0.0';
        $this->plugin_name = 'skedme.io';
        $this->load_dependencies();
    }

    public function run() {
        add_action('init', array($this, 'init'));
    }

    public function init() {
        $this->define_assets();
        $this->set_locale();
        $this->define_public_hooks();
        $this->define_admin_hooks();

    }

    public function define_assets() {
        wp_register_style('skedme-admin', plugin_dir_url( dirname( __FILE__ ) ) . 'public/admin.css' );
        wp_register_script('skedme-admin', plugin_dir_url( dirname( __FILE__ ) ) . 'public/admin.js' );
        wp_enqueue_style('skedme-admin');
        wp_enqueue_script('skedme-admin');
    }

    public function load_dependencies() {
        require_once plugin_dir_path( dirname( __FILE__ ) ) . 'includes/Skedme_i18n.php';
        require_once plugin_dir_path( dirname( __FILE__ ) ) . 'includes/Skedme_partials.php';

        $this->partials = new Skedme_partials();
    }

    public function set_locale() {
        $plugin_i18n = new Skedme_i18n();
        load_plugin_textdomain(
            'skedme-io',
            false,
            dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
        );
    }

    public function define_admin_hooks() {
        add_action('admin_menu', array($this, 'create_menu'));
        add_action('admin_notices', array($this->partials, 'render_admin_notice'));
        if (function_exists('current_user_can') && current_user_can('manage_options')) {
            register_setting('skedme', 'skedmeKey');
            register_setting('skedme', 'skedmeSide', array('default' => 'left'));
            register_setting('skedme', 'skedmeTheme', array('default' => 'light'));
            register_setting('skedme', 'skedmeMargin', array('default' => '0'));
            register_setting('skedme', 'skedmeSize', array('default' => 'medium'));
            register_setting('skedme', 'skedmeShape', array('default' => 'round'));
        }
    }

    public function define_public_hooks() {
        add_action('wp_footer', array($this->partials, 'register_embed_script'));
    }

    public function create_menu() {
        add_menu_page('Sekdme configuration', 'Skedme.io', 'administrator', 'skedme_dashboard', array($this->partials, 'render_settings_page'), SKEDME_LOGO);
    }
}
