<?php $plasso = get_theme_mod('plasso'); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
		<meta name="description" content="<?php echo get_bloginfo( 'description' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0"/>
		<?php wp_head(); ?>
	</head>

    <body>
    	<?php

		// Welcome: If nothing has been customized, fet the welcome template.
		if(
	        $plasso['header_toggle'] == false &&
	        $plasso['intro_toggle'] == false &&
	        $plasso['features_toggle'] == false &&
	        $plasso['images_toggle'] == false &&
	        $plasso['backer_toggle'] == false &&
	        $plasso['newsletter_toggle'] == false &&
	        $plasso['footer_toggle'] == false
	    ) {
	        get_template_part('content-welcome');
	    }

		// If 404: Get the 404 message if there’s an error.
        if(is_404()) {
            get_template_part('content-404');
        }

		?>

        <div class="wrapper">
        	<?php

			// Header: Get the header if it’s toggled (all pages).
			if($plasso['header_toggle'] == true) {

			?>
        	<header class="header clearfix animated fadeInDown">
				<div class="content">
				    <div class="grid grid-pad">
						<div class="col-1-3 mobile-col-1-3">
							<div class="nav-left">
								<ul class="clearfix nav">
									<?php if($plasso['intro_toggle'] == true) { ?>
								<li><a class="scroll" href="#intro">Intro</a></li>
									<?php } ?>
									<?php if($plasso['features_toggle'] == true) { ?>
								<li><a class="scroll" href="#about">About</a></li>
									<?php } ?>
							    </ul>
						    </div>
						</div>

						<div class="col-1-3 mobile-col-1-3">
							<?php if(!empty($plasso['header_logo'])) { ?>
		        			<a class="logo" href="<?php echo site_url(); ?>"><img src="<?php echo $plasso['header_logo']; ?>"></a>
			                <?php } else { ?>
		                    <h1><a href="<?php echo site_url(); ?>"><?php echo $plasso['header_text']; ?></a></h1>
			            	<?php } ?>
						</div>

						<div class="col-1-3 mobile-col-1-3">
							<div class="nav-right">
								<ul class="clearfix nav">
									<?php if($plasso['intro_toggle'] == true) { ?>
									<li><a class="scroll" href="#features">Features</a></li>
									<?php } ?>
									<?php if($plasso['features_toggle'] == true) { ?>
									<li><a class="scroll" href="#backer">Contact</a></li>
									<?php } ?>
							    </ul>
						    </div>
						</div>
					</div>
				</div>
			</header>
			<?php } ?>

			<?php

            // If Home: Get the home page content if we’re home.
            if(is_home()) {
                get_template_part('content-home');
            }

            // If Page: Get the page content if we’re on a page.
            if(is_page()) {
                get_template_part('content-page');
            }

            ?>

            <?php

			// Newsletter: Get the newsletter form if it’s toggled (all pages).
			if($plasso['newsletter_toggle'] == true) {

			?>
            <div class="newsletter">
                <div class="content">
                    <?php if(!empty($plasso['newsletter_text'])) { ?>
                    <p><?php echo $plasso['newsletter_text']; ?></p>
                    <?php } ?>

                    <form action="" method="post">
                        <input id="mc-email" type="mc-email" name="mc-email" type="email" placeholder="Enter your email address" required />
                        <button type="submit">Subscribe</button>
                    </form>
                </div>
            </div>
            <?php } ?>

            <?php

			// Footer: Get the footer if it’s toggled (all pages).
			if($plasso['footer_toggle'] == true) {

			?>
            <footer>
                <div class="content">
                    <nav class="nav">
                        <?php if($plasso['intro_toggle'] == true) { ?>
                        <li><a class="scroll" href="#intro">Intro</a></li>
                        <?php } ?>
                        <?php if($plasso['features_toggle'] == true) { ?>
                        <li><a class="scroll" href="#about">About</a></li>
                        <?php } ?>
                        <?php if($plasso['intro_toggle'] == true) { ?>
                        <li><a class="scroll" href="#features">Features</a></li>
                        <?php } ?>
                        <?php if($plasso['features_toggle'] == true) { ?>
                        <li><a class="scroll" href="#backer">Contact</a></li>
                        <?php } ?>
                    </nav>

                    <?php if(!empty($plasso['footer_text'])) { ?>
                    <p><?php echo $plasso['footer_text']; ?></p>
                    <?php } ?>
                </div>
            </footer>
            <?php } ?>
        </div>

		<?php

        // Video: The intro video panel if toggled.
        if($plasso['intro_video_toggle'] == true) {

        ?>
        <div class="panel inactive" id="video">
            <a class="icon close stop" href="#"></a>

            <div class="content">
            </div>
        </div>
        <?php } ?>

        <?php wp_footer(); ?>
    </body>
</html>
