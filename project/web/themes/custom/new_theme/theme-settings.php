<?php

/**
 * @file
 * Theme settings form for New Theme theme.
 */

/**
 * Implements hook_form_system_theme_settings_alter().
 */
function new_theme_form_system_theme_settings_alter(&$form, &$form_state) {

  $form['new_theme'] = [
    '#type' => 'details',
    '#title' => t('New Theme'),
    '#open' => TRUE,
  ];

  $form['new_theme']['font_size'] = [
    '#type' => 'number',
    '#title' => t('Font size'),
    '#min' => 12,
    '#max' => 18,
    '#default_value' => theme_get_setting('font_size'),
  ];

}
