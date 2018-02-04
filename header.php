<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Home_16_Berdnikov_Dmytro
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header class="main-header">
    <div class="container">
        <nav class="main-navigation">
            <h1><?php the_custom_logo(); ?></h1>
            <?php
            wp_nav_menu(array(
                'theme_location' => 'header-main-menu-location',
                'menu_class' => 'navigation-list',
                'container' => '',
                'depth' => 1
            ));
            ?>
        </nav>
    </div>
    <section class="contact-me">
        <img src="<?php echo get_theme_file_uri('assets/img/adam-suaerez.jpg'); ?>" alt="<?php echo get_theme_mod('rep_name'); ?> photo">
        <div class="container">
            <div>
                <h2><?php echo get_theme_mod('rep_name'); ?></h2>
                <span><?php echo get_theme_mod('rep_position'); ?></span>
            </div>
            <a href="<?php echo get_theme_mod('button_link'); ?>"><?php echo get_theme_mod('button_text'); ?></a>
        </div>
    </section>
</header>