---
title: 'Version Targeting and IE8 Followup'
date: 2008-03-04
tags:
  - browsers
  - design
  - development
  - ie
  - ie6
  - ie7
  - ie8
  - markup
  - meta
  - microsoft
  - software
  - standards
authors:
  - scott
---

Hooray! The feedback from the web development community convinced the IE development team to change their minds about the default setting for version targeting in IE8 (as I discussed in a [previous post](/version-targeting-and-ie8/)).

> "In light of the Interoperability Principles, as well as feedback from the community, we’re choosing differently. Now, IE8 will show pages requesting 'Standards' mode in IE8’s Standards mode. Developers who want their pages shown using IE8’s 'IE7 Standards mode' will need to request that explicitly (using the http header/meta tag approach)."
>
> — Dean Hachamovitch, [Microsoft's Interoperability Principles and IE8](http://blogs.msdn.com/ie/archive/2008/03/03/microsoft-s-interoperability-principles-and-ie8.aspx)

To clarify, version targeting will still exist in IE8, which is a good thing. The change is that instead of defaulting to IE7's rendering engine, it will default to IE8 — which is the behavior you would logically expect.

You know, it's really nice to make a post where I can say something nice about Microsoft, and that's been happening a lot more often lately, thanks to the IE development team. Way to go, guys!

**Note:** This was originally posted on [my work blog](http://blogs.popart.com/scott-vandehey/), and I'm re-posting it here for archival purposes.
