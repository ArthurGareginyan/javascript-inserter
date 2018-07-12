=== JavaScript Inserter ===
Contributors: Arthur Gareginyan
Tags: inject, insert, insert scripts, insert javascript, insert js, insert custom scripts, insert custom code, javascript, js, code, custom code, script, scripts, custom scripts, head code, header code, footer code
Donate link: https://www.spacexchimp.com/donate.html
Requires at least: 3.9
Tested up to: 4.9
Stable tag: 1.1
License: GPL3
License URI: http://www.gnu.org/licenses/gpl-3.0.html

Easily add your custom JavaScript code to the WordPress website's head and footer sections. This is a must have tool for authors and website's owners.


== Description ==

An easy to use, with intuitive interface, WordPress plugin that gives you the ability to easily insert your custom JavaScript code in the head or/and footer section of your website.

No need anymore to editing a files of your theme or plugins in order to add your custom JavaScript code. You can add they on the plugin settings page. Just add your custom JavaScript code in the field on the plugin settings page and this plugin will do the rest for you. It adds required scripts to the head section of your website automatically, without changing any of your themes file and without slowing down your website. It's really useful in case of any theme update, because your custom JavaScript code would never be lost! Your custom JavaScript code will keep on working, no matter how many times you upgrade or switch your theme and plugins.

If you want more options then tell us and we will be happy to add it.

**Features**

* Lightweight and fast
* Secure code with using clear coding standards
* Intuitive interface with many settings
* Cross browser compatible (work smooth in any modern browser)
* Compatible with all WordPress themes
* RTL compatible (right to left)
* Translation ready

**Key features include...**

* Inserts custom JavaScript code in beginning or/and end of HEAD tag
* Inserts custom JavaScript code in beginning or/and end of footer
* And much, much more!

**Translation**

This plugin is ready for translation and has already been translated into several languages.

