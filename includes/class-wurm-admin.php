<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

class WURM_Admin {

    public function menu() {
        add_menu_page(
            'User Role Manager',
            'User Roles',
            'manage_options',
            'wurm-roles',
            array( $this, 'page' ),
            'dashicons-admin-users'
        );
    }

    public function page() {

        if ( isset( $_POST['wurm_role'] ) && check_admin_referer( 'wurm_nonce_action', 'wurm_nonce' ) ) {
            $role = sanitize_text_field( $_POST['wurm_role'] );
            WURM_Roles::create( $role );
        }
        ?>
        <div class="wrap">
            <h1>User Role Manager</h1>
            <form method="post">
                <?php wp_nonce_field( 'wurm_nonce_action', 'wurm_nonce' ); ?>
                <input type="text" name="wurm_role" class="regular-text" required>
                <?php submit_button( 'Create Role' ); ?>
            </form>
        </div>
        <?php
    }
}
