<?php
/**
 * This Week Single Event
 * This file loads the this week widget single event
 *
 * Override this template in your own theme by creating a file at [your-theme]/tribe-events/pro/widgets/this-week/single-event.php
 *
 * @package TribeEventsCalendar
 * 
 * @cmsmasters_package 	All Business
 * @cmsmasters_version 	1.0.0
 *
 */


if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
} ?>
<div id="tribe-events-event-<?php echo esc_attr( $event->ID ); ?>" class="<?php tribe_events_event_classes( $event->ID ) ?> tribe-this-week-event" >

	<h4 class="entry-title summary">
		<a href="<?php echo esc_url( tribe_get_event_link( $event->ID ) ); ?>" rel="bookmark"><?php echo esc_html( $event->post_title ); ?></a>
	</h4>

	<div class="duration cmsmasters_theme_icon_time">
		<div class="cmsmasters_event_time cmsmasters_theme_icon_custom_time">
			<span class="cmsmasters_event_start_time"><?php echo tribe_get_start_date($event->ID, false, 'g:i a'); ?></span>
			<span class="cmsmasters_event_end_time"><?php echo tribe_get_end_date($event->ID, false, ' - g:i a'); ?></span>
		</div>
	</div>
	
	<div class="fn org tribe-venue cmsmasters_theme_icon_user_address">
		<?php echo tribe_get_venue_link( $event->ID ); ?>
	</div>

</div>