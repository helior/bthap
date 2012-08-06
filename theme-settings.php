<?php

/**
 * Implements hook_form_FORM_ID_alter().
 * @see system_theme_settings();
 */
function bthap_form_system_theme_settings_alter(&$form, &$form_state) {

  $form['bthap'] = array(
    '#type' => 'fieldset',
    '#title' => t('Settings specific to the Base theme for Highly Attractive People'),
    '#weight' => -10,
  );

  $form['bthap']['disable_ie_compatibility'] = array(
    '#type' => 'checkbox',
    '#title' => t('Disable forcing "Edge" render system and Google Chrome Frame for Internet Explorer'),
    '#default_value' => theme_get_setting('disable_ie_compatibility'),
    '#description' => t('This is a debugging option. You should only really check this box if you are interested in debugging IE7 using debugging tools from a more modern version of IE.'),
  );
}
