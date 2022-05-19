<?php

/*if ( is_home() ) {
	echo '<h2 class="screen-reader-text">' . esc_html( get_bloginfo("name") ) . ' ' . _x('Posts', 'noun: Site Title\'s Posts', 'chosen') . '</h2>';
}*/
if ( ! is_archive() ) {
	return;
}

$icon_class = 'folder-open';

if ( is_tag() ) {
	$icon_class = 'tag';
} elseif ( is_author() ) {
	$icon_class = 'user';
} elseif ( is_date() ) {
	$icon_class = 'calendar';
}
?>

<div class='archive-header'>
	<h2>
		<i class="fa fa-<?php echo $icon_class; ?>" aria-hidden="true"></i>
		<?php the_archive_title(); ?>
	</h2>
	<?php the_archive_description(); ?>
</div>