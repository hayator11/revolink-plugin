<?php
/**
 * Plugin Name: Revolink
 * Plugin URI: https://onokun.com
 * Description: レボリンク — 応援が循環する社会貢献型プラグイン
 * Version: 1.0.0
 * Author: おのくん管理者
 * Text Domain: revolink
 */
if (!defined('ABSPATH')) exit;

define('REVOLINK_PATH', plugin_dir_path(__FILE__));
define('REVOLINK_URL', plugin_dir_url(__FILE__));
define('REVOLINK_VERSION', '1.0.0');

require_once REVOLINK_PATH . 'includes/revolink.php';
