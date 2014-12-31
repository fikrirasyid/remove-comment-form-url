<?php
/*
 Plugin Name: Remove Comment Form URL Input
 Plugin URI: http://fikrirasy.id/portfolio/remove-comment-form-notes/
 Description: This plugin only does one thing: removing comment form URL input
 Author: Fikri Rasyid
 Version: 1.0
 Author URI: http://fikrirasy.id
*/

/**
 * Adding filter, and removing unwanted form notes. Quick and simple
 */
function rcfu_remove_comment_form_url( $fields ){
	$fields['url'] = false;

	return $fields;
}
add_filter( 'comment_form_default_fields', 'rcfu_remove_comment_form_url' );