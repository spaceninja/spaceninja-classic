---
title: "Thoughts On WordPress"
created: 2005-03-09
tags: 
  - web-development
authors: 
  - scott
---

I switched all the blogs over to [WordPress](http://www.wordpress.org/) 1.5 a few weeks ago. Since then, I've been working hard to restore all the functionality we had under [Movable Type](http://www.movabletype.org/). I've waded hip-deep in the guts of the program, and I feel familiar enough with it now to give my reaction.

Overall, I like it. WordPress is open-source and free, and will always be. In contrast to MT suddenly charging, I'll never have to worry about WP limiting me in the future. Plus, it's written in PHP instead of Perl, which means there's always a chance I could understand the code and hack it a bit on my own, or even write my own plugins. That could have happened under MT, but I'm not a strong enough programmer to learn the amount of perl I would need for that. And finally, I like that with WP, everything is dynamic, so I don't have to deal with rebuilding the static pages every time someone comments on a post. That server overhead was crazy, and it would get out of hand every time we got spammed.

There are a few things that I don't like, though. First of all, the template system (which, to be fair, is brand new) is a pain in the ass, and nowhere near as well documented as MT's. I had to work a lot harder to figure out what files did what, and what bits of code were necessary, and how to clean up the XHTML that's output. With that said, once I figured it out, it's all pretty nice, and I think the system will only get better with time as it continues to get refined.

Secondly, one of the features they advertise and take pride in is the ability to have cruft-free URLs. This means that instead of having my post's permalink be /blog/index.php?s=12345 it's something like /blog/archives/2005/03/07/post-title/ - which is obviously much easier to understand. The bad news is that the entire thing is done through an incredibly arcane bit of Apache hacking called "mod\_rewrite", which I don't know anything about. WP does it's best to do it all for you, but (of course) it's not quite that simple. All the mod\_rewrite code it automatically generated in an .htaccess file for you, but you have to move a few lines around to get everything working right (this is undocumented, of course, I had to go to the support forum). And, through no fault of WP's, my new webhost has a funky situation involving mod\_rewrite that makes my situation much more difficult, and I'm having trouble getting everything working right.

Finally, the documentation situation is not very good. They've clearly worked hard at it, and the [Codex](http://codex.wordpress.org/) is helpful, but the information is minimal, and frequently out-of-date. The support forums is more helpful, but the search engine they've put on the forum gives odd results, and a maximum of five results for every search, which makes finding relevant help somewhat challenging. This will get better over time, but it means that (oddly) my best source of information has actually been from other weblogs that have gone through what I'm going through, and have published their hacks or plugins for public use - it also means that you never know if the hack you're using is the most efficient way to do it.

Anyways, most of this is just bellyaching. Like I said, I'm largely happy with it, but like any web project, once you get into the guts of it, you always find a few unpleasant suprises.
