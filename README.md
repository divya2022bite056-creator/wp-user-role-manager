<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

define( 'WURM_PATH', plugin_dir_path( __FILE__ ) );

require_once WURM_PATH . 'includes/class-wurm-loader.php';

function wurm_run() {
    $loader = new WURM_Loader();
    $loader->run();
}

wurm_run();

