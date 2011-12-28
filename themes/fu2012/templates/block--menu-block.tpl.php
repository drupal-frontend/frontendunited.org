<?php
 /**
  * @file
  * Wraps menu_blocks in a <nav> and strips out unnecessary markup.
  */
?>

<nav<?php print $attributes; ?>>
  <?php print render($title_prefix); ?>
  <?php if ($block->subject): ?>
    <h2<?php print $title_attributes; ?>><?php print $block->subject; ?></h2>
  <?php endif; ?>
  <?php print render($title_suffix); ?>
    
  <?php print $content ?>
</nav>