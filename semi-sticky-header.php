<?php
/*
  Plugin Name: Semi Sticky Header
  Description: A plugin that will display the header again when the user scroll up on a webpage.
  Version: 1
  Contributors: Pablo Sanchez
  Requires at least: 5.2
  Requires PHP: 7.2
  Author: Pablo Sanchez
  Author URI: https://pablosanchezdeveloper.com/
*/

//If this file is called directly, abort
if (!defined('WPINC')) {
  die;
}

define('SEMI_STICKY_HEADER_URL', plugin_dir_url(__FILE__));
