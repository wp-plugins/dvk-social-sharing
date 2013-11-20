<div id="dvkss" class="wrap">
	<div class="dvkss-container">
		<div class="dvkss-column dvkss-primary">

			<h2>Social Sharing <small>by Danny van Kooten</small></h2>


		<form id="dvkss_settings" method="post" action="options.php">
			<?php settings_fields( 'dvk_social_sharing' ); ?>
	
			<h3><?php _e('Settings'); ?></h3>

			<table class="form-table">

				<tr valign="top">
					<th scope="row">
						<?php _e('Auto-add sharing links?', 'dvk-social-sharing'); ?>
					</th>
					<td>
						<label><input type="radio" name="dvk_social_sharing[auto_add]" value="1" <?php checked($opts['auto_add'], 1); ?> > Yes</label> &nbsp; 
						<label><input type="radio" name="dvk_social_sharing[auto_add]" value="0" <?php checked($opts['auto_add'], 0); ?> > No</label>
						<br>
						<small><?php _e('Automatically adds the sharing links to the end of posts.', 'dvk-social-sharing'); ?></small>
					</td>
				</tr>

				<tr valign="top" class="row-load-icon-css">
					<th scope="row">
						<?php _e('Load Icon CSS?', 'dvk-social-sharing'); ?>
					</th>
					<td>
						<label><input type="radio" name="dvk_social_sharing[load_icon_css]" value="1" <?php checked($opts['load_icon_css'], 1); ?> > Yes</label> &nbsp; 
						<label><input type="radio" name="dvk_social_sharing[load_icon_css]" value="0" <?php checked($opts['load_icon_css'], 0); ?> > No</label>
						<br>
						<small><?php _e('Adds simple but pretty icons to the sharing links.'); ?></small>
					</td>
				</tr>

				<tr valign="top" class="row-icon-size">
					<th scope="row">
						<label for="dvkss_icon_size"><?php _e('Icon Size', 'dvk-social-sharing'); ?></label>
					</th>
					<td>
						<select name="dvk_social_sharing[icon_size]" id="dvkss_icon_size" class="widefat">
							<option value="16" <?php selected($opts['icon_size'], 16); ?> >Small - 16x16 pixels</option>
							<option value="32" <?php selected($opts['icon_size'], 32); ?> >Normal - 32x32 pixels</option>
						</select>
					</td>
				</tr>

				<tr valign="top">
					<th scope="row">
						<?php _e('Load Pop-Up JS?', 'dvk-social-sharing'); ?>
					</th>
					<td>
						<label><input type="radio" name="dvk_social_sharing[load_popup_js]" value="1" <?php checked($opts['load_popup_js'], 1); ?> > Yes</label> &nbsp; 
						<label><input type="radio" name="dvk_social_sharing[load_popup_js]" value="0" <?php checked($opts['load_popup_js'], 0); ?> > No</label>
						<br>
						<small>A small JavaScript file of just 600 bytes so people won't have to leave your website to share.</small>
					</td>
				</tr>

				<tr valign="top">
					<th scope="row">
						<label for="dvkss_twitter_username"><?php _e('Twitter Username', 'dvk-social-sharing'); ?></label>
					</th>
					<td>
						<input type="text" name="dvk_social_sharing[twitter_username]" id="dvkss_twitter_username" class="widefat" value="<?php echo esc_attr($opts['twitter_username']); ?>">
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
			<h3 class="dvkss-title">Donate $10, $20 or $50</h3>
			<p>If you like this plugin, consider supporting it by donating a token of your appreciation.</p>

			<div class="dvkss-donate">
				<form class="donate" action="https://www.paypal.com/cgi-bin/webscr" method="post">
					<input type="hidden" name="cmd" value="_donations">
					<input type="hidden" name="business" value="AP87UHXWPNBBU">
					<input type="hidden" name="lc" value="US">
					<input type="hidden" name="item_name" value="Danny van Kooten">
					<input type="hidden" name="item_number" value="Social Sharing by Danny">
					<input type="hidden" name="currency_code" value="USD">
					<input type="hidden" name="bn" value="PP-DonationsBF:btn_donateCC_LG.gif:NonHosted">
					<button name="submit" class="button-primary">Donate with PayPal</button>
					<img alt="" border="0" src="https://www.paypalobjects.com/nl_NL/i/scr/pixel.gif" width="1" height="1">
				</form>
			</div>
		
			<p>Some other ways to support this plugin</p>
			<ul class="ul-square">
				<li><a href="http://wordpress.org/support/view/plugin-reviews/dvk-social-sharing?rate=5#postform" target="_blank">Leave a &#9733;&#9733;&#9733;&#9733;&#9733; review on WordPress.org</a></li>
				<li><a href="http://dannyvankooten.com/wordpress-plugins/dvk-social-sharing/" target="_blank">Link to the plugin page from your blog</a></li>
				<li><a href="http://twitter.com/?status=I%20show%20recent%20facebook%20posts%20on%20my%20%23WordPress%20site%20using%20Recent%20Facebook%20Posts%20by%20%40DannyvanKooten%20-%20love%20it!%20http%3A%2F%2Fwordpress.org%2Fplugins%2Fdvk-social-sharing%2F" target="_blank">Tweet about Recent Facebook Posts</a></li>
				<li><a href="http://wordpress.org/plugins/dvk-social-sharing/#compatibility">Vote "works" on the WordPress.org plugin page</a></li>
			</ul>
		</div>

		<div class="dvkss-box">
			<h3 class="dvkss-title">Looking for support?</h3>
			<p>Please use the <a href="http://wordpress.org/support/plugin/dvk-social-sharing">plugin support forums</a> on WordPress.org.</p>
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

