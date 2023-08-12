---
title: "optimizeLegibility does not work with @font-face"
created: 2010-09-20
categories: 
  - professional
tags: 
  - font-face
  - css
  - css3
  - fonts
  - kerning
  - ligatures
  - optimizelegibility
  - typography
authors: 
  - scott
---

Recently, twitter was buzzing with news of a [CSS technique](http://www.aestheticallyloyal.com/public/optimize-legibility/) called `optimizeLegibility` that enables better kerning and font ligatures. It's enabled by default in Firefox above 20px text, so you may have already seen it in action. I'd noticed the effect on my [Talk Like Warren Ellis](http://talklikewarrenellis.com/) site (warning: possibly not safe for work language). I happily added it to my stylesheets, and was pleased to see the effect start working in Safari and Chrome as well. However, when I created the new [Metal Toad](http://metaltoad.com/) site, it wasn't working.

After running some tests, I found out that `optimizeLegibility` and `@font-face` don't work together. I was able to verify that no matter how I tried to load the font using `@font-face`, even when linking directly to the .otf file, `optimizeLegibility` had no effect. But the instant I switched to a local copy of the same font, it works just fine. This is very disappointing, as @font-face has always been presented as working the same as loading native fonts, but in this one instance, they don't work the same at all.

**Note:** This was originally posted on [my work blog](http://metaltoad.com/blog/scott), and I'm re-posting it here for archival purposes.
