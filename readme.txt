=== Plugin Name ===
Contributors: DvanKooten
Donate link: http://dannyvankooten.com/donate/
Tags: social, social sharing, buttons, twitter, googleplus, facebook
Requires at least: 3.5
Tested up to: 3.8.1
Stable tag: 1.2
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Adds very simple social sharing buttons for Twitter, Facebook and Google+ to the end of your posts.

== Description ==

= Social Sharing By Danny =

The simplest sharing links possible for Twitter, Facebook and Google+. 

Most social sharing plugins are too ugly, heavy, complicated or poorly coded for my liking. This plugin aims to be different. Simple, lightweight and flexible.

= No script dependencies =

From itself, the buttons are actually plain text links which require <strong>NO external scripts</strong>. It makes no sense to load over 50 kilobytes of scripts and styles for a functionality 95% of your users will not use.

= Simple yet pretty & user-friendly  =

You can have the plugin load two very small files to add icons and a pop-up functionality to the sharing links. This way, users do not have to leave your website after clicking a sharing option. Loading of both files can be disabled so you can craft your own styles.

**Plugin Features**

- Sharing links for Twitter, Facebook and Google+
- Simple icon styles with a hover effect
- Simple script of just 600 bytes (not jQuery dependent) which will make the links open in a pop-up window. 
- A shortcode and a template function to display the buttons anywhere you want.
- An overridable filter to set the condition for when to display the sharing links.
- Translation ready

**Translations**

- English (en_US) - Danny
- Dutch (nl_NL) - Danny
- French (fr_FR) - [Said](http://www.ninapeople.com/)
- Danish (da_DK) - [Finn Hoelgaard](http://fhn.dk/)
- Slovenian (sl_SI) - [Domen Hrabar, Viking Marketing](http://www.vikingmarketing.si/)
- Russian (ru_RU) - Nikita
- Spanish (es_ES) - [Luciano A. Ferrer](http://cbasites.net/)
- Looking for more translations..

If you have created your own language pack, or have an update of an existing one, you can send [gettext PO and MO files](http://codex.wordpress.org/Translating_WordPress) to me so that I can bundle it into Social Sharing by Danny. You can [download the latest PO file here](http://plugins.svn.wordpress.org/dvk-social-sharing/trunk/languages/dvk-social-sharing.po).

**More information**

- [Social Sharing by Danny](http://dannyvankooten.com/wordpress-plugins/social-sharing-by-danny/)
- Check out more [WordPress plugins](http://dannyvankooten.com/wordpress-plugins/) by Danny

== Frequently Asked Questions ==

= Can I display the sharing buttons using a shortcode? =

Yes, you can use the following shortcode (eg. inside posts or pages).

`
[dvk_social_sharing]
`

= Can I display the sharing buttons using a template function? =
Yes, you can use the following PHP function from your template files.


`
<?php echo dvk_social_sharing(); ?>
`

= I want more control over when to show the sharing options =

Use the `dvkss_display` filter to show the links in more places. 

*Example 1: will add the sharing links to everything possible*

`
add_filter('dvkss_display', '__return_true');
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

**twitter_username** (string)

The Twitter username to add to tweets. This will override the value from the settings page.

**social_options** (comma separated string)

The social media buttons to show. You can also use this to change the order of the buttons. Defaults to `twitter, facebook, googleplus`, which are the only 3 possible values.

**before_text**  (string)

The text to show before the links. This will override the value in the settings page.

**twitter_text** (string)
**facebook_text** (string)
**googleplus_text** (string)

The texts for the different links. Defaults to the string set in the translation file.

== Screenshots ==

1. Simple but beautiful sharing links add the end of your posts. 
2. Disable the default plugin CSS to create your own styles.
2. The settings page of the plugin. 

== Installation ==

= Installing the plugin =

1. In your WordPress admin panel, go to *Plugins > New Plugin*, search for *Social Sharing by Danny* and click "Install now"
1. Alternatively, download the plugin and upload the contents of `dvk-social-sharing.zip` to your plugins directory, which usually is `/wp-content/plugins/`.
1. Activate the plugin.

= Additional Customization =

Have a look at the [frequently asked questions](http://wordpress.org/plugins/dvk-social-sharing/faq/) section for some examples of additional customization.

== Changelog ==
= 1.2 - March 19, 2014 =
**Additions**

- Added option to automatically add sharing options to all registered post types
- Added Spanish translations, props to [Luciano A. Ferrer](http://cbasites.net/).

**Improvements**

- Disabled Pop-up JS by default until we figure out a cross-browser compatibility fix.

= 1.1 - February 19, 2014 =
- Added: Slovenian translations, thanks to [Domen Hrabar, Viking Marketing](http://www.vikingmarketing.si/) 
- Improved: direct file access security


= 1.0.9 - December 30, 2013 =
- Added: Danish translation, thanks to [Finn Hoelgaard](http://fhn.dk/)!
- Added: Russian translation, thanks to Nikita!
- Improved: Pop-up script now waits for full page load.

= 1.0.6 - December 20, 2013 =
- Improved: Pop-up JS now used addEventListener to enable multiple event listeners (like a Google Analytics plugin) attaching to the sharing links.

= 1.0.5 - December 9, 2013 =
- Added: French translations, thanks to [Said](http://www.ninapeople.com/)
- Improved: All backend strings are now translatable
- Improved: Prevented direct access or search engine indexing of plugin files
- Improved: Facebook URL sharing parameters

= 1.0.4 - December 2, 2013 =
- Improved: Minified pop-up script to 480 bytes.
- Improved: Removed image attribute from Facebook Share URL. FB will now pick up `og:image` meta tags.

= 1.0.3 - November 25, 2013 =
- Fixed: undefined index notice when saving options.

= 1.0.2 - November 20, 2013 =

- Added: Dutch translation
- Added: Option to change the text that shows before the sharing links.

= 1.0.1 - November 20, 2013 =

- Fixed: Added settings link to plugins overview page
- Fixed: "tweet about" option in admin now tweets about the correct plugin. 

= 1.0 - November 17, 2013 =

- Initial release.