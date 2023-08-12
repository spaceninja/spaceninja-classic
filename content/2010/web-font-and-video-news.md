---
title: "Big news for web fonts and video today"
created: 2010-05-19
tags: 
  - font-face
  - chrome
  - codecs
  - css
  - firefox
  - fonts
  - google
  - html5
  - mozilla
  - typekit
  - typography
  - video
  - youtube
authors: 
  - scott
---

### WebM Video

The codec wars around the HTML5 `video` element might be settled sooner than you think:

Basically, Google just open-sourced VP8, a video codec. VP8 is being combined with the Vorbis audio codec to create a [new video format called WebM](http://webmproject.blogspot.com/2010/05/introducing-webm-open-web-media-project.html).

This wouldn't be news at all except that a ton of groups have already pledged to support it, including [Firefox](http://blog.mozilla.com/blog/2010/05/19/open-web-open-video-and-webm/), [Chrome](http://blog.chromium.org/2010/05/webm-and-vp8-land-in-chromium.html), [Opera](http://labs.opera.com/news/2010/05/19/), and [Youtube](http://hacks.mozilla.org/2010/05/firefox-youtube-and-webm/)(!). YouTube has committed to encoding EVERY video on their service to WebM, including the back catalog.

Given that kind of support, I would be shocked if it didn't get back-ported into Safari, and then IE9 announced support as well. Whatever happens, this is worth keeping an eye on.

### Typekit and Google

Google released a bunch of [open source fonts](http://code.google.com/webfonts) (including the Droid fonts and Inconsolata, the finest monospace font I've ever used). They also released the [Google Font API](http://googlecode.blogspot.com/2010/05/introducing-google-font-api-google-font.html), which is really just Google doing all the @font-face generation and declarations, as well as encoding the fonts for all browsers.

Then Typekit announced that they were open-sourcing their [javascript font-loading API](http://blog.typekit.com/2010/05/19/typekit-and-google/), which fires events at various points in the font-loading process, so you can make a more consistent cross-browser experience. That library is now an open-source collaboration with Google, the [WebFont Loader](http://googlecode.blogspot.com/2010/05/introducing-webfont-loader-in.html), and can be used through Google's ajax library.

Pretty cool that Typekit would open their doors like this, and it speaks to their (and Google's) commitment to making fonts easy to use for everyone, not just paying members.

**Note:** This was originally posted on [my work blog](http://metaltoad.com/blog/scott), and I'm re-posting it here for archival purposes.
