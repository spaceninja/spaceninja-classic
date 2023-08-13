---
title: "Tables Don't Have a HEIGHT Attribute"
date: 2001-10-21
categories:
  - professional
tags:
  - attributes
  - browsers
  - css
  - height
  - html
  - ie
  - mozilla
  - netscape
  - standards
  - tables
  - webdev
authors:
  - scott
---

I am absolutely stunned. For a few months now, I've been discovering that some of my websites don't render correctly on Netscape. Now, like any web designer, I'm aware that none of the major browsers render HTML exactly according to the [standards](http://www.w3.org/), let alone CSS. So I chalked it up to IE being slightly ahead in the browser wars and blamed Netscape for not being standard-compliant. However, I recently found out that [Mozilla](http://www.mozilla.org/) also has some problems with some of my sites. This is cause for alarm, since Mozilla's major feature is an HTML rendering engine that is supposedly 100% compliant. I did a little detective work and found out that all of the bugs could be blamed on Netscape except for one thing. There's an odd bug that shows up in the way some table cells are rendered on Mozilla (as well as Netscape) that I couldn't explain away. My code appeared to be correct. Tonight, I stumbled across the answer while working on a new site for work.

**There is no HEIGHT attribute for tables or table cells in HTML**

Everyone uses height tags in their tables. It's common practice. But while checking my manuals, I found out that it's a non-standard tag. There's a width attribute, but no height attribute. WHY? THIS MAKES NO SENSE.

I stumbled onto this because Netscape would render table cells set to HEIGHT=100% way too large, as if it was setting it to 100% of the screen size, rather than 100% of the space available. And in some circumstances, Netscape would ignore the HEIGHT attribute altogether. IE would render it with 100% of the space available. Mozilla would ignore the height tag altogether in all circumstances. So Netscape and IE had different ways of dealing with this non-standard tag, and Mozilla was the only one doing things the way it was supposed to. The only problem is that suddenly I'm left without a tag that I've been using frequently.

And there's no substitute! Let's say you want to position an element in the middle of the screen, no matter what size window the viewer has. CSS allows for exacting control over elements, but it will not accept general terms like align right or left or center. You have to enter exact distances from the top left corner. To get around this you need tables. Well, you can set the table cell to 100% width and height, and then align to the center both vertically and horizontally. Well, according to the HTML specs (and therefore, according to Mozilla), you can do that horizontally, but not vertically.

I love web design. It is my passion. But I swear, if anything ever drives me insane someday, it's going to be things like this.
