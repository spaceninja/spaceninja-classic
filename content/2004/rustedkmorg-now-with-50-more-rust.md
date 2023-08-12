---
title: "Rusted.KMorg - Now with 50% more rust!"
created: 2004-01-30
tags:
  - web-development
authors:
  - scott
---

So, you may have noticed a few changes around here... The biggest change is that Rusted is no longer using Forum5000. I've been goofing around with [Movable Type](http://www.movabletype.org/) for a couple months now, and I finally decided that the combinations of features that it offers was worth upgrading to.

Anyways, the important thing is that the upgrade is all done, and Rusted's running the new software. There will be more changes over the next few days as I nail down the design and stuff, but all the old posts are here, and everything should be working. If you're interested in the more geeky aspects of the upgrade, read on... Once I decided to upgrade, the next challenge was figuring out how to get all the posts from the F5K into MT. I beat my head for an evening against a conversion script based on one that Steve wrote when we upgraded from FCS to F5K. It was a PHP script that copied data from one database to the other, field for field.

I couldn't get it to work, and it kept failing in completely different ways, so I finally decided to admit I was in over my head, and called Miles to see if he could help. He was busy, but he did suggest I look at the MT developer docs, which led me to find the [MT Import File Format](http://www.movabletype.org/docs/mtimport.html).

Now, this was something I understood. Over the next hour, I converted a copy of the F5K install to produce the MT format instead of HTML, and even learned how to use the [PHP strtotime](http://www.php.net/strtotime) function to convert the dates to the format MT was expecting.

Anyways, after a lengthy conversion process, I finally finished the import process, and now I'm running the fancy new MT software! Hooray!
