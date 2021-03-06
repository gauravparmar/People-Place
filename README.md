## People-Place

* Plugin Name: People Place
* Plugin URI: [github.com/CreativePeoplePlace/People-Place](https://github.com/CreativePeoplePlace/People-Place)
* Description: A WordPress plugin for mapping Creative People and Places
* Author: Community Powered
* Version: 0.94
* Author URI: [creativepeoplepace.info](http://creativepeopleplace.info)
* License: GNU General Public License v2.0
* License URI: [http://www.gnu.org/licenses/gpl-2.0.html](http://www.gnu.org/licenses/gpl-2.0.html)
* Text Domain: pp

## About

People Place is an open source WordPress plugin that allows you to map groups of "things" on a Google Map by postcode. 

It is designed to track creative events, people and organisation across specific regions of the UK as a way of monitoring local community activity, ideas and culture. It is quite likely you will find many other uses for it too. 

A [sister plugin](https://github.com/CreativePeoplePlace/People-Place-Sync) is in development that syncs a MailChimp mailing list with the map.

Help support development by [purchasing this plugin](https://gumroad.com/l/people-place).

## Attention!

This is the first version of the plugin and it may have a few minor bugs. Please let us know if you experience problems.

Please submit all bugs, questions and suggestions to the [GitHub Issues](https://github.com/CreativePeoplePlace/People-Place/issues) queue.

## Installation

To install this plugin:

1. Login to your wp-admin area and visit "Plugins -> Add New". Select the Upload link at the top of the page. Browse to the .zip file you have downloaded from GitHub and hit the "Install Now" button.
1. Alternatively you can unzip the plugin folder (.zip). Then, via FTP, upload the "People-Place" folder to your server and place it in the /wp-content/plugins/ directory.
1. Login to your wp-admin and visit "Plugins" once more. Scroll down until you find this plugin in the list and activate it.

## Usage

Once you have added a few categories and places you can embed the map on any post or page of your website using the following shortcode:

**[placemap]**

The shortcode can take a width and height parameter too:

**[placemap width="400px" height="400px"]**

To help relieve database stress the map data is cached every two hours so your points will not necessarily show up immediately after publishing or disappear once deleted.

## Planned Features

* Automatic updates via GitHub or we will host it on wp.org
* Help screen and plugin settings for additional customisation (turn off snapshots)
* A shortcode parameter to pick default categories for the embed
* A new default look for the shortcode/embed

## Changelog

#### 0.94
* Add support for mapping voluntary activity
* Updated to ACF 4.x branch
* Introduce a number of filters (see 6bb21bf8d3ff2024ff8f4f72350fcd429c0ed505)

#### 0.93
* Shortcode parameter to disable caching `[placemap cache="false"]` - handy for flushing the map points
* iFrame emebed the map on other websites `<iframe width="430" height="500" src="http://mysite.com/?pp_iframe=true" frameborder="0" allowfullscreen></iframe>`
* Snapshot browser for the front end and cron snapshots

#### 0.92
* Restrict points to one category (only one marker image per place)
* Snapshots (snapshot slider coming in next version)
* Disable revisions support to keep the database size down
* Fix Google Maps postcode API lookup

#### 0.91
* Added filter for map categories
* Moved metaboxes to ACF lite

#### 0.9
* Uploaded to Github - this should be considered an alpha release
