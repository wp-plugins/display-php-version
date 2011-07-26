<?php
/*
Plugin Name: Display PHP Version
Description: Displays the current PHP version in the "Right Now" admin dashboard widget.
Version: 1.0
Author: David Gwyer
Author URI: http://www.presscoders.com
*/

/*  Copyright 2009 David Gwyer (email : d.v.gwyer@presscoders.com)

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
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

function pc_add_php_version() {
	?>
	<script language="javascript">
		jQuery(document).ready(function($) {
			$("#wp-version-message .b").after("<span>, with PHP <b><?php echo phpversion(); ?></b></span>");
		});
	</script>
	<?php
}
add_action('rightnow_end', 'pc_add_php_version');