---
title: 'How to use jQuery to target CSS at older browsers'
date: 2010-03-17
tags:
  - browsers
  - css
  - detection
  - howto
  - javascript
  - jquery
  - standards
  - support
authors:
  - scott
---

On a recent project where I had to support Firefox 3.6, 3.0 and 2.0, I had to find a way to target a specific version of the browser due to differences in the rendering engine. It turns out the easiest way to do this is by using jQuery to detect the browser and add a class to the body tag.

```js
// add a body class for firefox 2.0 only
if ($.browser.mozilla && $.browser.version.substr(0, 5) == '1.8.1') {
  $('body').addClass('ff2');
}

// add a body class for firefox 3.0 only
if ($.browser.mozilla && $.browser.version.substr(0, 5) == '1.9.0') {
  $('body').addClass('ff3');
}
```

The reason `$.browser.version` doesn't appear to match is because for Firefox, jQuery actually detects the version of Gecko, the rendering engine. You can see which versions of Gecko line up to which versions of Firefox on [this chart](http://en.wikipedia.org/wiki/Mozilla_Firefox#Release_history).

The [dangers of browser detection](http://css-tricks.com/browser-detection-is-bad/) have been [covered in depth elsewhere](http://www.quirksmode.org/blog/archives/2006/08/the_dangers_of.html), but in this case, I feel it's acceptable because A) we're detecting a browser version as well as a browser type, and B) we're targeting old versions of the browser, whose usage in our stats are 5% or less (but for this particular client, we're obligated to support them anyway). If someone has a better way, I'm open to it. In the meantime, this solved my problem nicely.
