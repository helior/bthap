<!doctype html>
<!--[if lt IE 7]> <html<?php print $html_attributes?> class="ie6 oldie"> <![endif]-->
<!--[if IE 7]>    <html<?php print $html_attributes?> class="ie7 oldie"> <![endif]-->
<!--[if IE 8]>    <html<?php print $html_attributes?> class="ie8 oldie"> <![endif]-->
<!--[if gt IE 8]><!--> <html<?php print $html_attributes?>> <!--<![endif]-->
<head profile="<?php print $grddl_profile; ?>">
  <?php print $head; ?>
  <title><?php print $head_title; ?></title>
  <?php print $styles; ?>
  <?php print $scripts; ?>
</head>
<body class="<?php print $classes; ?>" <?php print $attributes;?>>
  <div id="skip-link">
    <a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
  </div>
  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>
</body>
</html>
