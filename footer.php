<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Home_16_Berdnikov_Dmytro
 */

?>
<footer>
    <div class="container">
        <div class="copyright">
            Copyright © <a href="http://symu.com"><span>Symu.co</span></a>
        </div>
        <?php
        wp_nav_menu(array(
            'theme_location' => 'footer-social-menu-location',
            'menu_class' => 'social',
            'container' => '',
            'depth' => 1
        ));
        ?>
    </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
