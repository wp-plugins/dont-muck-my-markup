<?

Class Admin extends DMMM
{
	
	function Admin()
	{
		add_action( 'add_meta_boxes', array( &$this, 'create') );
		add_action( 'save_post', array( &$this, 'save') );

		// Loads the stylesheet for the right pages
		add_action( 'load-post.php', array( &$this, 'insertCSS') );
		add_action( 'load-post-new.php', array( &$this, 'insertCSS') );
	}

	function create()
	{
		// Show the box on every post type
		add_meta_box( 'muck_box', 'Don\'t Muck My Markup', array( &$this, 'view'), get_post_type(), 'side', 'low' );
	}

	function view()
	{
		// Outputs the checkbox form control on each page and post
		$output = '<input type="checkbox" name="dont_muck" id="dont_muck_chbx"' .  (self::checked() ? ' checked="checked"' : '') . '/><label for="dont_muck_chbx">Disable auto-formatting for this ' . get_post_type();
		echo $output;
	}

	function save( $post_id )
	{
		 if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE )
		 	return $post_id;

			update_post_meta( $post_id, '_dont_muck', isset( $_POST['dont_muck'] ) ? true : '' );
	}

	function insertCSS()
	{
		// Only load this stylesheet if they're on post.php inside the dashboard
		wp_enqueue_style( 'admin.css', plugins_url( 'css/admin.css', self::$plugin_url ) );
	}

	static function checked()
	{
		// We're not "caching" this in a static property because this method will be called potentially multiple times throughout the loop
		if ( get_post() )
		{
			$checked = get_post_meta( get_the_ID(), '_dont_muck', true);
			if ( ! empty( $checked ) )
				return true;
		}
		return false;
	}
}


