# WooCommerce Coupon - Restrict to Past Purchasers

**Version:** 1.0.0  
**License:** GPLv2 or later  
**Author:** [Zayed Baloch](https://zayedbaloch.com)

This plugin adds an option to WooCommerce coupons that restricts their usage to customers who have made a previous purchase. Store owners can enable or disable this restriction in the coupon creation and edit screens.

## Features

- Adds a checkbox to WooCommerce coupon settings: "Restrict to past purchasers."
- Only allows users with previous purchases to use the coupon.
- Displays an error message if the coupon is not valid for the user.
- Compatible with WooCommerce order statuses: "Completed" and "Processing."
- Easy to enable or disable for individual coupons.

## Installation

To install the plugin, follow these steps:

1. Clone the repository or [download the latest release](https://github.com/zayedbaloch/woocommerce-coupon-restrict-past-purchasers).
2. Upload the `woocommerce-coupon-restrict-past-purchasers` folder to your WordPress site's `/wp-content/plugins/` directory.
3. Activate the plugin from the **Plugins** section in your WordPress dashboard.
4. When creating or editing a WooCommerce coupon, check the "Restrict to past purchasers" checkbox to enable this feature.

## Usage

Once activated, go to **WooCommerce > Coupons**, create or edit a coupon, and you’ll find a checkbox labeled **Restrict to past purchasers** under the coupon settings. When this option is enabled, only customers who have placed at least one order with a "Completed" or "Processing" status can use the coupon.

## Requirements

- WordPress 5.0 or higher
- WooCommerce 3.0 or higher
- PHP 7.2 or higher

## Frequently Asked Questions

### Does this plugin work with all types of WooCommerce coupons?

Yes, the restriction can be applied to any type of WooCommerce coupon.

### Can I choose which coupons to restrict?

Yes, each coupon can be individually enabled or disabled for the restriction.

### What happens if a customer without past orders tries to use the coupon?

The customer will receive an error message and the coupon will not be applied.

## Contributing

Feel free to submit issues or contribute to this project by creating a pull request. We welcome all contributions!

## Changelog

### 1.0.0

- Initial release

## License

This plugin is licensed under the GPLv2 or later. See the [LICENSE](LICENSE) file for more details.
