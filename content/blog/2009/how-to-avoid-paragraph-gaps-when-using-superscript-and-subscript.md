---
title: 'How to Avoid Paragraph Gaps when Using Superscript and Subscript'
date: 2009-09-10
categories:
  - personal
tags:
  - css
  - design
  - howto
  - layout
  - standards
  - subscript
  - superscript
  - tutorials
authors:
  - scott
---

Frequently, when I see a webpage with superscript or subscript text, I see associated gaps in the paragraph. This is caused because the default way browsers render super and subscript text is to add enough vertical space in the paragraph to show them. The result is ugly, but as you can see in the following screenshot, you can easily fix the problem with just a few lines of CSS.

[![HTML Superscript and Subscript Handling](/images/3905394294_f862faaa8d.jpg)](http://www.flickr.com/photos/spaceninja/3905394294/)

In the first paragraph, you can see the layout gap problem, and in the second paragraph, you can see the paragraph as it should be displayed, by using the following CSS rules.

```css
sup {
  vertical-align: baseline;
  position: relative;
  bottom: 0.33em;
}
sub {
  vertical-align: baseline;
  position: relative;
  bottom: -0.33em;
}
```

The browser shifts the super and subscript text by using the `vertical-align` CSS property, which leaves gaps in the paragraph. By resetting this property to the defaul value of `baseline`, we get rid of the gaps. Then we restore the appearance of the text by using `position: relative;` and shifting the bottom up or down by `.33em`. Since this uses ems, you can use these lines in your reset stylesheet, no matter what font treatment you use on your site. Now go forth, and may paragraph gaps never plague you again!

**Note:** This was originally posted on [my work blog](http://blogs.popart.com/author/scottvandehey/), and I'm re-posting it here for archival purposes.
