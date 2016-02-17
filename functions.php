<?php
/**
 * "Funny, 'cause I look around at this world you're so eager to be a part of and all I see is six billion
 * lunatics looking for the fastest ride out. Who's not crazy? Look around, everyone's drinking, smoking,
 * shooting up, shooting each other, or just plain screwing their brains out 'cause they don't want 'em anymore.
 * I'm crazy? Honey, I'm the original one-eyed chicklet in the kingdom of the blind, 'cause at least I admit the
 * world makes me nuts. Name one person who can take it here. That's all I'm asking. Name one."
 * ~ Glorificus (Buffy the Vampire Slayer: Season 5 - Weight of the World)
 *
 * Theme Authors: Make sure to add a favorite quote of yours above, maybe something that inspired you to
 * create this theme.
 *
 * This program is free software; you can redistribute it and/or modify it under the terms of the GNU
 * General Public License as published by the Free Software Foundation; either version 2 of the License,
 * or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without
 * even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 * You should have received a copy of the GNU General Public License along with this program; if not, write
 * to the Free Software Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA 02110-1301 USA
 *
 * @package    HybridBase
 * @subpackage Functions
 * @version    1.0.0
 * @author     Justin Tadlock <justin@justintadlock.com>
 * @copyright  Copyright (c) 2013 - 2015, Justin Tadlock
 * @link       http://themehybrid.com/themes/hybrid-base
 * @license    http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */

// Get the template directory and make sure it has a trailing slash.
$hybrid_base_dir = trailingslashit( get_template_directory() );

// Load the Hybrid Core framework and theme files.
require_once( $hybrid_base_dir . 'hybrid-core-4.0/hybrid.php'    );
require_once( $hybrid_base_dir . 'inc/custom-background.php' );
require_once( $hybrid_base_dir . 'inc/custom-header.php'     );
require_once( $hybrid_base_dir . 'inc/theme.php'             );

// Do theme setup on the 'after_setup_theme' hook.
add_action( 'after_setup_theme', 'hybrid_base_theme_setup', 5 );

/**
 * Theme setup function.  This function adds support for theme features and defines the default theme
 * actions and filters.
 *
 * @since  1.0.0
 * @access public
 * @return void
 */
function hybrid_base_theme_setup() {

    // Theme layouts.
    add_theme_support( 'theme-layouts', array( 'default' => is_rtl() ? '2c-r' :'2c-l' ) );

    // Enable custom template hierarchy.
    add_theme_support( 'hybrid-core-template-hierarchy' );

    // The best thumbnail/image script ever.
    add_theme_support( 'get-the-image' );

    // Breadcrumbs. Yay!
    add_theme_support( 'breadcrumb-trail' );

    // Nicer [gallery] shortcode implementation.
    add_theme_support( 'cleaner-gallery' );

    // Automatically add feed links to <head>.
    add_theme_support( 'automatic-feed-links' );

    // Post formats.
    add_theme_support(
        'post-formats',
        array( 'aside', 'audio', 'chat', 'image', 'gallery', 'link', 'quote', 'status', 'video' )
    );

    // Handle content width for embeds and images.
    hybrid_set_content_width( 1280 );

    /* Dynamic child theme setup. */

    /* Add wrap IDs. */
    add_filter( 'hybrid_attr_wrap', 'hbd_attr_wrap', 5, 2 );

    /* Dynamic parent theme re-implementation. */
    if ( is_child_theme() ) {
        return;
    }

    add_action( 'hbd_before_body', 'hbd_before_body' );
    add_action( 'hbd_header', 'hbd_header' );
    add_action( 'hbd_after_header', 'hbd_after_header' );
    add_action( 'hbd_before_main', 'hbd_before_main' );
    add_action( 'hbd_after_main', 'hbd_after_main' );
    add_action( 'hbd_before_footer', 'hbd_before_footer' );
    add_action( 'hbd_footer', 'hbd_footer' );
}

/**
 * Provides explicit IDs to all wrap elements.
 * Avoids element anonymity when disabling wrap class attribute.
 *
 * @since  1.0.0
 * @access public
 * @return void
 */
function hbd_attr_wrap( $attr, $context ) {
    $slug = 'wrap';

    $attr['id'] = sprintf( '%1$s-%2$s', $slug, $context );
    $attr['class'] = sprintf( '%1$s %2$s', $attr['id'], $slug );

    return $attr;
}

/**
 * Skip link, primary menu
 *
 * @since  1.0.0
 * @access public
 * @return void
 */
function hbd_before_body() {
    get_template_part( 'before-body', 'skip-link' );
    hybrid_get_menu( 'primary' ); // Loads the menu/primary.php template.
}

/**
 * Branding, site title
 *
 * @since  1.0.0
 * @access public
 * @return void
 */
function hbd_header() {
    hybrid_get_header( 'hbd' );
}

/**
 * Secondary menu, header image
 *
 * @since  1.0.0
 * @access public
 * @return void
 */
function hbd_after_header() {
    hybrid_get_menu( 'secondary' ); // Loads the menu/secondary.php template.
    hybrid_get_header( 'hbd-after' );
}

/**
 * Breadcrumbs
 *
 * @since  1.0.0
 * @access public
 * @return void
 */
function hbd_before_main() {
    hybrid_get_menu( 'breadcrumbs' ); // Loads the menu/breadcrumbs.php template.
}

/**
 * Primary sidebar
 *
 * @since  1.0.0
 * @access public
 * @return void
 */
function hbd_after_main() {
    hybrid_get_sidebar( 'primary' ); // Loads the sidebar/primary.php template.
}

/**
 * Subsidiary sidebar, subsidiary menu
 *
 * @since  1.0.0
 * @access public
 * @return void
 */
function hbd_before_footer() {
    hybrid_get_sidebar( 'subsidiary' ); // Loads the sidebar/subsidiary.php template.
    hybrid_get_menu( 'subsidiary' ); // Loads the menu/subsidiary.php template.
}

/**
 * Credits
 *
 * @since  1.0.0
 * @access public
 * @return void
 */
function hbd_footer() {
    hybrid_get_footer( 'hbd' );
}
