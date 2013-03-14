<article<?php print $attributes; ?>>
  <?php
  
    // Hide Facebook social like
    hide($content['links']['fb_social_like']);
  
    // Hide forward module output, notice there are two types: form and link.
    hide($content['forward']); // form
    hide($content['links']['forward']); // link
  
    // We hide the comments and links now so that we can render them later.
    hide($content['comments']);
    hide($content['links']);
    print render($content);
    
  ?>

  <?php if ($display_submitted): ?>
  <footer class="submitted"><?php print $date; ?> -- <?php print $name; ?></footer>
  <?php endif; ?>  
  
  <?php if (!empty($content['links'])): ?>
    <nav class="links node-links clearfix"><?php print render($content['links']); ?></nav>
  <?php endif; ?>

  <?php print render($content['comments']); ?>
</article>