<?php
add_action("admin_init", "fed16_add_metabox");

function fed16_add_metabox() {
	$id = "fed16_post_metabox";
	$title = __("Rolighetsfaktor", "fed16");
	$function = "fed16_render_metabox";
	$screen = "post"; // a post or page
	$placement = "side"; // normal, side, advanced
	$prio = "high"; // high, low, default

	add_meta_box($id, $title, $function, $a, $placement, $prio);

}
function fed16_render_metanox() {
	global $post;
	$rf = get_post_meta($post->ID, "rolighetsfaktor", true);
	?>
	<label for="rolighetsfaktor"><?php _e('Rolighetsfaktor', 'fed16'); ?></label>
	<input type="number" name="rolighetsfaktor" id="rolighetsfaktor" value="<?php echo $rf; ?>">
	<?php
}

add_action("save_post", "fed16_save_metabox");
function fed16_save_metabox() {
	global $post;

	update_post_meta($post->ID, "rolighetsfaktor", $_POST["rolighetsfaktor"]);
}
?>