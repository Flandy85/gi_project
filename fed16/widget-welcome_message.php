<?php
class WelcomeMessage extends WP_Widget {

	public function __construct() {
		$id = "wc_message_fed16";
		$name = "Welcome to my portfolio site";
		$desc = "Fill in your welcome message";

		parent::__construct($id, $name, $desc);
	}
	
	// Admin form wich is under Appearance -> Widgets for this Widget
	public function form($instance) {
		$title = $instance['title'];
		$id = esc_attr($this->get_field_id('title'));
		$name = $this->get_field_name('title');
		?>
		<p>
			<label for="<?php echo $id ?>">Welcome Message:</label>
			<input type="text" id="<?php echo $id; ?>" name="<?php echo $name; ?>" value="<?php echo $title; ?>">
		</p>
		<?php
	}
	// Takes care of the update
	public function update($new_instance, $old_instance) {
		$instance = array();
		if( !empty($new_instance['title'] ) ) {
			$instance['title'] = $new_instance['title'];
		}

		return $instance;
	}
	// Show this widget in Front End
	public function widget($args, $instance) {
		echo $args['before_widget'];
		echo $args['before_title'];
		echo $instance['title'];
		echo $args['after_title'];
		echo $args['after_widget'];
	}
}

add_action('widgets_init', 'register_wc_message_fed16');
function register_wc_message_fed16() {
	register_widget('WelcomeMessage');
}