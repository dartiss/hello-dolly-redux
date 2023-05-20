=== Hello Dolly Redux ===
Contributors: matt, wordpressdotorg, dartiss
Tags: dashboard, admin, lyrics, music
Requires at least: 4.6
Tested up to: 6.2
Requires PHP: 7.4
Stable tag: 0.1
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

This is not just a plugin, it symbolizes the hope and enthusiasm of an entire generation summed up in two words sung most famously by Louis Armstrong.

== Description ==

This is not just a plugin, it symbolizes the hope and enthusiasm of an entire generation summed up in two words sung most famously by Louis Armstrong: Hello, Dolly. When activated you will randomly see a lyric from <cite>Hello, Dolly</cite> in the upper right of your admin screen on every page.

Thanks to Sanjib Ahmad for the artwork.

== Frequently Asked Questions ==

= Why is Hello Dolly included with WordPress? =

This plugin is included to demonstrate how easy it is to write plugins for WordPress - one of the many reasons why WordPress is so loved as a CRM. You are free to disable and/or uninstall it but, if you've never written a plugin before, please take a look at the code and consider writing something of your own.

== Screenshots ==

1. An example of Hello Dolly lyrics on the WordPress dashboard.

== Changelog ==

= 0.1 =
* Added new meta header to the main plugin file.
* Removed the in-line CSS and enqueued it as an external file.
* Created both a minimised (31.25% reduction in size) and non-minimised version of the CSS (the former is used by the plugin).
* Improved escaping of output.
* The lyrics are now translatable.
* Replaced with `mt_rand` with `wp_rand`, as that produces more purely randomised results.
* Lots of additional comments in the code to better explain what's happening.
* Compressed the image assets (non-lossy, using MozJPEG and JpegOptim), reducing them by 63.5%
* Re-wrote this README, adding in additional content and making it a better example of what's required.
* Added a screenshot.

== Upgrade Notice ==

= 0.1 =
* Initial release based on fork of Hello Dolly 1.7.2.