<?php
// $Id: views-more.tpl.php,v 1.2 2008/04/11 08:46:26 merlinofchaos Exp $
/**
 * @file
 * Theme the more link
 *
 * - $more_url: the url for the more link
 *
 * @ingroup views_templates
 */
?>

<div class="more-link">
  <span class="icon">&nbsp;</span>
  <a href="<?php print $more_url ?>">
    <?php print t('more'); ?>
  </a>
</div>
