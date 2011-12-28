<div<?php print $attributes; ?>>
  <?php if ($linked_logo_img || $site_name || $site_slogan): ?>
    <?php if ($linked_logo_img): ?>
      <div class="site-logo">
        <?php print $linked_logo_img; ?>
      </div>
    <?php endif; ?>
    <?php if ($site_name): ?>
      <?php $class = $site_name_hidden ? ' element-invisible' : ''; ?>
      <hgroup class="site-name<?php print $class; ?>">
        <h1><?php print $linked_site_name; ?></h1>
        <?php if ($site_slogan): ?>
        <?php print $site_slogan; ?>
        <?php endif; ?>
      </hgroup>
    <?php endif; ?>
  <?php endif; ?>
  <?php print $content; ?>
</div>