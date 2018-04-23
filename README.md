# FAQ plugin

FAQ for Beans is a WordPress Plugin that shows and hides hidden content in the form of FAQs using a custom post type and a custom taxonomy. Click an icon to open and reveal the content. Click again to close and hide it.

## Features

This plugin includes the following features:

- Frequently Asked Questions shortcode '[faq]'
- Font icon visual indicator
- jQuery sliding animation

## Installation

To install this plugin, you can download it by clicking on the GitHub download button or clone the repository.

1. Navigate to the `wp-content/plugins` folder of your project.
2. Then type in terminal: `git clone https://github.com/purpleprodigy/faq-beans.git`.
3. Log in to your WordPress website.
4. Navigate to the Plugins folder and activate the FAQ plugin.

## Requirements

To use this FAQ plugin, you also need to install the [Polestar Must-Use Plugin.](https://github.com/purpleprodigy/Polestar.git) To install this plugin, you can download it by clicking on the GitHub download button or clone the repository.

1. Navigate to the `wp-content/mu-plugins` folder of your project or create the `mu-plugins` folder if it does not already exist.
2. Then type in terminal: `git clone https://github.com/purpleprodigy/Polestar.git`.
3. Rename the folder `Polstar` to lowercase `polestar`.
4. Add the code `include 'polestar/bootstrap.php';` to the bottom of `mu-loader.php` in your `wp-content/mu-plugins` folder. If you don't have this file already, add it.

## Contributions

All feedback, bug reports, and pull requests are welcome.
