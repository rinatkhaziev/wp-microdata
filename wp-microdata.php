<?php
/*
Plugin Name: Microdata
Description: Unleash the power of microformats on your site (Allows adding schema.org properties in your post content)
Author: Rinat Khaziev
Version: 0.1
Author URI: http://r1nat.com/
Text Domain: md
Domain Path: /language/

Copyright 2016 Rinat Khaziev

GNU General Public License, Free Software Foundation <http://creativecommons.org/licenses/GPL/2.0/>

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
*/

add_filter( 'wp_kses_allowed_html', 'microdata_wp_kses_allowed_html', 20, 2 );
/**
 * Add itemprop, itemscope, itemtype to the list of allowed attributes
 *
 * @param  array  $allowed_tags allowed tags and attributes
 * @param  string $context      current kses context
 * @return array               filtered tags and attributes
 */
function microdata_wp_kses_allowed_html( $allowed_tags, $context ) {
	switch ( $context ) {
		case 'post':
		case 'user_description':
		case 'pre_user_description':
			// Add schema.org tags
			$allowed_tags = array_map( function( $tag ) {
				return array_merge( (array) $tag, array(
					'itemprop' => true,
					'itemscope' => true,
					'itemtype' => true,
					'itemid' => true,
					'itemref' => true,
				));
			}, (array) $allowed_tags );
		break;
		default:
			// Just passthrough the value for the rest of contexts right now
	}

	return $allowed_tags;
}
