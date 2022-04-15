<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
<footer class="footer">
  footer
  <?php if (has_nav_menu('footer')) : ?>
    <nav aria-label="<?php esc_attr_e('Secondary menu', 'twentytwentyone'); ?>" class="footer__navigation">
      <ul class="footer__navigation-wrapper">
        <?php
        wp_nav_menu(
            array(
                'theme_location' => 'footer',
                'items_wrap' => '%3$s',
                'container' => false,
                'depth' => 1,
                'link_before' => '<span>',
                'link_after' => '</span>',
                'fallback_cb' => false,
            )
        );
        ?>
      </ul>
    </nav>
  <?php endif; ?>
</footer>

<?php wp_footer(); ?>

</body>
</html>
