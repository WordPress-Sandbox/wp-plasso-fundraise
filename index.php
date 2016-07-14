<?php

    // Get the header.
    get_header();

	// Get theme settings.
	$plasso = get_theme_mod('plasso');
?>

<?php if($plasso['intro_toggle'] == true) { ?>
<div class="slider animated fadeInUp" id="intro" <?php if(!empty($plasso['intro_image'])) { ?>style="background-image: url(<?php echo $plasso['intro_image']; ?>);"<?php } ?>>
	<div class="content animated fadeInUp delayed_05s">
		<?php if(!empty($plasso['intro_pre_tagline'])) { ?>
			<div class="sub-text"><?php echo $plasso['intro_pre_tagline']; ?></div>
		<?php } ?>

		<?php if(!empty($plasso['intro_title'])) { ?>
			<h2><?php echo $plasso['intro_title']; ?></h2>
		<?php } ?>

		<?php if(!empty($plasso['intro_tagline'])) { ?>
			<p><?php echo $plasso['intro_tagline']; ?></p>
		<?php } ?>

		<?php if($plasso['intro_video_toggle'] == true) { ?>
            <a class="open start" href="#video" data-video-type="<?php echo $plasso['intro_video_type']; ?>" data-video-id="<?php echo $plasso['intro_video_id']; ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/play.svg"></a>
		<?php } else { ?>
            <?php if(!empty($plasso['space_id'])) { ?>
            <a class="btn" href="https://plasso.co/s/<?php echo $plasso['space_id']; ?>">More Info</a>
            <?php } else { ?>
            <a class="btn" href="<?php echo site_url(); ?>/wp-admin/customize.php">Configure Your Product</a>
            <?php } ?>
		<?php } ?>
	</div>
</div>
<?php } ?>

<?php if($plasso['backer_toggle'] == true) { ?>
<div class="backer-module">
	<div class="card">
		<?php if(!empty($plasso['backer_raised'])) { ?>
		<div class="module">
			<h2 class="numbers"><?php echo $plasso['backer_raised']; ?>%</h2>
			<div class="sub-text">Raised</div>
		</div>
		<?php } ?>

		<?php if(!empty($plasso['backer_pledged'])) { ?>
		<div class="module">
			<h2 class="numbers">$<?php echo $plasso['backer_pledged']; ?></h2>
			<div class="sub-text">Pledged</div>
		</div>
		<?php } ?>

		<div class="module">
			<?php if(!empty($plasso['space_id'])) { ?>
            <a class="btn" href="https://plasso.co/s/<?php echo $plasso['space_id']; ?>">Become a Backer</a>
            <?php } else { ?>
            <a class="btn" href="<?php echo site_url(); ?>/wp-admin/customize.php">Configure Your Product</a>
            <?php } ?>
		</div>
	</div>
</div>
<?php } ?>

<?php if($plasso['images_toggle'] == true) { ?>
<div class="image-gallery" id="about">
	<div class="hero-text">
		<div class="content animated fadeInUp delayed_07s">
			<?php if(!empty($plasso['images_intro_pre_tagline'])) { ?>
				<div class="sub-text"><?php echo $plasso['images_intro_pre_tagline']; ?></div>
			<?php } ?>

			<?php if(!empty($plasso['images_intro_headline'])) { ?>
				<h2><?php echo $plasso['images_intro_headline']; ?></h2>
			<?php } ?>

	        <?php if(!empty($plasso['images_intro_text'])) { ?>
				<p><?php echo $plasso['images_intro_text']; ?></p>
			<?php } ?>
		</div>
	</div>

	<div class="gallery">
		<div class="content animated fadeInUp delayed_09s">
			<div class="grid grid-pad">
				<?php if (!empty($plasso['images_image'])) {
				    foreach($plasso['images_image'] as $image) { ?>
	                    <div class="col-1-4 mobile-col-1-4">
	                    	<div class="image" style="background-image: url(<?php echo wp_get_attachment_url($image['image']); ?>);"></div>
	                    </div>
					<?php }
				} ?>
			</div>
		</div>
	</div>
</div>
<?php } ?>

<?php if($plasso['features_toggle'] == true) { ?>
<div class="features" id="features">
	<div class="hero-text">
		<div class="content animated fadeInUp delayed_07s">
			<?php if(!empty($plasso['features_intro_pre_tagline'])) { ?>
				<div class="sub-text"><?php echo $plasso['features_intro_pre_tagline']; ?></div>
			<?php } ?>

			<?php if(!empty($plasso['features_intro_headline'])) { ?>
				<h2><?php echo $plasso['features_intro_headline']; ?></h2>
			<?php } ?>

	        <?php if(!empty($plasso['features_intro_text'])) { ?>
				<p><?php echo $plasso['features_intro_text']; ?></p>
			<?php } ?>
		</div>
	</div><!-- hero-text -->

	<div class="content">
		<div class="grid grid-pad">
			<?php if (!empty($plasso['features_feature'])) {
			    foreach($plasso['features_feature'] as $id => $feature) { ?>
                    <div class="col-1-3 mobile-col-1-3">
                        <?php if(!empty($feature['icon'])) { ?>
        				<img src="<?php echo wp_get_attachment_url($feature['icon']); ?>">
                        <?php } ?>

                        <h4><?php echo $feature['title']; ?></h4>
        			    <p><?php echo $feature['text']; ?></p>
        			</div>
				<?php }
			} ?>
		</div>
	</div>
</div>
<?php } ?>

<?php get_footer(); ?>
