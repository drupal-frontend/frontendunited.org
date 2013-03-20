<?php
 /**
  * @file
  * Overrides template from Omega and removes secondary links.
  */
?>

<div<?php print $attributes; ?>>
  <?php if ($main_menu || $secondary_menu): ?>
  <nav class="navigation">
    <?php print l(t('Menu'), '', array('attributes' => array('class' => array('mobile-menu')))); ?>
    <?php print theme('links__system_main_menu', array(
      'links' => $main_menu,
      'attributes' => array(
        'class' => array(
          'links',
          'inline',
          'main-menu element-invisible'
          )
        ),
      'heading' => array(
        'text' => t('Main menu'),
        'level' => 'h2',
        'class' => array('element-invisible')
        )
      )); ?>
  </nav>
  <?php endif; ?>
  <?php print $content; ?>
</div>
