=== wp wpDone website content accelerator ===
Contributors: sfarrell5123
Tags: cdn, performance,  website content accelerator, content accelerator, wordpress cdn, wp content accelerator, wp cdn, free content accelerator
Requires at least: 3.3
Tested up to: 4.8
Stable tag: 1.0.27
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
Plugin URI: https://www.wpdone.com.au/speed-wordpress-website-content-accelerator/
Author URI : https://www.wpdone.com.au/

Accelerate your WordPress website

== Description ==

This plugin will speed up your website.

The plugin is free, and the internet data subscription service is FREE also. 

What is it ?
The plugin uses a CDN (content delivery network) to cache your website assets.
The cache has servers on most continents - so it's closer to users and therefore faster.
It's a simple plugin that will make your WordPress website faster.

The subscription is free for everyone.

The plugin also enables http/2 even if your hosting company doesn't have it, and it enables http/2 on http websites.

 I'll make the subscription free for Aussie's forever. If I come up with an idea to recover my costs, I'll make it free for everyone (contact me if you have an idea).

You do have to sign up at to get a key : [sign up here ](https://whmcs.wpdone.com.au/cart.php?gid=3)

Here's a little [write up about the plugin](https://www.wpdone.com.au/speed-wordpress-website-content-accelerator/)

== Installation ==

1. install the plugin
2. activate the plugin
3. sign up here for free https://whmcs.wpdone.com.au/cart.php?gid=3
4. then you need to read your email, and enter your key into the plugin settings

== Frequently Asked Questions ==

= how does http/2 help =

http 1.1 loads 1 web file at a time. A standard WordPress page has about 80 files to load. http/2 loads all the files as once. On average http/2 saves 90%-95% loading the files on a page.

The files are the images, js and css on a page.

= How come it can enable http/2 on a http page, even when my hosting company doesn't have http/2 =

I am glad you asked.
Generally you need https to enable http/2. And your hosting company has to upgrade their server to http/2.
This plugin changes the URL for web files/assets on page to the CDN, and the URL has https, and the CDN has http/2.
So we're able to bypass your hosting for the assets/files on your web page, loading them from the CDN with http/2.


= will it effect my SEO ? =

No.

It's unlinkely that this plugin will effect your SEO either positively or negatively

= how many locations does the CDN have ? =

16 globally dispersed. We use bunnycdn currently.

= where is my data stored ? =

wpdone keeps in in RAM copy of any hot objects, this saves load and transfer on yours hosting and ours.

plus bunnycdn keeps the main copy.

during a cached hit only bunnycdn is involved.

= is it better than xyz CDN ? =

yes. but only in terms of ease and cost. most other CDNs need lots of settings and payment, this one doesn't.

= what if I already have caching and speedup plugins ? =

then is is unlikely to give you much raw speedup. This plugin is aimed at those with less skills or time or budget to invest in other solutions.

it will still however help with a geo dispersed audience, or an audience far from the hosting server.

it will also help if your site is image heavy, or has loads of css/js files.

== Screenshots ==

1. the simple settings screen.  You only enter the key in the first box from your sign up email. The second box is pre-filed for you, with a sensible setting.

2. this is an example of the speedup and offloading using a CDN, 70-95% of the data/requests are moved to the CDN.


== Changelog ==

= 1.0.1 = 
* faq added

= 1.0 =
* Initial version.
