<?php

	// Get theme settings.
	$plasso = get_theme_mod('plasso');

?>
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
	        get_template_part('welcome');
	    }

		?>

        <div class="wrapper">
        	<?php if($plasso['header_toggle'] == true) { ?>
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
