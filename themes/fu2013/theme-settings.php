<?php
/**
 * @file
 * Additional theme settings for theme.
 */

/**
 * Implements hook_form_FORMID_alter.
 * Add settings to configure TypeKit on site.
 */
function fu2012_form_system_theme_settings_alter(&$form, &$form_state) {
  $form['typekit_settings'] = array(
    '#type' => 'fieldset',
    '#title' => t('Typekit Settings'),
    '#weight' => 5,

    'typekit_enable' => array(
      '#type' => 'checkbox',
      '#title' => t('Enable TypeKit'),
      '#description' => t('Enable Typekit for this site'),
      '#default_value' => theme_get_setting('typekit_enable'),
    ),
    'typekit_kit_id' => array(
      '#type' => 'textfield',
      '#title' => t('ID for your kit'),
      '#size' => 20,
      '#maxlength' => 30,
      '#default_value' => theme_get_setting('typekit_kit_id'),
    ),
  );
}
