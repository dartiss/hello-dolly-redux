<?php
/**
 * Hello Dolly Redux
 *
 * @package           Hello_Dolly
 * @author            Matt Mullenweg
 * @license           GPL-2.0-or-later
 *
 * Plugin Name:       Hello Dolly Redux
 * Plugin URI:        https://wordpress.org/plugins/hello-dolly/
 * Description:       This is not just a plugin, it symbolizes the hope and enthusiasm of an entire generation summed up in two words sung most famously by Louis Armstrong: Hello, Dolly. When activated you will randomly see a lyric from <cite>Hello, Dolly</cite> in the upper right of your admin screen on every page.
 * Version:           0.1
 * Requires at least: 4.6
 * Requires PHP:      7.4
 * Author:            Matt Mullenweg
 * Author URI:        http://ma.tt/
 * Text Domain:       hello-dolly
 * License:           GPL v2 or later
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 *
 * This program is free software; you can redistribute it and/or modify it under the terms of the GNU
 * General Public License version 2, as published by the Free Software Foundation. You may NOT assume
 * that you can use any other version of the GPL.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without
 * even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 */
function hello_dolly_get_lyric() {

	// These are the lyrics to Hello Dolly.

	$lyrics = __(
		"Hello, Dolly
Well, hello, Dolly
It's so nice to have you back where you belong
You're lookin' swell, Dolly
I can tell, Dolly
You're still glowin', you're still crowin'
You're still goin' strong
I feel the room swayin'
While the band's playin'
One of our old favorite songs from way back when
So, take her wrap, fellas
Dolly, never go away again
Hello, Dolly
Well, hello, Dolly
It's so nice to have you back where you belong
You're lookin' swell, Dolly
I can tell, Dolly
You're still glowin', you're still crowin'
You're still goin' strong
I feel the room swayin'
While the band's playin'
One of our old favorite songs from way back when
So, golly, gee, fellas
Have a little faith in me, fellas
Dolly, never go away
Promise, you'll never go away
Dolly'll never go away again",
		'hello-dolly'
	);

	// Here we split the above string into individual lines, placing the result into an array.
	$lyrics = explode( "\n", $lyrics );

	// We randomly choose a line to display.
	return wptexturize( $lyrics[ wp_rand( 0, count( $lyrics ) - 1 ) ] );
}

/**
 * Displays lyrics.
 *
 * This just echoes the chosen line, we will position it later.
 */
function hello_dolly() {

	// Get a random line of the lyric.
	$chosen = hello_dolly_get_lyric();

	// Get the current user's locale.
	$lang = '';
	if ( 'en_' !== substr( get_user_locale(), 0, 3 ) ) {
		$lang = ' lang="en"';
	}

	// Now, output the lyrics, with an appropriate HTML wrapper.
	printf(
		'<p id="dolly"><span class="screen-reader-text">%s </span><span dir="ltr"%s>%s</span></p>',
		esc_html__( 'Quote from Hello Dolly song, by Jerry Herman:', 'hello-dolly' ),
		esc_html( $lang ),
		esc_html( $chosen )
	);
}

// Now we set that function up to execute when the admin_notices action is called.
add_action( 'admin_notices', 'hello_dolly' );

/**
 * Enqueues CSS.
 *
 * This makes use of the enqueue functions to load the CSS file.
 * We are loading the -min version of the file which is compressed. The non-compressed version of the file is also
 * in the plugin folder, which is more "human readable".
 */
function dolly_css() {
	wp_register_style( 'hello_dolly_css', plugin_dir_path( __FILE__ ) . 'hello-dolly-min.css', false, '1.0.0' );
	wp_enqueue_style( 'hello_dolly_css' );
}

// This actions specifies the above function to be called only when loading scripts in admin (not the site's front-end).
add_action( 'admin_enqueue_scripts', 'dolly_css' );
