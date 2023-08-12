---
title: "How to Change the Content-Type Meta Tag in Drupal"
created: 2010-05-28
tags: 
  - drupal
  - drupal6
  - drupal7
  - howto
  - markup
  - meta
  - php
authors: 
  - scott
---

I'm working on an HTML5 theme for Drupal 7 right now, and I needed to change the meta content-type tag. By default it looks like this: `<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />`, and I needed the updated HTML5 version: `<meta charset="utf-8" />`. Normally, you can replace these things in one of the theme template files, but in this case, the meta tag was hard-coded in the Drupal source code somewhere, so I needed a programmatic solution. Here's what I found for both Drupal 6 and 7.

### Drupal 6

The meta tag is stored in the `$vars['head']` array, so we can simply use the php `str_replace()` function to change it. Just drop this code into the `template.php` file for your theme.

\[php\]// replace the meta content-type tag for Drupal 6 function YOURTHEME\_preprocess\_page(&$vars, $hook) { $vars\['head'\] = str\_replace( '<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />', '<meta charset="utf-8" />', $vars\['head'\] ); }\[/php\]

### Drupal 7

This is slightly more complicated in Drupal 7, because instead of storing the meta tag directly in a variable, the attributes for the tag are stored in an array, which is later converted into markup. Now, we could still edit that markup, but it's more elegant to update the attributes in the array before it's turned into markup, rather than rely on a string replace. Here's how to do it. Again, just drop this code into your theme's `template.php` file.

\[php\]// replace the meta content-type tag for Drupal 7 function YOURTHEME\_html\_head\_alter(&$head\_elements) { $head\_elements\['system\_meta\_content\_type'\]\['#attributes'\] = array( 'charset' => 'utf-8' ); }\[/php\]

You can use this technique to update any setting stored in that array. To see what your options are, add `print_r($head_elements);` inside that function. It'll display the contents of the array on your page (though you may need to view source to make any sense of it). To edit a different tag, just replace `system_meta_content_type` with the item you want to alter. You can even remove an item from the array entirely like this:

\[php\]// remove a tag from the head for Drupal 7 function YOURTHEME\_html\_head\_alter(&$head\_elements) { unset($head\_elements\['system\_meta\_generator'\]); }\[/php\]

This is a perfect example of one of my frustrations with Drupal. For the most part, the theme system is well thought out, but if you stray from the beaten path by trying to do something they didn't think you would need to do, you have to do it programmatically. It's hard for me to fathom why certain parts of the markup, like this meta tag, are locked away, instead of making everything available in the theme layer. Still, this code should give you the tools you need to gain access to them.

**Note:** This was originally posted on [my work blog](http://metaltoad.com/blog/scott), and I'm re-posting it here for archival purposes.
