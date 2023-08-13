---
title: 'IE8 Compatibility Mode and IE7 are Not the Same Thing'
date: 2009-09-15
tags:
  - browsers
  - compatibilitymode
  - expression
  - ie
  - ie6
  - ie7
  - ie8
  - microsoft
  - qa
  - testing
authors:
  - scott
---

Just so we're clear, testing your website in an actual copy of IE7, and testing in IE8's Compatibility Mode are not the same thing. Compatibility Mode does an acceptable job of imitating IE7, and for the average user who's just trying to fix a site that looks broken under IE8, it's good enough. However, there are lots of small differences, and if you're only testing your client sites with Compatibility Mode, it could come back to bite you.

On the IE Blog, Tony Ross published a [list of mostly technical differences](http://blogs.msdn.com/ie/archive/2009/03/12/site-compatibility-and-ie8.aspx) between the two. Perhaps more useful for web developers is this [article by Estelle Weyl](http://www.evotech.net/blog/2009/03/ie8-css-support/) outlining some of the presentation differences between the two, such as border handling and box model differences.

Why does this matter? Because I've heard some otherwise intelligent web developers (including [Microsoft's Expression Web team](http://blogs.msdn.com/xweb/archive/2009/03/18/Microsoft-Expression-Web-SuperPreview-for-Windows-Internet-Explorer.aspx), which uses IE8's Compatibility Mode for IE7 testing) claim that testing will be much easier now, since you can test everything in one place.

To be sure, tools like Expression Web or the old [Stand-Alone IE](http://www.positioniseverything.net/articles/multiIE.html) installers are helpful, but don't fool yourself into thinking that they are an accurate representation of a "clean" IE6 or IE7 installation. To test against those, you'll still need to resort to more thorough measures like keeping separate machines around, or using the [free Virtual PC images for IE6, IE7, and IE8](http://www.microsoft.com/Downloads/details.aspx?FamilyID=21eabb90-958f-4b64-b5f1-73d0a413c8ef&displaylang=en).

**Note:** This was originally posted on [my work blog](http://blogs.popart.com/author/scottvandehey/), and I'm re-posting it here for archival purposes.
