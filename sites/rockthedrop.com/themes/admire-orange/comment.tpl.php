<?php
// $Id: comment.tpl.php,v 1.1 2008/04/23 10:22:05 sakib000 Exp $
?>
<div class="comment styledbox">
  <?php
    if ($picture) {
      print $picture;
    }
  ?>
  <?php if ($new != '') { ?><span class="new"><?php print $new; ?></span><?php } ?>
  <h3 class="title"><?php print $title; ?></h3>
  <div class="submitted"><?php print $submitted; ?></div>
  <div class="content"><?php print $content; ?></div>
  <div class="links"><?php print $links; ?></div>
</div>