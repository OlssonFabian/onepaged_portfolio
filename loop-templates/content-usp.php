<div class="col-md">
	<?php $icon = get_post_meta(get_the_ID(), 'icon', true);
	if($icon){ ?>
		<span class="<?php echo 'fa ' . $icon; ?>"></span>
	<?php } ?>

	<h1><?php the_title() ?></h1>
	<?php the_content() ?>

	<?php $link = get_post_meta(get_the_ID(), 'link', true);
	if($link){ ?>
		<a href="<?php echo "https://" . $link ?>" class="btn btn-primary">Read More</a>
	<?php } ?>
</div>
