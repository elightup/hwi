<?php // @codingStandardsIgnoreLine
$groups_visions = rwmb_meta( 'group_vision' );
?>
<section class="vision">
	<div class="container">
		<div class="vision__inner">
		<?php
		foreach ( $groups_visions as $group_vision ) {
			$title_vision = $group_vision['title_vision'];
			$content      = $group_vision['content_vision'];
			?>
				<div class="vision__item">
					<h2><?= esc_html( $title_vision ); ?></h2>
					<div class="entry_content"><?=  wp_kses_post( wpautop( $content ) ); ?></div>
				</div>
			<?php
		}
		?>
		</div>
	</div>
</section>
