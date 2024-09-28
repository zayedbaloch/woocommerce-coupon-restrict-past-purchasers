<?php
/**
 * Plugin Name: WooCommerce Coupon - Restrict to Past Purchasers
 * Plugin URI:  https://zayedbaloch.com/
 * Description: Adds a custom option to restrict WooCommerce coupons to users who have made previous purchases.
 * Version:     1.0.0
 * Author:      Zayed Baloch
 * Author URI:  https://zayedbaloch.com/
 * License:     GPL-2.0+
 * Text Domain: woocommerce-coupon-restrict-past-purchasers
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// Add the custom checkbox field to the coupon edit screen
add_action('woocommerce_coupon_options', 'add_custom_coupon_field');

function add_custom_coupon_field($coupon_id) {
    // Get the current value of the checkbox (if editing an existing coupon)
    $checked = get_post_meta($coupon_id, 'restrict_to_past_purchasers', true);
    
    // Add a custom field (checkbox)
    woocommerce_wp_checkbox( array(
        'id'            => 'restrict_to_past_purchasers',
        'label'         => __('Restrict to past purchasers', 'woocommerce'),
        'description'   => __('Check this box to restrict this coupon to users who have made previous purchases.', 'woocommerce'),
        'value'         => $checked,
    ) );
}

// Save the custom checkbox field value
add_action('woocommerce_coupon_options_save', 'save_custom_coupon_field');

function save_custom_coupon_field($coupon_id) {
    $is_checked = isset($_POST['restrict_to_past_purchasers']) ? 'yes' : 'no';
    update_post_meta($coupon_id, 'restrict_to_past_purchasers', $is_checked);
}

// Restrict coupon to users with past purchases if the checkbox is checked
add_filter('woocommerce_coupon_is_valid', 'validate_coupon_for_past_purchasers', 10, 3);

function validate_coupon_for_past_purchasers($valid, $coupon, $discount) {
    // Get the value of the custom field (checkbox)
    $restrict_to_past_purchasers = get_post_meta($coupon->get_id(), 'restrict_to_past_purchasers', true);

    // Only apply the restriction if the checkbox is checked
    if ($restrict_to_past_purchasers === 'yes') {
        if (is_user_logged_in()) {
            $user_id = get_current_user_id();
            
            // Get the user's past orders
            $customer_orders = wc_get_orders(array(
                'customer_id' => $user_id,
                'status' => array('completed', 'processing'),
            ));

            // If the user has no past orders, invalidate the coupon
            if (empty($customer_orders)) {
                wc_add_notice('This coupon is only available for users who have made a previous purchase.', 'error');
                $valid = false;
            }
        } else {
            wc_add_notice('You need to be logged in to use this coupon.', 'error');
            $valid = false;
        }
    }

    return $valid;
}
