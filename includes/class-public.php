<?php

/**
 * Dokan_TimeZone_Public Class
 */
class Dokan_TimeZone_Public {
    public function __construct() {
        add_action( 'woocommerce_after_add_to_cart_form', [ $this, 'display_timezone' ] );
        add_action( 'woocommerce_shop_loop_item_title', [ $this, 'display_timezone' ] );
    }

    /**
     * Display TimeZone
     *
     * @param int $id
     *
     * @return string
     */
    public function display_timezone( $id ) {
        global $product;

        $vendor_id   = Dokan_TimeZone_Helper::get_vendor_id_from_product( $product->get_id() );

        $vendor_info = dokan_get_store_info( $vendor_id );

        $timezone    = isset( $vendor_info['timezone'] ) ? $vendor_info['timezone'] : '';

        if ( ! $timezone ) {
            return;
        }

        printf( '<span class="timezone">%s: </span> <span class="timezone-value"> %s</span>', __( 'Time Zone', 'dtz' ), $timezone );
    }
}