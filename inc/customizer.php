<?php
/**
 * Home 16 Berdnikov Dmytro Theme Customizer
 *
 * @package Home_16_Berdnikov_Dmytro
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function home_16_berdnikov_dmytro_customize_register($wp_customize)
{
    $wp_customize->get_setting('blogname')->transport = 'postMessage';
    $wp_customize->get_setting('blogdescription')->transport = 'postMessage';
    $wp_customize->get_setting('header_textcolor')->transport = 'postMessage';

    if (isset($wp_customize->selective_refresh)) {
        $wp_customize->selective_refresh->add_partial('blogname', array(
            'selector' => '.site-title a',
            'render_callback' => 'home_16_berdnikov_dmytro_customize_partial_blogname',
        ));
        $wp_customize->selective_refresh->add_partial('blogdescription', array(
            'selector' => '.site-description',
            'render_callback' => 'home_16_berdnikov_dmytro_customize_partial_blogdescription',
        ));
    }

    // Customizer's "header image" section removed. These settings will be added to another section.
    $wp_customize->remove_section( 'header_image' );

    // Customizer's "background image" section removed. These settings will be added to another section.
    $wp_customize->remove_section( 'background_image' );

    // Customizer's section for the introductory subsection of the header
    $wp_customize->add_section( 'intro_header_subsection_options',
        array(
            'title' => __( 'Intro subsection of the header' ),
            'description' => esc_html__( 'Here are the settings for the introductory subsection of the header' ),
            'priority' => 61
        )
    );

    $wp_customize->add_setting( 'intro_background_image',
        array(
            'default' => '',
            'transport' => 'refresh',
            'sanitize_callback' => 'absint'
        )
    );
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'intro_background_image',
        array(
            'label' => __( 'Background Image' ),
            'description' => esc_html__( 'Please add a background image here' ),
            'section' => 'intro_header_subsection_options',
            'button_labels' => array( // Optional.
                'select' => __( 'Select Image' ),
                'change' => __( 'Change Image' ),
                'remove' => __( 'Remove' ),
                'default' => __( 'Default' ),
                'placeholder' => __( 'No image selected' ),
                'frame_title' => __( 'Select Image' ),
                'frame_button' => __( 'Choose Image' ),
            )
        )
    ) );

    $wp_customize->add_setting( 'rep_name');
    $wp_customize->add_control( 'rep_name',
        array(
            'label' => __( 'Name of the representative' ),
            'description' => esc_html__( 'Please enter the name of the representative' ),
            'section' => 'intro_header_subsection_options',
            'type' => 'text' // Can be either text, email, url, number, hidden, or date
        )
    );

    $wp_customize->add_setting( 'rep_position');
    $wp_customize->add_control( 'rep_position',
        array(
            'label' => __( 'Position of the representative' ),
            'description' => esc_html__( 'Please enter the position of the representative' ),
            'section' => 'intro_header_subsection_options',
            'type' => 'text' // Can be either text, email, url, number, hidden, or date
        )
    );

    $wp_customize->add_setting( 'button_text');
    $wp_customize->add_control( 'button_text',
        array(
            'label' => __( 'Button text' ),
            'description' => esc_html__( 'Please enter the text of the button' ),
            'section' => 'intro_header_subsection_options',
            'type' => 'text' // Can be either text, email, url, number, hidden, or date
        )
    );

    $wp_customize->add_setting( 'button_link');
    $wp_customize->add_control( 'button_link',
        array(
            'label' => __( 'Button URL' ),
            'description' => esc_html__( 'Please enter the URL button links to' ),
            'section' => 'intro_header_subsection_options',
            'type' => 'text' // Can be either text, email, url, number, hidden, or date
        )
    );

    // Customizer's section with options for the "About us" section of the site
    $wp_customize->add_section( 'about_us_section_options',
        array(
            'title' => __( '"About us" section options' ),
            'description' => esc_html__( 'Here are the settings for the "About us" section of the site' ),
            'priority' => 62
        )
    );

    $wp_customize->add_setting( 'about_us_section_title');
    $wp_customize->add_control( 'about_us_section_title',
        array(
            'label' => __( 'Section Title' ),
            'description' => esc_html__( 'Please enter the title for this section' ),
            'section' => 'about_us_section_options',
            'type' => 'text' // Can be either text, email, url, number, hidden, or date
        )
    );

    $wp_customize->add_setting( 'about_us_section_description',
        array(
            'default' => '',
            'transport' => 'refresh',
            'sanitize_callback' => 'wp_filter_nohtml_kses'
        )
    );
    $wp_customize->add_control( 'about_us_section_description',
        array(
            'label' => __( 'Section Description' ),
            'description' => esc_html__( 'Please enter the description for this section' ),
            'section' => 'about_us_section_options',
            'type' => 'textarea'
        )
    );

    $wp_customize->add_setting( 'about_us_left_subsection_title');
    $wp_customize->add_control( 'about_us_left_subsection_title',
        array(
            'label' => __( 'Left Subsection Title' ),
            'description' => esc_html__( 'Please enter the title for the left subsection' ),
            'section' => 'about_us_section_options',
            'type' => 'text' // Can be either text, email, url, number, hidden, or date
        )
    );

    $wp_customize->add_setting( 'about_us_right_subsection_title');
    $wp_customize->add_control( 'about_us_right_subsection_title',
        array(
            'label' => __( 'Right Subsection Title' ),
            'description' => esc_html__( 'Please enter the title for the right subsection' ),
            'section' => 'about_us_section_options',
            'type' => 'text' // Can be either text, email, url, number, hidden, or date
        )
    );

    $wp_customize->add_setting( 'about_us_right_subsection_content',
        array(
            'default' => '',
            'transport' => 'refresh',
            'sanitize_callback' => 'wp_filter_nohtml_kses'
        )
    );
    $wp_customize->add_control( 'about_us_right_subsection_content',
        array(
            'label' => __( 'Right Subsection Content' ),
            'description' => esc_html__( 'Please enter the text below' ),
            'section' => 'about_us_section_options',
            'type' => 'textarea'
        )
    );
}

add_action('customize_register', 'home_16_berdnikov_dmytro_customize_register');

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function home_16_berdnikov_dmytro_customize_partial_blogname()
{
    bloginfo('name');
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function home_16_berdnikov_dmytro_customize_partial_blogdescription()
{
    bloginfo('description');
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function home_16_berdnikov_dmytro_customize_preview_js()
{
    wp_enqueue_script('home-16-berdnikov-dmytro-customizer', get_template_directory_uri() . '/assets/js/customizer.js', array('customize-preview'), '20151215', true);
}

add_action('customize_preview_init', 'home_16_berdnikov_dmytro_customize_preview_js');
