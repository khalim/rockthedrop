<?php
// Celju -- $Id: template.php,v 1.1.4.1 2008/01/10 01:53:44 jwolf Exp $

/**
 * Return a themed breadcrumb trail.
 *
 * @param $breadcrumb
 *   An array containing the breadcrumb links.
 * @return a string containing the breadcrumb output.
 */
function phptemplate_breadcrumb($breadcrumb) {
   if (!empty($breadcrumb)) {
     return '<div class="breadcrumb">'. implode(' :: ', $breadcrumb) .'</div>';
   }
 }

/**
 * Different Node Templates by Node Variables (nid, type, view)
 * http://chapterthreellc.com/blog/zirafa/different_node_templates_node_variables_nid_type_view
 */
function phptemplate_variables($hook, $vars = array()) {
   switch ($hook) {
     case 'node':

       if ($vars['page']) {
         $vars['template_files'] = array('node-default-page', 'node-'. $vars['node']->type .'-page', 'node-'. $vars['node']->nid .'-page');
       }
       else {
         $vars['template_files'] = array('node-'. $vars['node']->nid);
       }
       break;
   }

   return $vars;
}

/**
 * Allow themable wrapping of all comments.
 */
function phptemplate_comment_wrapper($content, $type = null) {
  static $node_type;
  if (isset($type)) $node_type = $type;

  if (!$content || $node_type == 'forum') {
    return '<div id="comments">'. $content . '</div>';
  }
  else {
    return '<div id="comments"><h2 class="comments">'. t('Comments') .'</h2>'. $content .'</div>';
  }
}

/**
* Fix TinyMCE
* removes grey sidebars in text area
*/
function phptemplate_tinymce_theme($init, $textarea_name, $theme_name) {
  if (isset($init)) {
    switch ($theme_name) {
     case 'advanced':
   $init['width'] = '100%';
       break;
    }
  }

  return $init;
}

/**
 *  OVERRIDING THE FIVESTAR THEME !!
 * Theme the straight HTML version of the fivestar select list. This is used
 * to remove the wrapping 'form-item' div from the select list.
 */

function phptemplate_fivestar_select($element) {
print_r($element);
print "done.";
  foreach($element["#options"] as $key=>$val)
  {
    if(is_numeric($key))
    {
      $element["#options"][strval(100 - $key)] = $val . "khalim";
    }
    else
    {
      unset($element["#options"][$key]);
    }
  }

  $select = '';
  $size = $element['#size'] ? ' size="'. $element['#size'] .'"' : '';
  _form_set_class($element, array('form-select'));
  $multiple = isset($element['#multiple']) && $element['#multiple'];
  return '<select name="'. $element['#name'] .''. ($multiple ? '[]' : '') .'"'. ($multiple ? ' multiple="multiple" ' : '') . drupal_attributes($element['#attributes']) .' id="'. $element['#id'] .'" '. $size .'>'. form_select_options($element) .'</select>';
}