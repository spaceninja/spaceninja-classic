---
title: "Bug Fix"
created: 2005-03-23
tags: 
  - web-development
authors: 
  - scott
---

I seem to have fixed the problem with IE and the invisible comments form. I thought it was one thing, and it turned out to be something completely different and kind of stupid. I had an element floated, and it was appearently killing everything. It didn't really need to be floated, so I just removed that, and now things work.

In the process, however, I've discovered that if a comment contains a long URL, IE's broken treatment of CSS results in the entire layout breaking, and the sidebar gets shoved way down the page (as on [this page](/2005/03/the-unknowable-mysteries-of-seattle-public-transit/#comments)).

And guess what? There's NO WAY TO FIX IT.

Ugh.

[Here's the discussion](http://www.webmasterworld.com/forum83/5762.htm), but what it boils down to is that browsers that support web standards allow long elements to pop out of their containing box, to keep the layout working the way it should, whereas IE forces the box to expand to contain the long element, thus breaking the layout.

Possibly, this could be fixed by moving my sidebar to the left side of the page, but I don't want to do that.
