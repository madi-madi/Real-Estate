<?php

function rew_plugin_option(){

	add_option('rew_welcome_message','Welcome Forsan ');
	register_setting('rew_general_options', 'rew_welcome_message');
}

add_action('admin_init','rew_plugin_option');


function rew_plugin_menu(){
	add_options_page('REW Plugin General Settings','RWE Setting', 'manage_options', 'rew_plugin_settings','rew_plugin_settings_page');
}

add_action('admin_menu','rew_plugin_menu');


/*
function rew_plugin_settings_page(){

	?>
	<form action="options.php" method="post"></form>
	<?php
}*/