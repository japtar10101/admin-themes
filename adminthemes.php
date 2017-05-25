<?php
/*
 * Plugin Name: Omiya Games' Admin Themes
 * Plugin URI: http://omiyagames.com
 * Description: Changes admin themes based on site index.
 * Version: 0.1
 * Author: Taro Omiya
 * Author URI: http://taroomiya.com
 * License: Taro Omiya
 **/

function change_admin_color($result) {
	switch(get_current_blog_id()) {
		case 1:
			return "light";
		case 2:
			return "sunrise";
		default:
			return "default";
	}
}
add_filter('get_user_option_admin_color', 'change_admin_color');
?>
