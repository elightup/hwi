<?php
$groups_visions = rwmb_meta( 'group_vision' );
?>
<section class="vision">
	<div class="container">
		<div class="vision__inner">
		<?php
		foreach ( $groups_visions as $group_vision ) {
			$text_one     = $group_vision['text_one'];
			$title_vision = $group_vision['title_vision'];
			$content      = $group_vision['content_vision'];
			?>
				<div class="vision__item">
					<h1><?= $text_one; ?></h1>
					<h2><?= $title_vision; ?></h2>
					<div class="entry_content"><?=  $content; ?></div>
				</div>
			<?php
		}
		?>
		</div>
	</div>
</section>
