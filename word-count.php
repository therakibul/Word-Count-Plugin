<?php
/*
 * Plugin Name:       Word Count
 * Plugin URI:        https://example.com/plugins/the-basics/
 * Description:       Handle the basics with this plugin.
 * Version:           1.10.3
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            John Smith
 * Author URI:        https://author.example.com/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       word-count
 * Domain Path:       /languages
*/
    function wc_word_count($content){
        $label = apply_filters("wc_label", "Total Number Of Words");
        $wordn = str_word_count(strip_tags($content));
        $tag = apply_filters("wc_tag", "h1");
        $content = sprintf("<%s>%s: %s</%s>", $tag, $label, $wordn, $tag);;
        return $content;
    }
    add_filter("the_content", "wc_word_count");
 ?>