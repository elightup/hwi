<?php // @codingStandardsIgnoreLine
$image   = rwmb_meta( 'image' );
$maps    = rwmb_meta( 'maps' );
$address = rwmb_meta( 'address' );
$text    = rwmb_meta( 'text_contact' );
$url     = rwmb_meta( 'contact' );
?>
<section class="contact">
	<div class="contact__image">
		<img src="<?= esc_url( $image['full_url'] );?>" alt="">
	</div>
	<div class="contact__address">
		<?= $maps;?>
		<div class="contact__address--content">
			<?= wp_kses_post( wpautop( $address ) );?>
			<a href="<?= esc_url( $url );?>" class="contact-us"><?= esc_html( $text );?></a>
			<a href="<?= esc_url( $url );?>" class="phone-ring"><img src="<?= esc_url( get_template_directory_uri() );?>/images/phone.gif" alt=""></a>
		</div>
	</div>
</section>
