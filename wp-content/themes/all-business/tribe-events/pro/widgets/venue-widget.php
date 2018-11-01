<?php
/**
 * Events Pro Venue Widget
 * This is the template for the output of the venue widget. 
 *
 * Override this template in your own theme by creating a file at [your-theme]/tribe-events/widgets/venue-widget.php
 *
 * @package TribeEventsCalendarPro
 * 
 * @cmsmasters_package 	All Business
 * @cmsmasters_version 	1.0.0
 *
 */


if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}

$events_label_plural = tribe_get_event_label_plural();

?>

<div class="tribe-venue-widget-wrapper">
	<div class="tribe-venue-widget-venue">
		<?php if (has_post_thumbnail($venue_ID)) { ?>
			<div class="tribe-venue-widget-thumbnail">
				<?php echo get_the_post_thumbnail($venue_ID, 'cmsmasters-project-thumb' ); ?>
			</div>
		<?php } ?>
		<div class="tribe-venue-widget-venue-name cmsmasters_theme_icon_custom_location">
			<?php echo tribe_get_venue_link($venue_ID); ?>
		</div>
	</div>

	<?php if ( 0 === $events->post_count ): ?>
		<?php printf( esc_html__( 'No upcoming %s.', 'tribe-events-calendar-pro' ),  strtolower( $events_label_plural ) ); ?>
	<?php else: ?>
	<?php do_action( 'tribe_events_venue_widget_before_the_list' ); ?>
	<ul class="tribe-venue-widget-list hfeed vcalendar">
		<?php while ( $events->have_posts() ): ?>
			<?php $events->the_post(); ?>
			<li class="<?php tribe_events_event_classes() ?>">
				<div class="cmsmasters_event_date">
					<span class="cmsmasters_event_day"><?php echo tribe_get_start_date(null, false, 'd'); ?></span>
					<span class="cmsmasters_event_month"><?php echo tribe_get_start_date(null, false, 'M'); ?></span>
				</div>
				<h4 class="entry-title summary">
					<a href="<?php echo esc_url( tribe_get_event_link() ); ?>"><?php echo get_the_title( get_the_ID() ) ?></a>
				</h4>
				<div class="cmsmasters_widget_event_info">
					<div class="cmsmasters_event_time cmsmasters_theme_icon_custom_time">
						<span class="cmsmasters_event_start_time"><?php echo tribe_get_start_date(null, false, 'g:i a'); ?></span>
						<span class="cmsmasters_event_end_time"><?php echo tribe_get_end_date(null, false, ' - g:i a'); ?></span>
					</div>
					<?php if ( tribe_get_cost( get_the_ID() ) != '' ): ?>
					<div class="cmsmasters_widget_event_info_cost cmsmasters_theme_icon_money">
						<span class="tribe-events-event-cost">
							<?php echo tribe_get_cost( get_the_ID(), true ); ?>
						</span>
					</div>
					<?php endif; ?>
				</div>
			</li>
	<?php endwhile;	?>
	</ul>
	<?php do_action( 'tribe_events_venue_widget_after_the_list' ); ?>
	<?php endif; ?>
	<p class="tribe-events-widget-link">
		<a href="<?php echo esc_url( tribe_get_venue_link( $venue_ID, false ) ); ?>"><?php printf( esc_html__( 'View all %s at this %s', 'the-events-calendar' ), $events_label_plural, tribe_get_venue_label_singular() ); ?></a>
	</p>
</div>
