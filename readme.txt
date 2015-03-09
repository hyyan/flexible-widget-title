=== Flexible Widget Title ===
Contributors: hyyan 
Tags: widget,widget title,remove widget title,hide widget title, control widget title
Requires at least: 3.0.1
Tested up to: 4.1.1
Stable tag: 2.0
License: MIT

The plugin will enable you to hide widgets title in the front end while the widget title still visible in the backend.

== Description ==

**How to use**

If you want to hide the widget title in the front end just surround the title with "[]" .
For instance :

`[My Widget Title]`

**You don't Like Syntax**

If you don't like the `[]` syntax , it is OK , you can change this in the plugin
settings to become for example just `!` in the beginning of the title.

== Installation ==

**Classical Way**

Extract the zip file and just drop the contents in the wp-content/plugins/ directory of your WordPress installation and then activate the Plugin from Plugins page.

**Composer Way**

`composer require hyyan/flexible-widget-title:version`

== Screenshots ==

1. Example of using the plugin in the wordpress backend

== Changelog ==

=2.0=

* Add the ability to change the `[]` syntax

=1.0.3=

* Tested on wordpress 4.1.0

=1.0.2=

* Fixed [Issue#1](https://github.com/hyyan/flexible-widget-title/issues/1)

= 1.0.1=
* Prevented direct access for the plugin file

= 1.0.0 =
* Initial commit