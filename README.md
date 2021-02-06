=== payro24 Payment Gateway for Woocommerce ===
Contributors: majidlotfinia, jazaali, imikiani, vispa, mnbp1371
Tags: woocommerce, payment, payro24, gateway, پیرو
Stable tag: 2.1.1
Tested up to: 5.2
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

[payro24](https://payro24.ir) payment method for [Woocommerce](https://wordpress.org/plugins/woocommerce/).

== Description ==

[payro24](https://payro24.ir) is one of the Financial Technology providers in Iran.

payro24 provides some payment services and this plugin enables the payro24's payment gateway for Woocommerce.

== Installation ==

After creating a web service on https://payro24.ir and getting an API Key, follow this instruction:

1. Activate plugin payro24 for Woocommerce.
2. Go tho WooCommerce > Settings > Payments.
3. Enable payro24 payment gateway.
4. Go to Manage.
5. Enter the API Key.

If you need to use this plugin in Test mode, check the "Sandbox".

Also there is a complete documentation [here](https://blog.payro24.ir/helps/99) which helps you to install the plugin step by step.

Thank you so much for using payro24 Payment Gateway.

== Changelog ==

= 2.1.1, October 19, 2020 =
* Support GET method in Callback.

= 2.1.0, Jul 08, 2020 =
* Improved double spending checking.
* Compelete downloadable orders after payment.
* Improved record logs.
* Improved display messages of payment status.

= 2.0.2, May 08, 2019 =
* Reorganize files.
* Try to connect to the gateway more than one time.
* Log hashed card number.
* Sanitize text fields.

= 2.0.1, February 06, 2019 =
* Fix bug.

= 2.0, February 05, 2019 =
* Publish for web service version 1.1.
* Improvements in the code.
* Increase timeout of wp_safe_remote_post().
* Fix bugs.
* Send customer information such as phone and email to the gateway.

= 1.0.6, December 09, 2018 =
* Change order status to 'processing' after a successful payment.
* Add 'Domain Path' to the plugin descriptions.

= 1.0.5, December 08, 2018 =
* Solve problem with strings' translations.

= 1.0.4, December 01, 2018 =
* Change text domain.
* Add asset images.

= 1.0.3, November 21, 2018 =
* [Coding Standards](https://codex.wordpress.org/WordPress_Coding_Standards).
* Change files structure.
* PHP documentations.
* Use wp_safe_remote_post() instead of curl.
* Translation of strings.

= 1.0.2, November 10, 2018 =
* Save and show errors which might be occurred during the payment process.

= 1.0.1, November 10, 2018 =
* Save card number when saving the payment details.

= 1.0, October 15, 2018 =
* First release.
# woo-payro24-gateway-master
