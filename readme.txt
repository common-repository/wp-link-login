=== Plugin Name ===
Contributors: loosecode
Donate link: http://loosecode.com/
Tags: link, login
Requires at least: 2.9
Tested up to: 3.0
Stable tag: 0.5

This plugin add a link for login and logout to each page on your weblog.

== Description ==

== Installation ==

1. Upload directory `loosecode-linklogin/` to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. You can use this plugin by three ways:
	1. automatic way: the Link Login will be automatically display in the footer if the function wp_footer is present in the footer file of the theme used;
	2. shortcode way: you can insert the link in any post content with the shortcode lsc_ll_link[class="new_class"]. 
		The attribute 'class' is optional. The default value is "lsc_ll_linklogin";
	3. function way: you can insert the link with the function lsc_ll_insert_link($class) | use so: “echo lsc_ll_insert_link();“ 
		The parameter 'class' is optional. The default value is "lsc_ll_linklogin";
		
More info  > http://lab.loosecode.com/wordpress-plugins/wp-link-login.html

== Changelog ==

= 0.5 =
Fixed login front

= 0.4 =
Update readme.txt

= 0.3 =
Add shortcode

== Upgrade Notice ==

