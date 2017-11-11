<?php
/*
  Plugin Name: Azull blue
  Plugin URI: http://webindiainc.com
  Description: Azull property server, is developed as an tool to manage property data on single wordpress instalation and serve data to regional property portals.
  Author: Pratik Bhatt
  Version: 1.0
  Tags: azull,multilingual, multi, language, admin, tinymce, qTranslate, Polyglot, bilingual, widget, switcher, professional, human, translation, service
  Author URI: http://webindiainc.com

  */
defined('ABSPATH') or die("No script kiddies please!");
define('AZULL_BLUE_DIR', plugin_dir_path(__FILE__));
define('AZULL_URL', plugin_dir_url(__FILE__));
define('AZULL_FILE', __FILE__);
function instance() {
   if (!isset(self::$instance)) {
      self::$instance = new self;
      self::$instance->constants();
      self::$instance->init();
      self::$instance->required();
      self::$instance->_hooks();
      //self::$instance->_hook_pluging_load();
   }
   return self::$instance;
}

require_once( AZULL_BLUE_DIR . 'property/classProperty.php' );

require_once( AZULL_BLUE_DIR . 'sites/azull_site.php');

require_once( AZULL_BLUE_DIR ."/function.php");

require_once( AZULL_BLUE_DIR . 'property/meta.php' );

function _hooks() {
   require_once(AZULL_BLUE_DIR . "/hooks.php");
}
?>
