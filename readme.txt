=== Plugin Name ===
Contributors: DvanKooten
Donate link: http://dannyvankooten.com/donate/
Tags: social, social sharing, buttons, twitter, googleplus, facebook
Requires at least: 3.5
Tested up to: 3.7.1
Stable tag: 1.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Adds very simple social sharing buttons for Twitter, Facebook and Google+ to the end of your posts.

== Description ==

= Social Sharing By Danny =

The simplest sharing links possible for Twitter, Facebook and Google+. 

From itself, the buttons are actually plain text links which require <strong>NO external scripts</strong>. It makes no sense to load over 50 kilobytes of scripts and styles for a functionality 95% of your users will not use.

The plugin comes with a very simple CSS and JS file (both under 1KB) which add icons and a pop-up functionality to the plain-text links, so users do not have to leave your website to share your posts. Both can be disabled from the setting page, offering you a lot of flexibility.

**Plugin Features**

- Sharing links for Twitter, Facebook and Google+
- Simple icon styles with a hover effect
- Simple script of just 600 bytes (not jQuery dependent) which will make the links open in a pop-up window. 
- A shortcode and a template function to display the buttons anywhere you want.
- An overridable filter to set the condition for when to display the sharing links.

== Frequently Asked Questions ==

= Another sharing plugin, really? =

Yes. Most sharing plugins in the WordPress plugin repository are over-complicated, ugly, poorly coded or just too heavy for my liking. This plugin is simple, flexible and extremely lightweight. 

= Can I display the sharing buttons using a shortcode? =

Yes, you can use the following shortcode.

`
[dvk_social_sharing]
`

= Can I display the sharing buttons using a template function? =
Yes, you can use the following PHP function from your template files.


`
dvk_social_sharing();
`

= I want to add the sharing links to more than just single posts =

Use the `dvkss_display` filter to show the links in more places. 

*Example 1: will add the sharing links to everything possible*

`
function my_display_condition() {
	return true;
}

add_filter('dvkss_display', 'my_display_condition');
`

*Example 2: will add the sharing links to all single posts, pages and other post types.*

`
function my_display_condition() {
	return is_singular();
}

add_filter('dvkss_display', 'my_display_condition');
`


= Shortcode and function arguments =

**element** (string)

The element to use as the wrapping element. Defaults to `p`, a paragraph element.

**twitter_username**

The Twitter username to add to tweets. This will override the value from the settings page.

**social_options** (comma separated string)

The social media buttons to show. You can also use this to change the order of the buttons. Defaults to `twitter, facebook, googleplus`, which are the only 3 possible values.

== Screenshots ==

1. Simple but beautiful sharing links add the end of your posts. 
2. Disable of the CSS to create your own styles.
2. The settings page of the plugin. 

== Installation ==

= Installing the plugin =

1. In your WordPress admin panel, go to *Plugins > New Plugin*, search for *Social Sharing by Danny* and click "Install now"
1. Alternatively, download the plugin and upload the contents of `dvk-social-sharing.zip` to your plugins directory, which usually is `/wp-content/plugins/`.
1. Activate the plugin.

= Additional Customization =

Have a look at the [frequently asked questions](http://wordpress.org/plugins/dvk-social-sharing/faq/) section for some examples of additional customization.

== Changelog ==

= 1.0 - November 17, 2013 =

- Initial release.