<?php // @codingStandardsIgnoreLine
$title_financial  = rwmb_meta( 'title_financial' );
$text_location    = rwmb_meta( 'text_location' );
$text_gray        = rwmb_meta( 'text_gray' );
$text_blue        = rwmb_meta( 'text_blue' );
$groups_slider    = rwmb_meta( 'group_slider' );
$banner_financial = rwmb_meta( 'banner_financial' );
$text_banner      = rwmb_meta( 'text_banner' );
$years            = [];
$gross_profit     = [];
$turn_over        = [];
foreach ( $groups_slider as $highlight ) {
	$year           = $highlight['number_year'];
	$profit         = $highlight['gray'];
	$turnOver       = $highlight['blue'];
	$years[]        = $year;
	$gross_profit[] = $profit;
	$turn_over[]    = $turnOver;
}
?>
<section class="financial">
	<div class="container">
		<div class="team__title">
			<h2 class="title"><?= wp_kses_post( $title_financial ); ?></h2>
		</div>
		<h3 class="financial__location"><?= esc_html( $text_location ); ?></h3>
		<div class="chart" style="">
			<div class="chartjs-size-monitor">
				<div class="chartjs-size-monitor-expand">
					<div class=""></div>
				</div>
				<div class="chartjs-size-monitor-shrink">
					<div class=""></div>
				</div>
			</div>
			<canvas id="canvas" style="display: block; width: 1379px; height: 689px;max-height: 100vh" width="1379" height="689" class="chartjs-render-monitor"></canvas>
		</div>
	</div>
	<div class="financial__banner">
		<?php
		$images_banner = wp_get_attachment_image_url( $banner_financial['ID'], 'full' );
		?>
		<img src="<?= esc_url( $images_banner ); ?>" alt="">
		<h3 class="text-banner"><?= esc_html( $text_banner ); ?></h3>
	</div>
</section>
<script>
	var config = {
		type: 'line',
		data: {
			labels: <?php echo json_encode( $years ); ?>,
			datasets: [{
				label: '<?php echo $text_gray; ?>',
				backgroundColor: window.chartColors.red,
				borderColor: window.chartColors.red,
				fill: false,
				data: <?php echo json_encode( $gross_profit ); ?>,
			}, {
				label: '<?php echo $text_blue; ?>',
				backgroundColor: window.chartColors.blue,
				borderColor: window.chartColors.blue,
				fill: false,
				data: <?php echo json_encode( $turn_over ); ?>,

			}]
		},
		options: {
			responsive: true,
			title: {
				display: true,
				text: 'FINANCIAL HIGHLIGHT (Billion VND)'
			},
			scales: {
				xAxes: [{
					display: true,
		  scaleLabel: {
			display: true,
			labelString: 'Year'
		  },

				}],
				yAxes: [{
					display: true,
					//type: 'logarithmic',
					  scaleLabel: {
						display: true,
						labelString: 'Financial highlight'
					},
					ticks: {
						min: 0,
						max: 1200,

						// forces step size to be 5 units
						stepSize: 100
					}
				}]
			}
		}
	};

	window.onload = function() {
		var ctx = document.getElementById('canvas').getContext('2d');
		window.myLine = new Chart(ctx, config);
	};

</script>
