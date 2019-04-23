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
	$portfolio = new WP_query([
		'post_type' => 'us_portfolio',
		'posts_per_page' => 1,
		'paged'          => $paged,
	   ]);
}
else{
	$portfolio = new WP_query([
		'post_type' => 'us_portfolio',
		'posts_per_page' => 3,
		'paged'          => $paged
	   ]);
}


if ($portfolio->have_posts()){
?>
	<div class="wrapper" id="wrapper-portfolio">
		<div class="col-md">
			<div class="d-flex justify-content-around">
		<?php
	while ($portfolio->have_posts()) {
		$portfolio->the_post();
		get_template_part('loop-templates/content' , 'portfolio'); ?>
	<?php } ?>
			</div>
		</div>
	</div>
<?php
}

