<?php
/*
Plugin Name: Simple Reverse Comments
Plugin Script: simple-reversecomments.php
Plugin URI: http://sudarmuthu.com/wordpress/reverse-comments 
Description: Displays the comments in reverse order. No need to make any change to the theme
Version: 0.1
License: GPL
Author: Sudar
Author URI: http://sudarmuthu.com/ 

=== RELEASE NOTES ===
2008-02-09 - v0.1 - first version
*/

/**
 * Reverse comments 
 *
 * @param $comments
 */

if (!function_exists('smrc_reverse_comments')) {
	function smrc_reverse_comments($comments) {
		return array_reverse($comments);
	}	
}

add_filter ('comments_array', 'smrc_reverse_comments');
?>