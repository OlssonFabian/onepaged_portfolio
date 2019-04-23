<?php
/**
 * Sidebar - hero canvas setup.
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>

<?php if ( is_active_sidebar( 'herocanvas' ) ) : ?>

	<!-- ******************* The Hero Canvas Widget Area ******************* -->
	<div id="title-container" class="col-12-justify-content-center">
		<p class="col-sm-12"><?php bloginfo('description')?></p>
	</div>
	<?php if(!wp_is_mobile()){ ?>
	<div id="us-herosection" class="d-flex col-lg-12 justify-content-center">
		<div class="d-flex col-4"><?php dynamic_sidebar( 'herocanvas');  dynamic_sidebar('imglogo'); ?></div>
	</div>
	<?php }
	else {
		?> <div id="us-herosection" class="d-flex col-sm-10 col-md-8-justify-content-center"><?php dynamic_sidebar( 'herocanvas' ); dynamic_sidebar('imglogo');?>
			<div class="d-flex justify-content-end">
	</div>
	<?php } ?>
	</div>
<?php endif; ?>
