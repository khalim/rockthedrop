<?php
// $Id: block.tpl.php,v 1.1 2008/04/23 10:22:05 sakib000 Exp $
?>
<div class="block block-<?php print $block->module; ?>" id="block-<?php print $block->module; ?>-<?php print $block->delta; ?>">
<?php if ($block->subject): ?>
<h4><?php print $block->subject; ?></h4>
<?php endif;?>
<div class="content"><?php print $block->content; ?></div>
</div>