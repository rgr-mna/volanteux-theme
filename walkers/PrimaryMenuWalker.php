<?php

class PrimaryMenuWalker extends Walker_Nav_Menu
{
    function start_lvl(&$output, $depth = 0, $args = array())
    {
        $indent = ($depth) ? str_repeat("\t", $depth) : '';
        $output .= "\n$indent<div class=\"navbar__dropdown-items\">\n";
    }

    function end_lvl(&$output, $depth = 0, $args = array())
    {
        $indent = ($depth) ? str_repeat("\t", $depth) : '';
        $output .= "$indent</div>\n";
    }

    function start_el(&$output, $data_object, $depth = 0, $args = array(), $id = 0)
    {
//        $indent = ($depth) ? str_repeat("\t", $depth) : '';
//        $elem_attr = '';
//        $class_names = $value = '';
//        $classes = empty($data_object->classes) ? array() : (array) $data_object->classes;
//        $classes[] = ($args->has_children) ? 'navbar__dropdown' : '';
//        $classes[] = ($data_object->current || $data_object->current_item_ancestor) ? 'navbar__nav-item--active' : '';
//        $classes[] = 'menu-item-' . $data_object->ID;
        if ($depth && $args->has_children) {
//            $classes = 'dropdown'
        }
//        $class_names = join(' ', apply_filter('nav_menu_css_class', array_filter($classes), $data_object, $args));
    }

    function end_el(&$output, $data_object, $depth = 0, $args = array())
    {
        $indent = ($depth) ? str_repeat("\t", $depth) : '';
    }
}
