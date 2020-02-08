<?php
/*
 * Plugin Name: Admin Editor Themes
 * Plugin URI: https://github.com/OmiyaGames/admin-themes
 * Description: Changes admin themes based on site index.
 * Version: 1.0.1
 * Author: Taro Omiya
 * Author URI: https://omiyagames.com
 * License: GPL v2
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
