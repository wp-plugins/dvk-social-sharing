<?php 

if( ! defined("DVKSS_VERSION") ) {
	header( 'Status: 403 Forbidden' );
	header( 'HTTP/1.1 403 Forbidden' );
	exit;
}

?><div id="dvkss" class="wrap">
	<div class="dvkss-container">
		<div class="dvkss-column dvkss-primary">

			<h2>Social Sharing <small><?php _e( 'by' ); ?> Danny van Kooten</small></h2>


		<form id="dvkss_settings" method="post" action="options.php">
			<?php settings_fields( 'dvk_social_sharing' ); ?>
	
			<h3><?php _e('Settings'); ?></h3>

			<table class="form-table">

				<tr valign="top">
					<th scope="row">
						<?php _e('Text before links', 'dvk-social-sharing'); ?>
					</th>
					<td>
						<input type="text" name="dvk_social_sharing[before_text]" id="dvkss_text" class="widefat" placeholder="Share this post:" value="<?php echo esc_attr($opts['before_text']); ?>">
						<small><?php _e('The text to show before the sharing links.', 'dvk-social-sharing'); ?></small>
					</td>
				</tr>

				<tr valign="top">
					<th scope="row">
						<?php _e('Automatically add sharing links?', 'dvk-social-sharing'); ?>
					</th>
					<td>
						<ul>
						<?php foreach( $post_types as $post_type_id => $post_type ) { ?>
							<li>
								<label>
									<input type="checkbox" name="dvk_social_sharing[auto_add_post_types][]" value="<?php echo esc_attr( $post_type_id ); ?>" <?php checked( in_array( $post_type_id, $opts['auto_add_post_types'] ), true ); ?>> <?php printf( __(' Auto add to %s', 'dvk-social-sharing' ), $post_type->labels->name ); ?>
								</label>
							</li>
						<?php } ?>
						</ul>
						
						<small><?php _e('Automatically adds the sharing links to the end of the selected post types.', 'dvk-social-sharing'); ?></small>
					</td>
				</tr>

				<tr valign="top" class="row-load-icon-css">
					<th scope="row">
						<?php _e('Load Icon CSS?', 'dvk-social-sharing'); ?>
					</th>
					<td>
						<label><input type="radio" name="dvk_social_sharing[load_icon_css]" value="1" <?php checked($opts['load_icon_css'], 1); ?> > <?php _e('Yes'); ?></label> &nbsp; 
						<label><input type="radio" name="dvk_social_sharing[load_icon_css]" value="0" <?php checked($opts['load_icon_css'], 0); ?> > <?php _e('No'); ?></label>
						<br>
						<small><?php _e('Adds simple but pretty icons to the sharing links.', 'dvk-social-sharing'); ?></small>
					</td>
				</tr>

				<tr valign="top" class="row-icon-size">
					<th scope="row">
						<label for="dvkss_icon_size"><?php _e('Icon Size', 'dvk-social-sharing'); ?></label>
					</th>
					<td>
						<select name="dvk_social_sharing[icon_size]" id="dvkss_icon_size" class="widefat">
							<option value="16" <?php selected($opts['icon_size'], 16); ?> ><?php _e('Small'); ?> - 16x16 <?php _e( 'pixels' ); ?></option>
							<option value="32" <?php selected($opts['icon_size'], 32); ?> ><?php _e('Normal'); ?> - 32x32 <?php _e( 'pixels' ); ?></option>
						</select>
					</td>
				</tr>

				<tr valign="top">
					<th scope="row">
						<?php _e('Load Pop-Up JS?', 'dvk-social-sharing'); ?>
					</th>
					<td>
						<label><input type="radio" name="dvk_social_sharing[load_popup_js]" value="1" <?php checked($opts['load_popup_js'], 1); ?> > <?php _e('Yes'); ?></label> &nbsp; 
						<label><input type="radio" name="dvk_social_sharing[load_popup_js]" value="0" <?php checked($opts['load_popup_js'], 0); ?> > <?php _e('No'); ?></label>
						<br>
						<small><?php _e("A small JavaScript file of just 600 bytes so people won't have to leave your website to share.", 'dvk-social-sharing'); ?></small>
					</td>
				</tr>

				<tr valign="top">
					<th scope="row">
						<label for="dvkss_twitter_username"><?php _e('Twitter Username', 'dvk-social-sharing'); ?></label>
					</th>
					<td>
						<input type="text" name="dvk_social_sharing[twitter_username]" id="dvkss_twitter_username" class="widefat" placeholder="DannyvanKooten" value="<?php echo esc_attr($opts['twitter_username']); ?>">
						<small><?php _e('Set this if you want to append "via @yourTwitterUsername" to tweets.', 'dvk-social-sharing'); ?></small>
					</td>
				</tr>

			</table>

			<?php
				submit_button();
			?>

		</form>

	</div>

	<!-- Start dvkss Sidebar -->
	<div class="dvkss-column dvkss-secondary">

		<div class="dvkss-box">
			<h3 class="dvkss-title"><?php _e( 'Donate $10, $20 or $50', 'dvk-social-sharing' ); ?></h3>
			<p><?php _e( 'If you like this plugin, consider supporting it by donating a token of your appreciation.', 'dvk-social-sharing' ); ?></p>

			<div class="dvkss-donate">
				<form class="donate" action="https://www.paypal.com/cgi-bin/webscr" method="post">
					<input type="hidden" name="cmd" value="_donations">
					<input type="hidden" name="business" value="AP87UHXWPNBBU">
					<input type="hidden" name="lc" value="US">
					<input type="hidden" name="item_name" value="Danny van Kooten">
					<input type="hidden" name="item_number" value="Social Sharing by Danny">
					<input type="hidden" name="currency_code" value="USD">
					<input type="hidden" name="bn" value="PP-DonationsBF:btn_donateCC_LG.gif:NonHosted">
					<button name="submit" class="button-primary"><?php _e( 'Donate with PayPal', 'dvk-social-sharing' ); ?></button>
					<img alt="" border="0" src="https://www.paypalobjects.com/nl_NL/i/scr/pixel.gif" width="1" height="1">
				</form>
			</div>
		
			<p><?php _e( 'Some other ways to support this plugin', 'dvk-social-sharing' ); ?></p>
			<ul class="ul-square">
				<li><a href="http://wordpress.org/support/view/plugin-reviews/dvk-social-sharing?rate=5#postform" target="_blank"><?php printf( __( 'Leave a %s review on WordPress.org', 'dvk-social-sharing' ), '&#9733;&#9733;&#9733;&#9733;&#9733;' ); ?></a></li>
				<li><a href="http://dannyvankooten.com/wordpress-plugins/dvk-social-sharing/" target="_blank"><?php _e( 'Link to the plugin page from your blog', 'dvk-social-sharing' ); ?></a></li>
				<li><a href="http://twitter.com/intent/tweet/?text=<?php echo urlencode('I am using Social Sharing by Danny to show sharing options on my WordPress site. It\'s great!'); ?>&via=DannyvanKooten&url=<?php echo urlencode('http://wordpress.org/plugins/dvk-social-sharing/'); ?>" target="_blank">Tweet about Social Sharing by Danny</a></li>
				<li><a href="http://wordpress.org/plugins/dvk-social-sharing/#compatibility"><?php _e( 'Vote "works" on the WordPress.org plugin page', 'dvk-social-sharing' ); ?></a></li>
			</ul>
		</div>

		<div class="dvkss-box">
			<h3 class="dvkss-title"><?php _e( 'Looking for support?', 'dvk-social-sharing' ); ?></h3>
			<p><?php printf( __( 'Please use the %splugin support forums%s on WordPress.org.', 'dvk-social-sharing' ), '<a href="http://wordpress.org/support/plugin/dvk-social-sharing">', '</a>' ); ?></p>
		</div>

		<div class="dvkss-box">
			<h3 class="dvkss-title">Other Useful plugins</h3>
			<ul class="ul-square">
				<li><a href="http://wordpress.org/plugins/mailchimp-for-wp/">MailChimp for WordPress</a></li>
				<li><a href="http://wordpress.org/plugins/scroll-triggered-boxes/">Scroll Triggered Boxes</a></li>
				<li><a href="http://wordpress.org/plugins/wysiwyg-widgets/">WYSIWYG Widgets</a></li>
				<li><a href="http://wordpress.org/plugins/recent-facebook-posts/">Recent Facebook Posts</a></li>
			</ul>
			</div>

			<div class="dvkss-box">
				<h3 class="dvkss-title">About the developer</h3>
				<p>My name is <a href="http://dannyvankooten.com/">Danny van Kooten</a>. I develop WordPress plugins which help you build your websites. I love simplicity, happy customers and clean code.</p>
				<p>Take a look at my other <a href="http://dannyvankooten.com/wordpress-plugins/">plugins for WordPress</a> or <em>like</em> my Facebook page to stay updated.</p>
				<p><iframe src="//www.facebook.com/plugins/like.php?href=http%3A%2F%2Fwww.facebook.com%2FCodeToTheChase&amp;width&amp;layout=standard&amp;action=like&amp;show_faces=true&amp;share=false&amp;appId=225994527565061" scrolling="no" frameborder="0" style="border:none; width: 100%; overflow:hidden; height: 80px;" allowTransparency="true"></iframe></p>
				<p>You can also follow me on twitter <a href="http://twitter.com/dannyvankooten">here</a>.</p>
			</div>
		</div>
		<!-- End dvkss Sidebar -->

		<br style="clear:both; " />
	</div>
</div>

