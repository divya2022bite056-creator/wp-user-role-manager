<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

class WURM_Loader {

    public function __construct() {
        require_once plugin_dir_path( dirname( __FILE__ ) ) . 'includes/class-wurm-admin.php';
    }

    public function run() {
        add_action( 'admin_menu', array( $this, 'load_admin' ) );
    }

    public function load_admin() {
        $admin = new WURM_Admin();
        $admin->register_menu();
    }
}

