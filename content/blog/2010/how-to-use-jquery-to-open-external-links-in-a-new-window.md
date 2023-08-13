---
title: 'How to use jQuery to open external links in a new window'
date: 2010-03-24
tags:
  - howto
  - javascript
  - jquery
  - links
  - standards
  - target
authors:
  - scott
---

A common request from clients is to open all external links on their website in a new browser window. (Leave aside for now whether this is a good idea or not, and just assume that you need to do it.) It's easy enough to add `target="_blank"` to a link, but there are two problems. First, the `target` attribute is deprecated, so we don't want to use it in our nice standards-compliant code. Secondly, on a large content-managed site, you might not have control over every link.

jQuery to the rescue! We can use `$("a[href^=http://]")` to select all links that start with `http://` and then `.attr("target","_blank");` to add the `target` attribute so they will open in a new window.

But now we have a new problem. In a content-managed system, the site will commonly render all links, even local ones, using a full URL. Now your jQuery is opening _every link on the site_ in a new window. So we'll write a few more lines of code to remove the `target` attribute from local links.

```js
$(function () {
  $('a[href^=http://]').attr('target', '_blank');
  $('a[href^=http://example.com/]').removeAttr('target');
  $('a[href^=http://www.example.com/]').removeAttr('target');
  $('a[href^=http://dev.example.com/]').removeAttr('target');
  $('a[href^=http://example.local/]').removeAttr('target');
  $('a[href*=.pdf]').attr('target', '_blank');
});
```

As you can see from the example, I've removed it from any links that include the final domain name, both www and plain versions. I've also removed it from the dev site and from `example.local`, which might be a local installation of the site. You could add or remove any of these as needed, they're just examples.

The last line is there because the client also wants all PDF files, whether on our site or elsewhere, to open in a new window, so we add the `target` attribute back on for any link that ends in `.pdf`.
