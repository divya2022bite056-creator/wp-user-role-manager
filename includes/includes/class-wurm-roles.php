<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

class WURM_Roles {

    public static function create( $name ) {
        $key = strtolower( $name );

        if ( ! get_role( $key ) ) {
            add_role(
                $key,
                ucfirst( $name ),
                array(
                    'read' => true
                )
            );
        }
    }
}
