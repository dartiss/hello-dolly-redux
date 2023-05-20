=== Hello Dolly Redux ===
Contributors: matt, wordpressdotorg, dartiss
Tags: market, coverage, share, w3tech, cms
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

== Installation ==

World Domination can be found and installed via the Plugin menu within WordPress administration (Plugins -> Add New). Alternatively, it can be downloaded from WordPress.org and installed manually...

1. Upload the entire `world-domination` folder to your `wp-content/plugins/` directory.
2. Activate the plugin through the 'Plugins' menu in WordPress administration.

Voila! It's ready to go.

== Frequently Asked Questions ==

= Hey! My dashboard figure is different to the one shown on W3Techs =

For performance reasons I cache the dashboard information for one week so, if the market figure changes in the meantime, you will get this discrepancy. If you find this keeps happening, please let me know and I’ll look at refreshing the cache more regularly.

= I don't like the graphic on the dashboard that shows the percentage. Can I switch it off? =

Yes you can! Head to Settings -> General in WP Admin and find the tickbox for this.

= The dashboard graphic keeps changing color! =

One of the parameters to generate the image is a hash - I pass a different one into it based on the current date, so will change daily.

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

== Upgrade Notice ==

= 0.1 =
* Initial release based on fork of Hello Dolly 1.7.2.