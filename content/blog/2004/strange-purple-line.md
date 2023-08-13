---
title: 'Strange Purple Line'
date: 2004-09-01
tags:
  - webdev
authors:
  - scott
---

If you're viewing this site through Mozilla Firefox XP, then you've probably noticed the strange purple line extending off the left side of the page from the header image. I have too, and I have NO idea what's causing it. If you're familiar with CSS at all, please see my [forum post](http://forums.devshed.com/t179653/s.html) for details, and let me know if you have any suggestions.

**Edit:** W00t! Problem solved! One of the guys on the forum suggested that I add text-decoration:none; to my style rule, and that did the trick. Upon further investigation, I found that Zeldman already had this rule declared elsewhere in his stylesheet, which is why I didn't see it in the relevant section I was looking at.