* English (default)
* Russian (translation by [Milena Kiseleva](https://www.instagram.com/milava_kiseleva/))
* German (translation by Michael)
* Polish
* Spanish (translation by Patricio Toledo)

If you want to help translate this plugin then please visit the [translation page](https://translate.wordpress.org/projects/wp-plugins/javascript-inserter).

**Minimum system requirements:**

* [PHP](https://php.net) version **5.2** or higher.
* [MySQL](https://www.mysql.com) version **5.0** or higher.

**Recommended system requirements:**

* [PHP](https://php.net) version **7.0** or higher.
* [MySQL](https://www.mysql.com) version **5.6** or higher.

**Contribution**

Developing plugins is long and tedious work. If you benefit or enjoy this plugin please take the time to:

* [Donate](https://www.spacexchimp.com/donate.html) to support ongoing development. Your contribution would be greatly appreciated.
* [Rate and Review](https://wordpress.org/support/view/plugin-reviews/javascript-inserter?rate=5#postform) this plugin.
* [Share with us](https://www.spacexchimp.com/contact.html) or view the [GitHub Repo](https://github.com/ArthurGareginyan/javascript-inserter) if you have any ideas or suggestions to make this plugin better.


== Installation ==

Install "JavaScript Inserter" just as you would any other WordPress Plugin.

Automatically via WordPress Admin Area:

1. Log in to Admin Area of your WordPress website.
2. Go to "`Plugins`" -> "`Add New`".
3. Find this plugin and click install.
4. Activate this plugin through the "`Plugins`" tab.

Manually via FTP access:

1. Download a copy (ZIP file) of this plugin from WordPress.org.
2. Unzip the ZIP file.
3. Upload the unzipped catalog to your website's plugin directory (`/wp-content/plugins/`).
4. Log in to Admin Area of your WordPress website.
5. Activate this plugin through the "`Plugins`" tab.

After installation and activation, the "`JS Inserter`" menu item will appear in the "`Settings`" section of Admin Area. Click on it in order to view the plugin settings page.

[More help installing plugins](http://codex.wordpress.org/Managing_Plugins#Installing_Plugins "WordPress Codex: Installing Plugins")


== Frequently Asked Questions ==

= Q. Will this plugin work on my WordPress.COM website? =
A. Sorry, this plugin is available for use only on self-hosted (WordPress.ORG) websites.

= Q. Can I use this plugin on my language? =
A. Yes. This plugin is ready for translation and has already been translated into several languages. But If your language is not available then you can make one. The POT file is included and placed in the "`languages`" folder. Just [send the PO file to us](https://www.spacexchimp.com/contact.html) and we will include this translation within the next plugin update. Many of plugin users would be delighted if you share your translation with the community. Thanks for your contribution!

= Q. How does it work? =
A. Simply go to the plugin settings page, place your custom JavaScript code in the field and click the "Save changes" button. Enjoy the result of applying your custom JavaScript code. It's that simple!
You can find the plugin settings page at "`WordPress Admin Area`" -> "`Settings`" -> "`JS Inserter`".

= Q. How much of JavaScript code I can enter in the field? =
A. We don't limit the number of characters.

= Q. Does this plugin requires any modification of the theme? =
A. Absolutely not. This plugin is configurable entirely from the plugin settings page that you can find in the Admin Area of your WordPress website.

= Q. Does this require any knowledge of HTML or CSS? =
A. Absolutely not. This plugin can be configured with no knowledge of HTML or CSS, using an easy-to-use plugin settings page.

= Q. Can I add my custom JavaScript code to a specific page of my website? =
A. For now, this plugin does not have an option to apply the custom JavaScript code only on specific pages. We plan to add this feature soon. But for now in order to apply your custom JavaScript code only on specific pages of your website, you need to wrap your custom JavaScript code in a PHP code that will determine the page you want. You need something like this:

`function my_custom_js_code() {

    // Stop the function if this is not the Home page of website
    if ( !is_home() ) {
        return;
    }

    // Print the custom JavaScript code
    echo '<script>YOUR CUSTOM JAVASCRIPT CODE</script>';
}
add_action( 'wp_head', 'my_custom_js_code' );`

To apply the PHP code on a website, we can recommend you to use another our plugin called [My Custom Functions](https://wordpress.org/plugins/my-custom-functions/).

= Q. It's not working. What could be wrong? =
A. As with every plugin, it's possible that things don't work. The most common reason for this is a web browser's cache. Every web browser stores a cache of the websites you visit (pages, images, and etc.) to reduce bandwidth usage and server load. This is called the browser's cache.​ Clearing your browser's cache may solve the problem.

It's impossible to tell what could be wrong exactly, but if you post a support request in the plugin's support forum on WordPress.org, we'd be happy to give it a look and try to help out. Please include as much information as possible, including a link to your website where the problem can be seen.

= Q. The last WordPress update is preventing me from editing my website that is using this plugin. Why is this? =
A. This plugin can not cause such problem. More likely, the problem are related to the settings of the website. It could just be a cache, so please try to clear your website's cache (may be you using a caching plugin, or some web service such as the CloudFlare) and then the cache of your web browser. Also please try to re-login to the website, this too can help.

= Q. Where to report bug if found? =
A. Bug reports are very welcome! Please visit [our contact page](https://www.spacexchimp.com/contact.html) and report. Thank you!

= Q. Where to share any ideas or suggestions to make the plugin better? =
A. Any suggestions are very welcome! Please visit [our contact page](https://www.spacexchimp.com/contact.html) and share. Thank you!

= Q. I love this plugin! Can I help somehow? =
A. Yes, any contributions are very welcome! Please visit [our donation page](https://www.spacexchimp.com/donate.html). Thank you!


== Screenshots ==

1. Plugin page.
2. Plugin page with Google Analytics tracking code added.


== Other Notes ==

****

"JavaScript Inserter" is one of the own software projects of [Space X-Chimp](https://www.spacexchimp.com).

**License**

This plugin is licensed under the [GNU General Public License, version 3 (GPLv3)](http://www.gnu.org/licenses/gpl-3.0.html) and is distributed free of charge.
Commercial licensing (e.g. for projects that can’t use an open-source license) is available upon request.

**Credits**

* The icon of plugin is a copyrighted image created by the [Space X-Chimp](https://www.spacexchimp.com) team. (C) All rights reserved.
* The banner of plugin is a copyrighted image created by the [Space X-Chimp](https://www.spacexchimp.com) team. (C) All rights reserved.
* [CodeMirror](https://codemirror.net/) is an open-source project shared under the [MIT license](https://codemirror.net/LICENSE).
* [Bootstrap](http://getbootstrap.com) by Twitter, Inc. released under the [MIT license](https://github.com/twbs/bootstrap/blob/master/LICENSE).

**Links**

* [Developer website](https://www.spacexchimp.com)
* [Dedicated plugin page on GitHub](https://github.com/ArthurGareginyan/javascript-inserter)


== Changelog ==

= 1.1 =
* Enqueue of the CodeMirror addons is moved to the beginning of the queue, before enqueuing the CodeMirror mods.
* The code number of the plugin is changed from 'p015' to 'p016'.
* All translation files are updated.

= 1.0 =
* Initial release.

= 0.3 =
* Release candidate.

= 0.2 =
* Beta version.

= 0.1 =
* Alpha version.


== Upgrade Notice ==

= 1.0 =
Please update to first stable release!