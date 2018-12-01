<?php
/**
 * Dokan TimeZone Settings Class
 */
class Dokan_TimeZone_Settings {
    public function __construct() {
        add_action( 'dokan_settings_form_bottom', [ $this, 'add_timezone' ], 20, 2 );
        add_action( 'dokan_store_profile_saved', [ $this, 'save_timezone' ], 20, 2 );
    }

    /**
     * Ssave Timezone
     *
     * @param  int $user_id
     * @param  array $settings
     *
     * @return void
     */
    public function save_timezone( $user_id, $settings ) {
        if ( ! isset( $_POST['dokan_timezone'] ) ) {
            return;
        }

        $settings['timezone'] = $_POST['dokan_timezone'];

        update_user_meta( $user_id, 'dokan_profile_settings', $settings );
    }

    /**
     * Add Timezone template
     *
     * @param int $current_user
     * @param array $vendor_info
     *
     * @return void
     */
    public function add_timezone( $current_user, $vendor_info ) {
        $timezone = isset( $vendor_info['timezone'] ) ? $vendor_info['timezone'] : '';
    ?>
        <div class="dokan-form-group">
            <label class="dokan-w3 dokan-control-label" for="timezone">
                <?php _e( 'Select Time Zone', 'dtz' ); ?>
            </label>
            <div class="dokan-w5">
                <select name="dokan_timezone">
                    <?php foreach ( Dokan_TimeZone_Helper::get_timezones() as $key => $value ) : ?>
                        <option value="<?php echo wc_clean( $value ); ?>" <?php selected( $timezone, $value ); ?>><?php echo wc_clean( $value ); ?></option>
                    <?php endforeach;?>
                </select>
            </div>
        </div>
    <?php
    }
}