=== WooCommerce Coupon - Restrict to Past Purchasers ===
Contributors: Zayed Baloch
Donate link: https://www.paypal.me/zayedbaloch
Tags: woocommerce, coupon, restrict, past purchasers, order history
Requires at least: 5.0
Tested up to: 6.3
Requires PHP: 7.2
Stable tag: 1.0.0
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

This plugin adds a custom option in WooCommerce coupons to restrict their usage to customers who have made a previous purchase.

== Description ==

WooCommerce Coupon - Restrict to Past Purchasers allows store owners to restrict coupons to users who have placed an order before. A new option is added in the coupon creation screen where you can enable or disable this restriction. Once enabled, the coupon will only be valid for logged-in users with at least one completed or processing order.

== Features ==

* Adds a "Restrict to past purchasers" checkbox in WooCommerce coupon settings.
* Validates coupon usage based on the user's order history.
* Displays an error message if the user is not eligible to use the coupon.
* Works with both completed and processing orders.

== Installation ==

1. Download the plugin.
2. Upload the plugin folder to the `/wp-content/plugins/` directory, or install the plugin through the WordPress plugins screen directly.
3. Activate the plugin through the 'Plugins' screen in WordPress.
4. When creating or editing a coupon, check the "Restrict to past purchasers" checkbox to enable this feature.

== Changelog ==

= 1.0.0 =
* Initial release of the plugin.

== Frequently Asked Questions ==

= Does this plugin work with all WooCommerce coupons? =

Yes, this plugin works with all WooCommerce coupons. The restriction can be enabled or disabled for each coupon individually.

= What happens if a user without previous purchases tries to use the coupon? =

If the user is not eligible (i.e., they have not placed a completed or processing order), they will see an error message and the coupon will not be applied.

== License ==

This plugin is released under the GPLv2 or later license. You can find the full text of the license at [GPLv2 License](https://www.gnu.org/licenses/gpl-2.0.html).
