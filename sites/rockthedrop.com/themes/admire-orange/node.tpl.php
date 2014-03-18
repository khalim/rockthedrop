<?php
// $Id: node.tpl.php,v 1.1 2008/04/23 10:22:05 sakib000 Exp $
?>
  <div class="node<?php if ($sticky) { print " sticky"; } ?>">
    <?php if ($picture) {
      print $picture;
    }?>
    <?php if ($page == 0) { ?><h2 class="title"><a href="<?php print $node_url?>"><?php print $title?></a></h2><?php }; ?>
    <div class="content">
      <?php print $content?>
    </div>
    <div class="links">
      <?php print $links; ?>
    </div>
    <?php
      if (($submitted) || ($taxonomy)) {
        print '<div class="styledbox postinfo">';
        if ($taxonomy) { print $terms; }
        if ($submitted) { print $submitted; }
        print '</div>';
      }
    ?>
    </div>