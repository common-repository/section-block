=== Section Block ===
Contributors: wedoplugins
Tags: block, section, section block, gutenberg, block editor, block library, blocks
Requires at least: 5.1
Tested up to: 5.4
Requires PHP: 5.6
License: GPLv3
License URI: http://www.gnu.org/licenses/gpl.html
Stable tag: 1.3.4

Section Block for new WordPress Block Editor allow you to add Sections to your website and customize it.

== Description ==

This block is intended to work with any WordPress theme that supports the new Block Editor (Gutenberg). You can use it to group your page content into sections (nested blocks support), and highlight the most important parts of your website.

**Features**

* ready to use out of the box, no configuration needed,
* create unlimited number of sections and customize each of it separately,
* customize section border (width, style, radius, color),
* customize section background image, add or hide overlay (overlay customization: opacity, color),
* customize section padding,
* customize section box shadow,
* customize default styles settings using hooks programmatically (for theme authors),

You can use any other Blocks inside this Section Block so this can be used to build more advanced templates.

Blocks inside this Section Block can be wide- or full-aligned, but section itself is always full-aligned.

== Installation ==

1. Install the plugin through the WordPress plugins screen directly or upload the plugin files to the "/wp-content/plugins/section-block" directory.
2. Activate the plugin through the "Plugins" screen in WordPress
3. Go to Block Editor and type /section to use this block.

== Changelog ==

= 1.3.4 =
* compatibility with WP 5.4 confirmed
* custom block collection registered

= 1.3.3 =
* Blocks Summary page updated
* block editor styles improved

= 1.3.2 =
* fixed SSL issue

= 1.3.1 =
* CSS styles bug fixed

= 1.3.0 =
* JavaScript code fully rebuilt on React, no more jQuery,
* Blocks Summary page style & script added,
* license changed from GPL2+ to GPLv3,
* block code improved,

= 1.2.0 =
Fixed: overlay opacity value (float) saved with "px" string at the end (auto-added by Gutenberg)
Fixed: first and last inner elements should have no margins on top and bottom relatively
Updated: outdated Gutenberg packages

= 1.1.0 =
* Fixed: issue with block height.
* Added: CSS variables polyfill
* Improved: Only modified styles are added as inline variables

= 1.0.0 =
* Initial release.

== Screenshots ==

1. Add nested blocks and customize section styles
2. Set custom overlay color and opacity
3. Nested blocks support + custom background and section styles gives you a great customization possibilities