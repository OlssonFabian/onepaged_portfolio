<?php
	// hämta ut alla blogginlägg från kategorin med slug:en 'faq'
	$usps = new WP_query([
		'post_type' => 'us_usp',
		'posts_per_page' => 3,
		'meta_key' => 'usp_order',
		'orderby' => 'meta_value_num',
		'order' => 'ASC'
	   ]);
	// om det finns några blogginlägg, starta en accordion
	if ($usps->have_posts()) {
		?>
			<div class="accordion" id="accordion-usps">
				<?php
					// för varje blogginlägg, skriv ut en single accordion item
					while ($usps->have_posts()) {
						$usps->the_post();
						?>
							<!-- Single USP start -->
							<div class="card">
								<div class="card-header">
									<h2 class="mb-0">
										<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#usps-<?php the_ID(); ?>">
											<?php the_title(); ?>
										</button>
									</h2>
								</div>

								<div id="usps-<?php the_ID(); ?>" class="collapse" data-parent="#accordion-usps">
									<div class="card-body">
										<?php the_content(); ?>
									</div>
								</div>
							</div>
							<!-- Single USP end -->
						<?php
					}
				?>
			</div><!-- End of Accordion -->

			<!-- pagination -->
			<div class="pagination-links d-flex justify-content-between mt-2">
				<div class="previous-page">
					<?php previous_posts_link(__('&laquo; Previous Page', 'mybasictheme')); ?>
				</div>
				<div class="next-page">
					<?php next_posts_link(__('Next Page &raquo;', 'mybasictheme'), $faq_query->max_num_pages); ?>
				</div>
			</div>
			<!-- /pagination -->
		<?php
		// reset postdata to main loop
		wp_reset_postdata();
	} else {
		?>
			<p><em><?php _e('Sorry, no USPSs found.', 'onepager'); ?></em></p>
		<?php
	}
?>
