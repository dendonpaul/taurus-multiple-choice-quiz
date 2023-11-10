<?php
/*
 * Plugin Name:       Taurus Multiple Choice Quiz
 * Plugin URI:        https://example.com/plugins/the-basics/
 * Description:       Taurus Multiple Choice Quiz - This plugin can be used to display Multiple Choice Questions in between of posts.
 * Version:           1.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Denny Paul
 * Author URI:        https://author.example.com/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:        https://example.com/my-plugin/
 * Text Domain:       taurus-multiple-choice-quiz-domain
 * Domain Path:       /languages
 */

defined('ABSPATH') or die('No script kiddies please');

class TaurusMultipleChoiceQuiz
{
    function __construct()
    {
        add_action('enqueue_block_editor_assets', array($this, 'adminAssets'));
    }

    function adminAssets()
    {
        wp_enqueue_script('taurus-mcq-js', plugin_dir_url(__FILE__) . 'build/index.js', array('wp-blocks'));
    }
}

$taurusMultipleChoiceQuiz = new TaurusMultipleChoiceQuiz();


$taurusMultipleChoiceQuiz->adminAssets();
