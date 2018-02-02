# Accommodation plugin

Accommodation is a WordPress Plugin that displays a grid layout for accommodation options using a custom post type and taxonomy. User's can add their various accommodation options via the CPT including a title, description, featured image and features.

## Features

This plugin includes the following features:

- Displays all accommodation on an archive page.
- Displays accommodation by type in an archive template.
- Shortcodes to display a single accommodation post or a taxonomy, eg. `[accommodation post_id="2"]` or  `[accommodation type="cabins"]`.
- Gulp as its task runner.

## Installation

To install this plugin, you can download it by clicking on the GitHub download button or clone the repository.

1. Navigate to the `wp-content/plugins` folder of your project.
2. Then type in terminal: `git clone https://github.com/purpleprodigy/Accommodation.git`.
3. Log in to your WordPress website.
4. Go to Plugins and activate the Accommodation plugin.

## Requirements

To use this Accommodation plugin, you also need to install the [Polestar Must-Use Plugin.](https://github.com/purpleprodigy/Polestar.git) To install this plugin, you can download it by clicking on the GitHub download button or clone the repository.

1. Navigate to the `wp-content/mu-plugins` folder of your project or create the 'mu-plugins' folder if it does not already exist.
2. Then type in terminal: `git clone https://github.com/purpleprodigy/Polestar.git`.

## Continue Development

If you want to continue development, you will need to have Gulp, Node.js and npm installed on your machine. 

1. Navigate to the `wp-content/plugins/accommodation` folder.
2. Type `npm install` to install all of the `node_modules` for Gulp.
