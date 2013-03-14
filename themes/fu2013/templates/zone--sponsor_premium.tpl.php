<?php if ($wrapper): ?><div<?php print $attributes; ?>><?php endif; ?>  
  <div<?php print $content_attributes; ?>>    
    <?php if ($linked_logo_img): ?>
      <div class="site-logo">
        <?php print $linked_logo_img; ?>
      </div>
    <?php endif; ?>   
    <?php print $content; ?>
  </div>
<?php if ($wrapper): ?></div><?php endif; ?>