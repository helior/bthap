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

  $form['bthap']['bthap_ie_chrome_compatibility'] = array(
    '#type' => 'checkbox',
    '#title' => t('Forces "Edge" render system and Google Chrome Frame for Internet Explorer'),
    '#default_value' => theme_get_setting('bthap_ie_chrome_compatibility'),
    '#description' => t('This is a debugging option. You should only really uncheck this box if you are interested in debugging IE7 using debugging tools from a more modern version of IE.'),
  );

  $form['bthap']['bthap_suppress_ie6_image_toolbar'] = array(
    '#type' => 'checkbox',
    '#title' => t('Suppresses IE6 image toolbar'),
    '#default_value' => theme_get_setting('bthap_suppress_ie6_image_toolbar'),
    '#description' => t('See more info at !link', array('!link' => l('http://technet.microsoft.com/en-us/library/dd361901.aspx', 'http://technet.microsoft.com/en-us/library/dd361901.aspx', array('external' => TRUE, 'attributes' => array('target' => '_blank'))))),
  );

  $form['bthap']['ie9_ps'] = array(
    '#type' => 'fieldset',
    '#title' => t('IE9 Pinned Sites'),
  );

  $form['bthap']['ie9_ps']['bthap_ie9_ps_app_name'] = array(
    '#type' => 'textfield',
    '#title' => t('Application Name'),
    '#description' => t('The name of the shortcut. If missing, the title of the site is used instead.'),
    '#default_value' => theme_get_setting('bthap_ie9_ps_app_name') ? theme_get_setting('bthap_ie9_ps_app_name') : variable_get('site_name', 'Drupal'),
  );

  $form['bthap']['ie9_ps']['bthap_ie9_ps_tooltip'] = array(
    '#type' => 'textarea',
    '#title' => t('Application Tooltop'),
    '#description' => t('Optional text that is displayed as a tooltip when the mouse pointer hovers over the pinned site shortcut icon in the Windows Start menu or desktop.'),
    '#rows' => 1,
    '#default_value' => theme_get_setting('bthap_ie9_ps_tooltip'),
  );

  $form['bthap']['ie9_ps']['bthap_ie9_ps_starturl'] = array(
    '#type' => 'textfield',
    '#title' => t('Application Start URL'),
    '#description' => t('The start path of the application. If missing, the address of the current page (when pinned) is used instead.'),
    '#default_value' => theme_get_setting('bthap_ie9_ps_starturl'),
  );

  $form['bthap']['ie9_ps']['bthap_ie9_ps_starturl_https'] = array(
    '#type' => 'checkbox',
    '#title' => t('Application Start URL uses secure protocol'),
    '#default_value' => theme_get_setting('bthap_ie9_ps_starturl_https'),
  );
}
