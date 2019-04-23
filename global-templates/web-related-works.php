<?php
/**
 * Hero setup.
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>
<?php
 if (wp_is_mobile()){
	$web_rel_work = new WP_query([
		'post_type' => 'us_web_related_work',
		'posts_per_page' => 1,
		'paged'          => $paged,
	   ]);
}
else{
	$web_rel_work = new WP_query([
		'post_type' => 'us_web_related_work',
		'posts_per_page' => 3,
		'paged'          => $paged
	   ]);
}


if ($web_rel_work->have_posts()){
?>
	<div class="wrapper" id="wrapper-web-rel-work">
		<div class="col-md">
			<div class="d-flex justify-content-around">
		<?php
	while ($web_rel_work->have_posts()) {
		$web_rel_work->the_post();
		get_template_part('loop-templates/content' , 'web-rel-works'); ?>
	<?php } ?>
			</div>
		</div>
	</div>
<?php
}
