
<?php
// $Id: page.tpl.php,v 1.3 2008/05/12 12:22:49 sakib000 Exp $


global $base_url;



if ($sidebar_left && $sidebar_right)
	$layoutstyle = "bothsidebars";
else if ($sidebar_left)
	$layoutstyle = "leftsidebar";
else if ($sidebar_right)
	$layoutstyle = "rightsidebar";
else
	$layoutstyle = "nosidebars";



?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
  <title><?php print $head_title ?></title>
  <?php print $head ?>
  <?php print $styles ?>
  <?php print $scripts; ?>
  <style type="text/css" media="all">@import "<?php print $base_url . '/' . $directory . '/colorcss/' . $color ?>.css";</style>
  <script type="text/javascript"><?php /* Needed to avoid Flash of Unstyle Content in IE */ ?> </script>
      <!--[if IE]>
    <style type="text/css">@import "<?php print base_path() . path_to_theme() ?>/fix-ie.css";</style>
    <![endif]-->
</head>

<body class="<?php print $layoutstyle; ?>">
  <div id="container">
    <div id="sitename">
    <div  id="logoslogan">
      <?php if ($logo) { ?><a href="<?php print $base_path ?>" title="<?php print t('Home') ?>"><img src="<?php print $logo ?>" id="logo" alt="<?php print t('Home') ?>" /></a><?php } ?>
      <?php if ($site_name) { ?><h1><a href="<?php print $base_path ?>" title="<?php print t('Home') ?>"><?php print $site_name ?></a></h1><?php } ?>
      <?php if ($site_slogan) { ?><h2><?php print $site_slogan ?></h2><?php } ?>
    </div>
    <div id="rightsecondary"> <?php if (isset($secondary_links)) { ?><?php print theme('links', $secondary_links, array('class' =>'links', 'id' => 'subnavlist')) ?><?php } ?></div></div>
    <div id="mainmenu">
      <?php if (isset($primary_links)) { ?><?php print theme('links', $primary_links, array('class' =>'primary_links')) ?><?php } ?>
    </div>
    <div id="wrap">
    <div id="wrap2">
    <div id="wrap3">
	<?php if ($sidebar_left): ?>
      <div id="leftside">
     <?php print $sidebar_left; ?>
        </div> <!-- /sidebar-left -->
      <?php endif; ?> 
	  
	  
	  <?php if ($sidebar_right): ?>
      <div id="rightside">
          <?php print $sidebar_right; ?>
        </div> <!-- /sidebar-right -->
      <?php endif; ?>
      <?php if ($mission) { ?><div id="mission"><?php print $mission ?></div><br /><?php } ?>
      <div id="content">
	  <?php if ($breadcrumb): print $breadcrumb; endif; ?>
        <?php if ($title) { ?><h1><?php print $title ?></h1><?php } ?>
        <div class="tabs"><?php print $tabs ?></div>
        <?php print $help ?>
        <?php print $messages ?>
        <?php print $content; ?>
      </div>
      
    </div>
    </div>
   

  </div>
</div>
  <div id="footer"><?php if (strlen($footer_message) > 2) { print $footer_message . '  '; } ?><br />
  <!--Please dont think that credit lines effects your website's popularity. This is the only reason that encourage me further development of themes. Please do not remove it. Ask support to sakib.live (at) gmail.com. Sponsered by Angross-->
   <span class="credits">Theme by <a  href="http://www.worthapost.com/">Worthapost</a> and <a href="http://www.angross.com/">Angross</a> <a href="http://www.angross.com/">web design company</a></span>  </div>
  <?php print $closure ?>
</body>
</html>