<?php
/**
 * Dokan TimeZone Helper Class
 */
class Dokan_TimeZone_Helper {
    /**
     * Get timezones
     *
     * @return array
     */
    public static function get_timezones() {
        return [
            __( 'GMT +01:00', 'dtz' ),
            __( 'GMT +01:30', 'dtz' ),
            __( 'GMT +02:00', 'dtz' ),
            __( 'GMT +02:30', 'dtz' ),
            __( 'GMT +03:00', 'dtz' ),
            __( 'GMT +04:30', 'dtz' ),
            __( 'GMT +05:00', 'dtz' ),
            __( 'GMT +05:30', 'dtz' ),
            __( 'GMT +06:00', 'dtz' ),
            __( 'GMT +06:30', 'dtz' ),
            __( 'GMT +07:00', 'dtz' ),
            __( 'GMT +07:30', 'dtz' ),
            __( 'GMT +08:00', 'dtz' ),
            __( 'GMT +08:30', 'dtz' ),
            __( 'GMT +09:00', 'dtz' ),
            __( 'GMT +09:30', 'dtz' ),
            __( 'GMT +10:00', 'dtz' ),
            __( 'GMT +10:30', 'dtz' ),
            __( 'GMT +11:00', 'dtz' ),
            __( 'GMT +11:30', 'dtz' ),
            __( 'GMT +12:00', 'dtz' ),
            __( 'GMT 00:00', 'dtz' ),
            __( 'GMT -0:30', 'dtz' ),
            __( 'GMT -01:00', 'dtz' ),
            __( 'GMT -01:30', 'dtz' ),
            __( 'GMT -02:00', 'dtz' ),
            __( 'GMT -03:00', 'dtz' ),
            __( 'GMT -03:30', 'dtz' ),
            __( 'GMT -04:00', 'dtz' ),
            __( 'GMT -04:30', 'dtz' ),
            __( 'GMT -05:00', 'dtz' ),
            __( 'GMT -05:30', 'dtz' ),
            __( 'GMT -06:00', 'dtz' ),
            __( 'GMT -06:30', 'dtz' ),
            __( 'GMT -07:00', 'dtz' ),
            __( 'GMT -07:30', 'dtz' ),
            __( 'GMT -08:00', 'dtz' ),
            __( 'GMT -08:30', 'dtz' ),
            __( 'GMT -09:00', 'dtz' ),
            __( 'GMT -09:30', 'dtz' ),
            __( 'GMT -10:00', 'dtz' ),
            __( 'GMT -10:30', 'dtz' ),
            __( 'GMT -11:00', 'dtz' ),
            __( 'GMT -11:30', 'dtz' ),
        ];
    }

    /**
     * Get vendor id from product id
     *
     * @param  int $id
     *
     * @return int
     */
    public static function get_vendor_id_from_product( $id ) {
        if ( ! $id ) {
            return;
        }

        $vendor_id = get_post_field( 'post_author', $id );

        return ! empty( $vendor_id ) ? $vendor_id : null;
    }
}