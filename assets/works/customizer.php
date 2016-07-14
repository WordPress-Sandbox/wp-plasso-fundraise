<?php

/* Customizer Everything
---------------------------------------------------------------------------------------------------- */

function plasso_customizer() {

	global $wp_customize;

	$wp_customize->remove_section('static_front_page');

    /* Yes Kirki? Cool, let’s do this.
    ------------------------------------------------------------------------------------------------ */

	if(class_exists('Kirki')) {

        // Theme configuration for Kirki.
		Kirki::add_config('plasso_theme', array(
			'capability' => 'edit_theme_options',
			'option_type' => 'theme_mod',
		));

		/* The Product Section
        -------------------------------------------------------------------------------------------- */

		Kirki::add_section('product_section', array(
			'title' => __('Product Settings', 'plasso_textdomain'),
			'description' => __('Settings for the product you’re selling.', 'plasso_textdomain'),
			'priority' => 200,
			'capability' => 'edit_theme_options',
		));

        // Product: For the Plasso product ID.

        Kirki::add_field('plasso_theme', array(
			'settings' => 'plasso[space_id]',
			'label' => __('Space ID', 'plasso_textdomain'),
            'description' => __('You’ll find your space ID at the end of your space URL when viewing your space on Plasso.co. For instance, if your space URL is <strong>https://plasso.co/s/zZ2NwPCfyU</strong>, your space ID would be <strong>zZ2NwPCfyU</strong>.'),
			'section' => 'product_section',
			'type' => 'text',
			'priority' => 10,
		));

        /* The Header Section
        -------------------------------------------------------------------------------------------- */

		Kirki::add_section('header_section', array(
			'title' => __('Header', 'plasso_textdomain'),
			'description' => __('Content &amp; settings for the header.', 'plasso_textdomain'),
			'priority' => 200,
			'capability' => 'edit_theme_options',
		));

		// Header Toggle: Toggle the header section on or off.

		Kirki::add_field('plasso_theme', array(
			'settings' => 'plasso[header_toggle]',
			'label' => __('Display', 'plasso_textdomain'),
            'description' => __('Toggle the header section on or off.'),
			'section' => 'header_section',
			'type' => 'toggle',
			'priority' => 10,
		));

        // Text: The header text.

        Kirki::add_field('plasso_theme', array(
			'settings' => 'plasso[header_text]',
			'label' => __('Text', 'plasso_textdomain'),
            'description' => __('Add some header text.'),
			'section' => 'header_section',
			'type' => 'text',
			'priority' => 10,
		));

        // Logo Image: The header logo image.

        Kirki::add_field('plasso_theme', array(
			'settings' => 'plasso[header_logo]',
			'label' => __('Logo', 'plasso_textdomain'),
            'description' => __('Add a logo image (replaces the default text-based logo.)'),
			'section' => 'header_section',
			'type' => 'image',
			'priority' => 10,
		));

        /* The Intro Section
        -------------------------------------------------------------------------------------------- */

		Kirki::add_section('intro_section', array(
			'title' => __('Intro &amp; Video', 'plasso_textdomain'),
			'description' => __('Content &amp; settings for the intro/video section.', 'plasso_textdomain'),
			'priority' => 200,
			'capability' => 'edit_theme_options',
		));

        // Intro Toggle: Toggle the intro section on or off.

		Kirki::add_field('plasso_theme', array(
			'settings' => 'plasso[intro_toggle]',
			'label' => __('Display', 'plasso_textdomain'),
            'description' => __('Toggle the intro section on or off.'),
			'section' => 'intro_section',
			'type' => 'toggle',
			'priority' => 10,
		));

		// Intro Pre Tagline: Just a textarea for the intro pre-title.

		Kirki::add_field('plasso_theme', array(
			'settings' => 'plasso[intro_pre_tagline]',
			'label' => __('Pre Title', 'plasso_textdomain'),
            'description' => __('Just enter a bit of text for your intro pre-title.'),
			'section' => 'intro_section',
			'type' => 'text',
			'priority' => 10,
		));

		// Intro Title: Just a textarea for the intro tagline.

		Kirki::add_field('plasso_theme', array(
			'settings' => 'plasso[intro_title]',
			'label' => __('Intro Title', 'plasso_textdomain'),
            'description' => __('Just enter a bit of text for your intro title.'),
			'section' => 'intro_section',
			'type' => 'text',
			'priority' => 10,
		));

        // Intro Tagline: Just a textarea for the intro tagline.

		Kirki::add_field('plasso_theme', array(
			'settings' => 'plasso[intro_tagline]',
			'label' => __('Intro Tagline', 'plasso_textdomain'),
            'description' => __('Just enter a bit of text for your intro tagline.'),
			'section' => 'intro_section',
			'type' => 'textarea',
			'priority' => 10,
		));

		// Intro Video Toggle: Toggle the intro video on or off.

		Kirki::add_field('plasso_theme', array(
			'settings' => 'plasso[intro_video_toggle]',
			'label' => __('Intro Video', 'plasso_textdomain'),
            'description' => __('Toggle the intro video on or off.'),
			'section' => 'intro_section',
			'type' => 'toggle',
			'priority' => 10,
		));

		// Intro Video Type: Select an intro video type.

		Kirki::add_field('plasso_theme', array(
			'settings' => 'plasso[intro_video_type]',
			'label' => __('Intro Video Type', 'plasso_textdomain'),
            'description' => __('Select the type of video you’ll be embedding'),
			'section' => 'intro_section',
			'type' => 'select',
			'priority' => 10,
			'multiple' => 1,
			'choices' => array(
				'youtube' => __( 'YouTube', 'my_textdomain' ),
				'vimeo' => __( 'Vimeo', 'my_textdomain' ),
			),
		));

        // Intro Video ID: Any public YouTube or Vimeo ID.

		Kirki::add_field('plasso_theme', array(
			'settings' => 'plasso[intro_video_id]',
			'label' => __('Intro Video ID', 'plasso_textdomain'),
            'description' => __('You can use any public YouTube or Vimeo video ID here. For example, if you want to embed a YouTube video, enter the ID at the end of your YouTube video URL (e.g. “youtube.com/watch?v=123456” = “123456”).'),
			'section' => 'intro_section',
			'type' => 'text',
			'priority' => 10,
		));

        // Intro Image: The intro/video background image.

        Kirki::add_field( 'plasso_theme', array(
			'settings' => 'plasso[intro_image]',
			'label' => __('Intro Image', 'plasso_textdomain'),
            'description' => __('The background image for your intro &amp; video.'),
			'section' => 'intro_section',
			'type' => 'image',
			'priority' => 10,
		));

		/* The Backer Module
        -------------------------------------------------------------------------------------------- */

		Kirki::add_section('backer_section', array(
			'title' => __('Backer Module', 'plasso_textdomain'),
			'description' => __('Content &amp; settings for the backer module.', 'plasso_textdomain'),
			'priority' => 200,
			'capability' => 'edit_theme_options',
		));

		// Backer Toggle: Toggle the backer section on or off.

		Kirki::add_field('plasso_theme', array(
			'settings' => 'plasso[backer_toggle]',
			'label' => __('Display', 'plasso_textdomain'),
            'description' => __('Toggle the backer module on or off.'),
			'section' => 'backer_section',
			'type' => 'toggle',
			'priority' => 10,
		));

		// Raised: The percentage raised.

		Kirki::add_field('plasso_theme', array(
			'settings' => 'plasso[backer_raised]',
			'label' => __('Percentage Raised', 'plasso_textdomain'),
            'description' => __('The percentage raised.'),
			'section' => 'backer_section',
			'type' => 'text',
			'priority' => 10,
		));

		// Pledged: The amount pledged.

		Kirki::add_field('plasso_theme', array(
			'settings' => 'plasso[backer_pledged]',
			'label' => __('Amount Pledged', 'plasso_textdomain'),
            'description' => __('The amount pledged.'),
			'section' => 'backer_section',
			'type' => 'text',
			'priority' => 10,
		));

		/* The Images Section
        -------------------------------------------------------------------------------------------- */

		Kirki::add_section('images_section', array(
			'title' => __('Images', 'plasso_textdomain'),
			'description' => __('Content &amp; settings for your product images section (the image grid).', 'plasso_textdomain'),
			'priority' => 200,
			'capability' => 'edit_theme_options',
		));

        // Images Toggle: Toggle the images section on or off.

		Kirki::add_field('plasso_theme', array(
			'settings' => 'plasso[images_toggle]',
			'label' => __('Display', 'plasso_textdomain'),
            'description' => __('Toggle the images section on or off.'),
			'section' => 'images_section',
			'type' => 'toggle',
			'priority' => 10,
		));

		// Images Intro Pre: Just a textarea for the intro pre-title.

		Kirki::add_field('plasso_theme', array(
			'settings' => 'plasso[images_intro_pre_tagline]',
			'label' => __('Pre Title', 'plasso_textdomain'),
            'description' => __('Just enter a bit of text for your images pre-title.'),
			'section' => 'images_section',
			'type' => 'text',
			'priority' => 10,
		));

        // Images Intro Headline: Just a textarea for the features intro headline.

		Kirki::add_field('plasso_theme', array(
			'settings' => 'plasso[images_intro_headline]',
			'label' => __('Images Headline', 'plasso_textdomain'),
            'description' => __('For your images intro headline.'),
			'section' => 'images_section',
			'type' => 'textarea',
			'priority' => 10,
		));

        // Images Intro Text: Just a textarea for the features intro text.

		Kirki::add_field('plasso_theme', array(
			'settings' => 'plasso[images_intro_text]',
			'label' => __('Images Tagline', 'plasso_textdomain'),
            'description' => __('For your images intro text.'),
			'section' => 'images_section',
			'type' => 'textarea',
			'priority' => 10,
		));

        // Image Repeater: Here’s the images repeater for the actual product images.

        Kirki::add_field('plasso_theme', array(
			'settings' => 'plasso[images_image]',
			'label' => __('Product Images', 'plasso_textdomain'),
            'description' => __('Add, remove and/or organize product images.'),
            'row_label' => array(
                 'value' => 'image'
            ),
			'section' => 'images_section',
			'type' => 'repeater',
			'priority' => 10,
			'fields' => array (
                'image' => array(
                    'label' => __('Image', 'plasso_textdomain'),
                    'type' => 'image',
                ),
			),
		));

        /* The Features Section
        -------------------------------------------------------------------------------------------- */

		Kirki::add_section('features_section', array(
			'title' => __('Features', 'plasso_textdomain'),
			'description' => __('Content &amp; settings for your product features section.', 'plasso_textdomain'),
			'priority' => 200,
			'capability' => 'edit_theme_options',
		));

        // Features Toggle: Toggle the features section on or off.

		Kirki::add_field('plasso_theme', array(
			'settings' => 'plasso[features_toggle]',
			'label' => __('Display', 'plasso_textdomain'),
            'description' => __('Toggle the features section on or off.'),
			'section' => 'features_section',
			'type' => 'toggle',
			'priority' => 10,
		));

		// Features Intro Pre: Just a textarea for the intro pre-title.

		Kirki::add_field('plasso_theme', array(
			'settings' => 'plasso[features_intro_pre_tagline]',
			'label' => __('Pre Title', 'plasso_textdomain'),
            'description' => __('Just enter a bit of text for your intro pre-title.'),
			'section' => 'features_section',
			'type' => 'text',
			'priority' => 10,
		));

        // Features Intro Headline: Just a textarea for the features intro headline.

		Kirki::add_field('plasso_theme', array(
			'settings' => 'plasso[features_intro_headline]',
			'label' => __('Features Headline', 'plasso_textdomain'),
            'description' => __('For your features intro headline.'),
			'section' => 'features_section',
			'type' => 'textarea',
			'priority' => 10,
		));

        // Features Intro Text: Just a textarea for the features intro text.

		Kirki::add_field('plasso_theme', array(
			'settings' => 'plasso[features_intro_text]',
			'label' => __('Intro Tagline', 'plasso_textdomain'),
            'description' => __('For your features intro text.'),
			'section' => 'features_section',
			'type' => 'textarea',
			'priority' => 10,
		));

        // Features Repeater: Here’s the features repeater for the actual product features.

        Kirki::add_field('plasso_theme', array(
			'settings' => 'plasso[features_feature]',
			'label' => __('Product Features', 'plasso_textdomain'),
            'description' => __('Add, remove and/or organize features.'),
            'row_label' => array(
                 'value' => 'feature'
            ),
			'section' => 'features_section',
			'type' => 'repeater',
			'priority' => 10,
			'fields' => array (
				'icon' => array(
					'label' => __('Icon', 'plasso_textdomain'),
					'type' => 'image',
				),
				'title' => array(
					'label' => __('Title', 'plasso_textdomain'),
					'type' => 'text',
				),
				'text' => array(
					'label' => __('Text', 'plasso_textdomain'),
					'type' => 'textarea',
				),
			),
		));

        /* Newsletter
        -------------------------------------------------------------------------------------------- */

		Kirki::add_section('newsletter_section', array(
			'title' => __('Newsletter', 'plasso_textdomain'),
			'description' => __('Content &amp; settings for your MailChimp newsletter', 'plasso_textdomain'),
			'priority' => 200,
			'capability' => 'edit_theme_options',
		));

        // Newsletter Toggle: Toggle the newsletter section on or off.

		Kirki::add_field('plasso_theme', array(
			'settings' => 'plasso[newsletter_toggle]',
			'label' => __('Display', 'plasso_textdomain'),
            'description' => __('Toggle the newsletter section on or off.'),
			'section' => 'newsletter_section',
			'type' => 'toggle',
			'priority' => 10,
		));

        // Newsletter Text: The text displayed above the newsletter form.

		Kirki::add_field('plasso_theme', array(
			'settings' => 'plasso[newsletter_text]',
			'label' => __('Text', 'plasso_textdomain'),
            'description' => __('Some call to action text (e.g. “Subscribe to our newsletter to stay updated.”).'),
			'section' => 'newsletter_section',
			'type' => 'textarea',
			'priority' => 10,
		));

        // MailChimp API: For the MailChimp API key.

		Kirki::add_field('plasso_theme', array(
			'settings' => 'plasso[newsletter_api]',
			'label' => __('MailChimp API Key', 'plasso_textdomain'),
            'description' => __('Add your <a href="http://kb.mailchimp.com/integrations/api/about-api-keys" target="_blank">MailChimp API Key</a> here.'),
			'section' => 'newsletter_section',
			'type' => 'text',
			'priority' => 10,
		));

        // MailChimp List: For the MailChimp list ID.

		Kirki::add_field('plasso_theme', array(
			'settings' => 'plasso[newsletter_list]',
			'label' => __('MailChimp List ID', 'plasso_textdomain'),
            'description' => __('Add your <a href="http://kb.mailchimp.com/lists/managing-subscribers/find-your-list-id" target="_blank">MailChimp List ID</a> here.'),
			'section' => 'newsletter_section',
			'type' => 'text',
			'priority' => 10,
		));

		/* The Footer Section
        -------------------------------------------------------------------------------------------- */

		Kirki::add_section('footer_section', array(
			'title' => __('Footer', 'plasso_textdomain'),
			'description' => __('Content &amp; settings for the footer.', 'plasso_textdomain'),
			'priority' => 200,
			'capability' => 'edit_theme_options',
		));

		// Footer Toggle: Toggle the footer section on or off.

		Kirki::add_field('plasso_theme', array(
			'settings' => 'plasso[footer_toggle]',
			'label' => __('Display', 'plasso_textdomain'),
            'description' => __('Toggle the footer section on or off.'),
			'section' => 'footer_section',
			'type' => 'toggle',
			'priority' => 10,
		));

		// Text: The footer text.

        Kirki::add_field('plasso_theme', array(
			'settings' => 'plasso[footer_text]',
			'label' => __('Text', 'plasso_textdomain'),
            'description' => __('Add some footer text (e.g. “Copyright Bla Bla Bla”).'),
			'section' => 'footer_section',
			'type' => 'textarea',
			'priority' => 10,
		));

    /* No Kirki? Install it please.
    ------------------------------------------------------------------------------------------------ */

	} else {

		class Kirki_Warning extends WP_Customize_Control {
			public $type = 'kirki_warning';

			public function render_content() {
				?>
					<label>
						<span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
						<p><?php _e('This theme requires the Kirki plugin in order to edit your site from within the customizer.', 'plasso_textdomain'); ?></p>
						<a href="<?php echo get_admin_URL(); ?>themes.php?page=tgmpa-install-plugins" class="button"><?php _e('Install Kirki', 'plasso_textdomain'); ?></a></p>
					</label>
				<?php
			}
		}

		$wp_customize->add_section(
			'theme_settings',
			array(
				'title' => 'Theme Settings',
				'description' => '',
				'priority' => 200,
			)
		);

		$wp_customize->add_setting('kirki_warning', array('sanitize_callback' => '__return_false'));
		$wp_customize->add_control(
			new Kirki_Warning(
				$wp_customize,
				'kirki_warning',
				array(
					'label' => __('Please note:', 'plasso_textdomain'),
					'section' => 'theme_settings',
					'settings' => 'kirki_warning'
				)
			)
		);
	}
}
add_action('customize_register', 'plasso_customizer');
