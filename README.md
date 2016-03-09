# Microdata #

**Contributors:** rinatkhaziev, doejo

**Donate link:** https://www.paypal.me/rinatk

**Tags:** microdata, schema.org, wp_kses, kses

**Requires at least:** 3.5

**Tested up to:** 4.5

**Stable tag:** 0.1

**License:** GPLv2 or later


The plugin allows to whitelist microdata attributes so that users can use them in post content (or any other input sanitized with wp_kses).

## Description ##

Your web pages have an underlying meaning that people understand when they read the web pages. But search engines have a limited understanding of what is being discussed on those pages. By adding additional tags to the HTML of your web pages—tags that say, "Hey search engine, this information describes this specific movie, or place, or person, or video"—you can help search engines and other applications better understand your content and display it in a useful, relevant way. Microdata is a set of tags, introduced with HTML5, that allows you to do this.

WordPress validates and sanitizes input for your post content, stripping any tags/attributes that were not whitelisted. This plugins makes sure that common Microdata tags won't be stripped out from your post content or any other input that's sanitized with * [wp_kses_post\(\)](http://codex.wordpress.org/Function_Reference/wp_kses_post "Codex page").

Currently whitelisted attribtes are:

* **itemscope** – Creates the Item and indicates that descendants of this element contain information about it.
* **itemtype** – A valid URL of a vocabulary that describes the item and its properties context.
* **itemid** – Indicates a unique identifier of the item.
* **itemprop** – Indicates that its containing tag holds the value of the specified item property. The property's name and value context are described by the item's vocabulary. Properties values usually consist of * string values, but can also use URLs using the a element and its href attribute, the img element and its src attribute, or other elements that link to or embed external resources.
* **itemref** – Properties that are not descendants of the element with the itemscope attribute can be associated with the item using this attribute. Provides a list of element ids (not itemids) with additional properties elsewhere in the document.

## Installation ##

This easy way would be using WP's Plugin UI

If for some reason you can't use that, you can always upload it manually

1. Upload \`wp-microdata\` to the \`/wp-content/plugins/\` directory
1. Activate the plugin through the 'Plugins' menu in WordPress

## Frequently Asked Questions ##

### Where can I learn more about microdata ###

Good places to start would be:

* [W3C Website](https://www.w3.org/TR/microdata/ "Microdata W3C spec")
* [Schema.org](http://schema.org/)

## Developers ##

Pull requests are always welcome!

## Changelog ##

### 0.1 ###
* Init release
