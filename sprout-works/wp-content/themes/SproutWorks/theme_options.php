<?php
//  Credits: http://net.tutsplus.com/tutorials/wordpress/how-to-integrate-an-options-page-into-your-wordpress-theme/
// Options Page Functions

function themeoptions_admin_menu() 
{
	// here's where we add our theme options page link to the dashboard sidebar
	add_theme_page("Options", "Options", 'edit_themes', basename(__FILE__), 'themeoptions_page');
}

function themeoptions_page() 
{
	// here's the main function that will generate our options page
	
	if ( $_POST['update_themeoptions'] == 'true' ) { themeoptions_update(); }
	
	//if ( get_option() == 'checked'
	
	?>
	<div class="wrap">
		<div id="icon-themes" class="icon32"><br /></div>
		<h2>SproutWorks Options</h2>
	
		<form method="POST" action="">
			<input type="hidden" name="update_themeoptions" value="true" />
                        <p>Logo Url: <input type="text" name="logo_url" id="logo_url" size="32" value="<?php echo get_option('my_logo_url'); ?>" /> </p>
			<p>Twitter Username: <input type="text" name="twitter_username" id="twitter_username" size="32" value="<?php echo get_option('my_twitter_username'); ?>" /> </p> 
			<p>Skype Username: <input type="text" name="skype_username" id="skype_username" size="32" value="<?php echo get_option('my_skype_username'); ?>" /> </p>
                        
			<p><input type="submit" name="search" value="Update Options" class="button" /></p>
		</form>
	
	</div>
	<?php
}

function themeoptions_update()
{
	// this is where validation would go
	update_option('my_logo_url', 	$_POST['logo_url']);
	update_option('my_twitter_username', 	$_POST['twitter_username']);
        update_option('my_skype_username', 	$_POST['skype_username']);
}

add_action('admin_menu', 'themeoptions_admin_menu');

?>
