=== Don't Muck My Markup ===
Contributors: Martyn Chamberlin
Tags: remove-markup, disable-auto-formatting, default-formatting
Requires at least 3.0
Tested up to: 3.5
Stable tag: 1.0

Don't Muck My Markup lets you disable all auto-generated HTML markup from your posts and pages on a page-by-page basis.

== Description ==

If you've ever had a WordPress blog post or page in which you found yourself writing more than a little HTML, you've experienced the frustration of finding your beautiful markup surrounded in `<p>` tags. The problem only gets worse when you start throwing jQuery into the mix. Who on earth gave WordPress permission to throw in `<br/>` tags inside a `<script>`, anyhow?!

Up until now, we've only had a couple of options:

- First, we could use conditional logic to require an expernal PHP file. This was bad for several reasons. 
	- It's not friendly for the end user. Who wants to have to edit a PHP file?
	- The content is not in the WordPress database, which means it isn't searchable inside the dashboard, and it isn't backed up with the rest of the site.
	- It removes framework functionality. Robust WordPress frameworks have places to add content above and below the main post content area, and an external PHP file destorys this greatly.
- The second option is to use the existing plugins to disable WordPress formatting, but none of these plugins empower the user to toggle this setting on a page-by-page basis. After all, most articles don't have that much `HTML` in them. Nobody wants to go through 500 old blog posts and manually add `<p>` tags to them, do they? We didn't think so either.

As a design agency that's used WordPress for several years, we finally decided these shenanigans had to stop once and for good. We built a simple but elegant plugin that lets you disable auto-generated HTML on a page-by-page basis.

We hope you use and enjoy __Don't Muck My Markup__ as much as we do.

== Installation ==

1. Upload this plugin to your plugins directory (wp-content/plugins/). 
2. Activate this plugin.
3. Head over to the Edit Post interface for the specific page for which you want to disable WordPress' auto-formatting. 
4. In the right sidebar underneath the "Featured Image" box, toggle the checkbox labled, "Disable auto-formatting for this page/post."
5. Update the page/post.
6. Enjoy your newfound control! 
