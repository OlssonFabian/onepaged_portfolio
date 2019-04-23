<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<?php if ( is_front_page()) : ?>
	<?php get_template_part( 'global-templates/hero' , 'none' ); ?>
	<hr>
<?php endif; ?>

<div class="wrapper" id="page-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row">

			<main class="site-main" id="main">

				<?php while ( have_posts() ) : the_post(); ?>
					<?php if(wp_is_mobile()){
						get_template_part( 'global-templates/accordion-usps');
					}
					else{
						get_template_part( 'global-templates/usps');
						?> <hr>
					<?php } ?>
					<h2 class="work-category"><?php _e('My Graphics' , onepager)?></h2>
					<div id="portfolio-container"></div><?php get_template_part( 'global-templates/portfolio'); ?></div>

					<h2 class="work-category"><?php _e('My Web And Code' , onepager)?></h2>
					<?php get_template_part( 'global-templates/web-related-works'); ?>
				<?php endwhile; // end of the loop. ?>

			</main><!-- #main -->

			<h2 id="contact-me"><?php _e('Contact Me' , onepager)?></h2>
			<?php echo do_shortcode( '[contact-form-7 id="85" title="Contact form 1"]' ); ?>
		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #page-wrapper -->

<?php get_footer(); ?>
