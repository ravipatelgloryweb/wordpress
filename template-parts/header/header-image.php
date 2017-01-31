<?php
/**
 * Displays header media
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>

<?php if (current_theme_supports('custom-header')) : ?>
    <figure class="logo animated fadeInDown delay-07s">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php the_custom_logo(); ?></a>
    </figure>
<?php endif; ?>