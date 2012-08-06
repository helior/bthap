<?php

/**
 * Implements hook_html_head_alter().
 */
function bthap_html_head_alter(&$elements) {
  // @see http://html5boilerplate.com/docs/The-markup/#make-sure-the-latest-version-of-ie-is-used.
  // Force IE browsers to render with Google Chrome Frame plugin, if installed
  // locally. Otherwise, force IE browsers to never fall back to compatibility
  // mode ( IE 7 mode). However, sometimes we need to allow the option to
  // fallback to compatibility mode when we're debugging for IE 7 (but want to
  // use IE8's slightly better developer tools) So you can disable this feature
  // in the theme settings.
  $elements['bthap_x_ua_compatible'] = array(
    '#type' => 'html_tag',
    '#tag' => 'meta',
    '#attributes' => array(
      'http-equiv' => 'X-UA-Compatible',
      'content' => 'IE=edge,chrome=1',
    ),
    '#access' => !theme_get_setting('disable_x_ua_compatibility'),
  );


  // Optimize the mobile viewport.
  $elements['bthap_viewport'] = array(
    '#type' => 'html_tag',
    '#tag' => 'meta',
    '#attributes' => array(
      'name' => 'viewport',
      'content' => 'width=device-width,initial-scale=1',
    ),
  );

  // Add HTML5 shiv @todo make configurable and provide local copy fallback
  $elements['bthap_html5_shiv'] = array(
    '#type' => 'html_tag',
    '#tag' => 'script',
    '#value' => '',
    '#attributes' => array(
      'src' => 'http://html5shim.googlecode.com/svn/trunk/html5.js',
    ),
    '#browsers' => array(
      'IE' => 'lt IE 9',
      '!IE' => FALSE,
    ),
  );


}

/**
 * Implements hook_preprocess_html().
 */
function bthap_process_html(&$vars) {
  // Aggragate the usual attributes that are placed in the html tag into a
  // single variable. Classes should not be added to this array since
  // contextual classes will be applied conditionally by the browser.
  $html_attributes = array(
    'xmlns' => 'http://www.w3.org/1999/xhtml',
    'xml:lang' => $vars['language']->language,
    'lang' => $vars['language']->language,
    'version' => 'XHTML+RDFa 1.0',
    'dir' => $vars['language']->dir,
  );

  $vars['html_attributes'] = drupal_attributes($html_attributes) . $vars['rdf_namespaces'];
}
