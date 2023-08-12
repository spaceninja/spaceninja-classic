---
title: "How to Add Theme Settings for Drupal 7"
created: 2010-11-04
tags: 
  - drupal
  - drupal7
  - howto
  - options
  - settings
  - themes
  - tutorials
authors: 
  - scott
---

You know that list of checkboxes on the theme settings page that let you turn on and off parts of the theme like the logo or slogan? Well, you can add your own options to that list really easily in Drupal 7. In D6, this was kind of a pain, because you had to write all sorts of functions to save and load your settings to the database and handle everything properly. In D7, that's all done through the Form API, so the heavy lifting is done for you. All you need to do is tell it to add some form fields, and what the new setting is called!

You'll need to create a `theme-settings.php` file in your theme, and add this code to it:

\[php\]<?php function themename\_form\_system\_theme\_settings\_alter(&$form, &$form\_state) { $form\['theme\_settings'\]\['your\_option'\] = array( '#type' => 'checkbox', '#title' => t('Your Option'), '#default\_value' => theme\_get\_setting('your\_option'), ); } \[/php\]

- `['theme_settings']` is the existing fieldset to add your option to. You can leave it off, but by pointing it to the `theme_settings` group, it'll be added to the existing list of checkbox display options for your theme. Handy!
- `['your_option']` is the name of your new option.
- `#type` tells Drupal what kind of form element to create.
- `#title` is the title (or in this case, label) text for the form element.
- `#default_value` tells Drupal where to find the initial setting for the form element.

We set `#default_value` to `theme_get_setting('your_option')`, which tells Drupal to look for this setting in the database. But here's the brilliant part -- if it can't find that setting in the database, it will check in your theme's `.info` file! So add this line:

\[shell\]settings\[your\_option\] = 1\[/shell\]

Now your theme will use the default setting unless the admin overrides it on the theme settings page.

You'll want to actually _do something_ with this setting, so here's the PHP call to load it.

\[php\]theme\_get\_setting('your\_option');\[/php\]

You can call this in from any of your `.tpl.php` files. For a simple checkbox option like this, you can build an `if()` statement around it, like so:

\[php\] <?php if (theme\_get\_setting('your\_option')): ?> <!-- Your code here! --> <?php endif; ?> \[/php\]

In this example, we added a checkbox, but you can add just about any form elements you can think of, including radio buttons and text input fields. What sort of options will you add to your theme?

#### References

- [theme\_get\_setting() and THEME\_settings() improvements in Drupal 7](http://drupal.org/update/theme/6/7#theme-settings)
- [Drupal 7 form API reference](http://api.drupal.org/api/drupal/developer--topics--forms_api_reference.html/7)
- [Advanced theme settings](http://drupal.org/node/177868) - this is for D6, but it's still helpful

**Note:** This was originally posted on [my work blog](http://metaltoad.com/blog/scott), and I'm re-posting it here for archival purposes.
