<?php
/**
 * @file
 * Preprocess and alter functions for Fu2012 theme.
 */

/**
 * Implements hook_preprocess_node().
 * 
 * Create helper function to target node of specific content types.
 */
function fu2012_preprocess_node(&$vars, $hook) {
  $function = __FUNCTION__ . '_' . $vars['type'];
  if (function_exists($function)) {
    $function($vars, $hook);
  }
}

/**
 * Implements template_preprocess_block().
 * Create helper function to target blocks from specific modules.
 */
function fu2012_preprocess_block(&$vars, $hook) {
  $function = __FUNCTION__ . '_' . $vars['elements']['#block']->module;
  if (function_exists($function)) {
    $function($vars, $hook);
  }
}

/**
 * Implements template_preprocess_page().
 * Insert Typekit code in $script if enabled in theme settings.
 */
function fu2012_preprocess_page(&$vars) {
  // Check if typekit is enables and an ID has been defined.
  if (theme_get_setting('typekit_kit_id') != '' && theme_get_setting('typekit_enable') == '1') {
    // Create url to js
    $typekit_url = '//use.typekit.com/' . theme_get_setting('typekit_kit_id') .'.js';
    // Add Typekit js.
    drupal_add_js($typekit_url,
      array('type' => 'external', 'scope' => 'header', 'weight' => 9)
    );
    drupal_add_js('try{Typekit.load();}catch(e){}',
      array('type' => 'inline', 'scope' => 'header', 'weight' => 10)
    );
  };
}

/**
 * Implements template_preprocess_field().
 *
 * Adds consistent classes to field wrappers for styling purposes.
 */
function fu2012_preprocess_field(&$vars) {
  // Add .text-content to selected fields
  switch ($vars['element']['#field_type']) {
    case 'text_long':
       $vars['classes_array'][] = 'text-content';
      break;

    default:
      break;
  }
}

/**
 * Implements template_menu_link().
 *
 * Adds classes based on menu level to nested menus.
 */
function fu2012_menu_link(array $variables) {

  $element = $variables['element'];
  $sub_menu = '';

  if ($element['#below']) {
    $sub_menu = drupal_render($element['#below']);
  }
  $output = l($element['#title'], $element['#href'], $element['#localized_options']);

  // Adds the depth class just for main-menu.
  if ($element['#original_link']['menu_name'] == 'main-menu') {
    $element['#attributes']['class'][] = 'level-' . $element['#original_link']['depth'];
    return '<li' . drupal_attributes($element['#attributes']) . '>' . $output . $sub_menu . "</li>\n";
  }
  else {
    return '<li' . drupal_attributes($element['#attributes']) . '>' . $output . $sub_menu . "</li>\n";
  }
}

/**
 * Implements hook_form_FORMID_alter().
 * Removes duplicate label.
 */
function fu2012_form_mailchimp_lists_user_subscribe_form_1_alter(&$form) {
  // Label duplicates block title, remove it.
  unset($form['mailchimp_lists']['mailchimp_1']['title']['#title']);
}