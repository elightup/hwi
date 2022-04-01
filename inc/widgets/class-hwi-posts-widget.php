<?php // @codingStandardsIgnoreLine
/**
 * Recent posts widget
 * Get recent posts and display in widget
 */

class hwi_Posts_Widget extends WP_Widget {
	/**
	 * Default widget options.
	 *
	 * @var array
	 */
	protected $defaults;

	/**
	 * Widget setup.
	 */
	public function __construct() {
		$this->defaults = array(
			'title' => esc_html__( 'Title Widget', 'hwi' ),
			'id'    => 2,
		);
		parent::__construct(
			'hwi-post',
			esc_html__( 'Hwi: Recent news', 'hwi' ),
			array(
				'description' => esc_html__( 'A widget that displays your child category from all categories or a category', 'hwi' ),
			)
		);
	}

	/**
	 * How to display the widget on the screen.
	 *
	 * @param array $args     Widget parameters.
	 * @param array $instance Widget instance.
	 */
	public function widget( $args, $instance ) {
		$instance = wp_parse_args( $instance, $this->defaults );
		$titlewd  = apply_filters( 'widget_title', $instance['title'] );
		$id       = apply_filters( 'widget_id', $instance['id'] );
		$args     = [
			'post_type'      => 'post',
			'posts_per_page' => 5,
			'cat'            => $id,
		];
		$query    = new WP_Query( $args );
		?>
		<!--widget content-->
		<section class="news-sidebar">
			<h2 class="title"><?= esc_html( $titlewd );?></h2>
			<div class="news-sidebar__wrap">
				<?php
				$i = 1;
				if ( $query->have_posts() ) :
					while ( $query->have_posts() ) :
						$query->the_post();
						if ( $i === 1 ) :
							get_template_part( 'template-parts/content', 'colum' );
						else :
							get_template_part( 'template-parts/content', 'row' );
						endif;
						$i++;
					endwhile;
				endif;
				wp_reset_postdata();
				?>
			</div>
		</section>
		<?php
	}
	/**
	 * Update the widget settings.
	 *
	 * @param array $new_instance New widget instance.
	 * @param array $old_instance Old widget instance.
	 *
	 * @return array
	 */
	public function update( $new_instance, $old_instance ) {
		$instance           = $old_instance;
		$instance['title']  = sanitize_text_field( $new_instance['title'] );
		$instance['number'] = absint( $new_instance['number'] );
		$instance['id']     = absint( $new_instance['id'] );
		return $instance;
	}

	/**
	 * Widget form.
	 *
	 * @param array $instance Widget instance.
	 *
	 * @return void
	 */
	public function form( $instance ) {
		$instance = wp_parse_args( $instance, $this->defaults );
		?>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>">
				<?php esc_html_e( 'Title:', 'hwi' ); ?>
			</label>
			<input type="text" class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" value="<?php echo esc_attr( $instance['title'] ); ?>">
		</p>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'id' ) ); ?>">
				<?php esc_html_e( 'ID category:', 'hwi' ); ?>
			</label>
			<input type="text" class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'id' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'id' ) ); ?>" value="<?php echo absint( $instance['id'] ); ?>">
		</p>
		<?php
	}

}
