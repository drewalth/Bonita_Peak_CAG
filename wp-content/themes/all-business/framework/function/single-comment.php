<?php 
/**
 * @package 	WordPress
 * @subpackage 	All Business
 * @version 	1.0.0
 * 
 * Custom Single Comment Template
 * Created by CMSMasters
 * 
 */


function mytheme_comment($comment, $args, $depth) {
    $GLOBALS['comment'] = $comment;
    ?>
    <li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">
        <div id="comment-<?php comment_ID(); ?>" class="comment-body cmsmasters_comment_item">
			<div class="cmsmasters_comment_item_cont_info_wrap">
				<figure class="cmsmasters_comment_item_avatar">
					<?php echo get_avatar($comment->comment_author_email, 50, get_option('avatar_default')) . "\n"; ?>
				</figure>
				<div class="cmsmasters_comment_item_title_wrap">
					<?php 
					echo '<abbr class="published cmsmasters_comment_item_date" title="' . get_comment_time('d.m.y') . '">' . 
						get_comment_time('d.m.y') . 
					'</abbr>';
					?>
					<h3 class="fn cmsmasters_comment_item_title"><?php echo get_comment_author_link(); ?></h3>
				</div>
				<div class="cmsmasters_comment_item_cont_info">
					<?php
					edit_comment_link(esc_attr__('Edit', 'all-business'), '', '');
					
					
					comment_reply_link(array_merge($args, array( 
						'depth' => $depth, 
						'max_depth' => $args['max_depth'], 
						'reply_text' => esc_attr__('Reply', 'all-business') 
					)));
					?>
				</div>
			</div>
			<div class="comment-content cmsmasters_comment_item_content">
				<?php 
				comment_text();
				
				if ($comment->comment_approved == '0') {
					echo '<p>' . 
						'<em>' . esc_html__('Your comment is awaiting moderation.', 'all-business') . '</em>' . 
					'</p>';
				}
				?>
			</div>
        </div>
    <?php 
}

