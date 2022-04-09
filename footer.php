<?php // @codingStandardsIgnoreLine
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package HWI
 */

?>

	<footer id="colophon" class="footer">
		<div class="container">
			<div class="footer__top">
				<div class="footer__right">
					<div class="footer__logo">
						<?php the_custom_logo(); ?>
						<?php bloginfo( 'name' ); ?>
					</div>
					<div class="footer__discover">
						<?php dynamic_sidebar( 'discover' ); ?>
					</div>
				</div>
				<div class="footer__contact">
					<div class="footer__info">
						<?php dynamic_sidebar( 'footer' ) ?>
					</div>
					<div class="footer__backtotop scroll-to-top">
						<p class="title-backtotop">Back to top</p>
					</div>
				</div>
			</div>
			<div class="footer__bottom">
				<p>© 2022 <b>Hwico</b>. All Rights Resevered. Design by <a href="https://titanweb.vn/">titanweb.vn</a></p>
			</div>
		</div>
	</footer>
</div>

<?php wp_footer(); ?>

</body>
</html>
