<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Home_16_Berdnikov_Dmytro
 */

get_header(); ?>

    <section id="about-us" class="about-us">
        <div class="container">
            <header class="section-header">
                <h2><?php echo get_theme_mod('about_us_section_title'); ?></h2>
                <p><?php echo get_theme_mod('about_us_section_description'); ?></p>
            </header>
            <section class="history">
                <h3><?php echo get_theme_mod('about_us_left_subsection_title'); ?></h3>
                <dl>
                    <div>
                        <dt>2016 -</dt>
                        <dd>In hac habitasse platea dictumst Nunc ultricies iaculis luctus Aliquam eget eros eget sapien
                            dictum.
                        </dd>
                    </div>
                    <div>
                        <dt>2015 -</dt>
                        <dd>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor.</dd>
                    </div>
                    <div>
                        <dt>2014 -</dt>
                        <dd>In hac habitasse platea dictumst Nunc ultricies iaculis luctus Aliquam eget eros eget
                            sapien.
                        </dd>
                    </div>
                </dl>
            </section>
            <section class="expertise">
                <h3><?php echo get_theme_mod('about_us_right_subsection_title'); ?></h3>
                <p><?php echo get_theme_mod('about_us_right_subsection_content'); ?></p>
            </section>
        </div>
    </section>

<?php
get_sidebar();
get_footer();