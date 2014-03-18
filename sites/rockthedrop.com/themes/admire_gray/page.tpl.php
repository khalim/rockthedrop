<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <title><?php print $head_title ?></title>
    <?php print $head ?>
    <?php print $styles ?>
    <?php print $scripts ?>
  </head>
<body <?php print phptemplate_body_class($sidebar_left, $sidebar_right); ?>>
<div id="container">
<div id="container2">

<div id="header">

<div id="blogdesc">
 <?php if ($logo) { ?><div id="logocontainer"><a href="<?php print $base_path ?>" title="<?php print t('Home') ?>"><img src="<?php print $logo ?>" alt="<?php print t('Home') ?>" /></a></div><?php } ?>
      <div id="texttitles">
	  <?php if ($site_name) { ?><h1 class='site-name'><a href="<?php print $base_path ?>" title="<?php print t('Home') ?>"><?php print $site_name ?></a></h1><?php } ?>
      <?php if ($site_slogan) { ?><div class='site-slogan'><?php print $site_slogan ?></div><?php } ?>
</div></div>

<?php if ($header): ?>

<div id="header-content">
<?php print $header ?>
</div>
<?php endif; ?>

</div>

<div id="navigation">
      <?php if (isset($primary_links)) { ?><?php print theme('links', $primary_links, array('class' =>'primary_nav1')) ?><?php } ?>
</div>

<?php if (isset($secondary_links)) { ?>
<div id="navigation2">
<?php print theme('links', $secondary_links, array('class' =>'links', 'id' => 'nav2links')) ?>
</div>
<?php } ?>

<div id="undernavigation">
</div>

<div id="wrap">
<?php if ($sidebar_left): ?>
<div id="leftside">
<?php print $sidebar_left ?>
</div>
<?php endif; ?>

<div id="contentmiddle">

<?php if ($content_top): ?>

<div id="content_top">
<?php print $content_top ?>
</div>

<?php endif; ?>

<?php if ($mission) { ?><div id="mission"><div class="inner"> <?php print $mission ?></div></div><?php } ?>



          <?php if ($breadcrumb): print $breadcrumb; endif; ?>


          <?php if ($tabs): print '<div id="tabs-wrapper" class="clear-block">'; endif; ?>
          <div id="h2title"><?php if ($title): print '<h1'. ($tabs ? ' class="with-tabs"' : '') .'>'. $title .'</h1>'; endif; ?>
		  </div>
          <?php if ($tabs): print $tabs .'</div>'; endif; ?>

          <?php if (isset($tabs2)): print $tabs2; endif; ?>
          <?php if ($help): print $help; endif; ?>
          <?php if ($messages): print $messages; endif; ?>
          <?php print $content ?>
</div>
<?php if ($sidebar_right): ?>
<div id="rightside">
<?php print $sidebar_right ?>
</div>
<?php endif; ?>


<br style="clear:both;" />
</div>
<br style="clear:both;" />
</div>
</div>
<div id="footer">
<?php print $footer_block ?><br />
  <?php print $footer_message ?>
<?php /*?GPL license allow to remove these links BUT pease try keeping these credit links alive as this is the major reason to release free themes and develop them further.<?php */?>
  <span class="credit">By <a href="http://drupal.org/">Drupal</a> | <a href="http://www.worthapost.com/">Quality Drupal Themes</a></span></div>
<?php print $closure ?>
<!--Designed by Worthapost-->
</body>
</html>
