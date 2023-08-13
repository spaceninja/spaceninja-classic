---
title: 'Version Targeting and IE8'
date: 2008-02-20
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

**Previously on Web Developer Controversies:** Aaron Gustafson from the Internet Explorer development team announced that [IE8 will use a META tag to kick the engine into standards mode](http://alistapart.com/articles/beyondDOCTYPE) by targeting a specific browser version, something that was previously done by using a valid DOCTYPE. A lot of people, including Jeremy Keith, think this is a bad idea. Here are some of the more interesting points that have been raised in the discussion so far.

> "If IE8 acts like IE8 by default, then IE8 might break \[poorly-made websites\]. Breaking millions of sites is unacceptable to Microsoft’s brass and to the creators of those websites. It’s to prevent that breakage that Microsoft’s browser developers came up with the new switch. To do its job, the new switch must work the same way the DOCTYPE switch originally worked: namely, it is activated when knowledgeable developers opt in; otherwise it is off by default."
>
> — Jeffrey Zeldman, [Version Targeting: Threat or Menace?](http://www.alistapart.com/articles/minorthreat)

Good summary of the issue. However, I will quibble with one point here. The DOCTYPE made a good switch because it was something you were supposed to be doing anyway, while this new META tag is something I only need to do for IE.

> "Unless you explicitly declare that you want IE8 to behave as IE8, it will behave as IE7."
>
> — Jeremy Keith, [Broken](http://adactio.com/journal/1402/)

As Jeremy points out in his original post on this topic, when you say it out loud, this sounds like madness. No matter how well-intentioned, and no matter how many times I hear it explained, this just feels backwards to me.

> "The fact is, as each new browser comes out and fixes bugs from older versions, our sites need to be revisited. Until we have a chance to do so, our sites shouldn't break."
>
> — Jonathan Snook, [IE8 to include version targeting](http://snook.ca/archives/browsers/version_targeting_ie8/)

Jonathan brings up a perfect real-world example where version targeting would be very handy - locking old code into the browser(s) it was designed for until you have a chance to revisit them.

> "Version targeting is not a bad idea. ...As an optional feature, this could prove to be a real lifesaver in some development environments. As a mandatory milestone however, it strikes a blow against progressive enhancement."
>
> — Jeremy Keith, [They Shoot Browsers, Don't They?](http://www.alistapart.com/articles/theyshootbrowsers)

More recently, Jeremy clarified that he thinks version targeting is a fine idea, but making IE7 the default value is a knee-jerk reaction to a short-term problem. It breaks everyone's expectation of how software should behave, and opens the door to a whole new set of problems in the future.

> "Will the backwards-compatible code for IE8 always act exactly like IE8 did, or will there be subtle changes that still break old sites?"
>
> — Eric Meyer, [From Switches to Targets](http://alistapart.com/articles/fromswitchestotargets)

Eric actually wrote in defense of version targeting, but even he raised some concerns about how it would be implemented, and the largest one was this: How can we be sure that future versions of IE will continue to support whatever version of IE we lock our code to? While it's easy enough to picture IE8 shipping with an intact version of the IE7 and IE6 rendering engines, what happens with IE9+? Will each successive browser release contain every engine? Is it really possible to maintain all of those without making any changes? Looking at the way Microsoft supports backwards compatibility in the Office suite, I'm not optimistic.

> "IE7 didn’t... 'break the web,' and neither did DOCTYPE switching. ...The burden is upon developers and designers to comply, test, and validate."
>
> — Ethan Marcotte, [Code Happy](http://unstoppablerobotninja.com/journal/entry/518/)

Ethan raises a point that many people have brought up: Microsoft is taking responsibility for "not breaking the web," when it's not really their problem. The only thing that's broken is software and publishing processes that allow invalid code to go live in the first place.

> "But what happens when a multi-billion dollar partner corporation refuses to update and demands, under the terms of its very large service contract and its very steep penalty clauses, that a new version of IE not break ...its corporate intranet?"
>
> — Eric Meyer, [Almost Target](http://meyerweb.com/eric/thoughts/2008/01/24/almost-target/)

Of course, as Eric brings up while telling the story of a similar problem he faced during the development of Mozilla, there's a very good reason that Microsoft is taking responsibility for this "breakage" — Their target audience (corporations) don't seem to care that the problem is caused by their code. As far as they're concerned, the problem wasn't there in the previous version, and now it's there in the new version, therefore the new version of IE broke their website. It's bad logic, but we get similar complaints from clients, so I can identify.

And like it or not, web developers like ourselves who are passionate enough about these issues to read all these articles about a proposed feature in an upcoming browser release are not the target audience for Microsoft. It reminds me of the guy from the boat in the new season of Lost, who said "Rescuing your people? I can't say it's our primary objective."

> "Therefore Microsoft won’t be inundated with complaints which, in the hands of the wrong director of marketing, could lead to the firing of standards-oriented browser engineers on the IE team. The wholesale firing of standards-oriented developers would jerk IE off the web standards path just when it has achieved sure footing. And if IE were to abandon standards, accessible, standards-compliant design would no longer have a chance."
>
> — Jeffrey Zeldman, [In Defense of Version Targeting](http://www.zeldman.com/2008/01/22/in-defense-of-version-targeting/)

However, it's possible to take that argument too far. According to Zeldman, nothing less than the future of standards-compliant design rests on this decision. Now, I worship the ground Jeffrey walks on just like every other good standardista - but this seems like a bit of a stretch. IF this happens, then this MIGHT happen, which MIGHT cause this doomsday scenario. Perhaps he's got some insider information, and perhaps Microsoft is a much more dysfunctional company that it seems, but I don't think the sky is falling over a META tag.

> "The Linux kernel... doesn’t commit to supporting legacy APIs and ABIs. This means that kernel developers are able to make the right design decisions and rewrite broken code without having to worry about continuing to support applications that depend on buggy or poorly designed interfaces ...and backwards compatibility does not act like an anchor on innovation.
>
> — Matt Chisholm, [Internet Explorer lays Anchor in 1999](http://glyphobet.net/blog/?p=17)

Not to hammer the point too much, but the obvious contrast here is Apple and Linux. By embracing emulation over backwards compatibility, they sidestep these issues entirely. If you want to run code that was written for an older version of the OS, you have to run it in an emulator. This places the burden to upgrade on the consumer. In Microsoft terms, if the customer wants the latest version of the browser, but they refuse to update their code, then they need to emulate an older version of the browser for that code.

> "The system is opt-in. It’s our choice whether or not to include the optional meta element (or HTTP header) that triggers version targeting. Therefore, in fact, developers are no longer being asked to accommodate Microsoft—at least not beyond the known blemishes of IE7. Instead, Microsoft has committed to accommodating us."
>
> — Jeffrey Zeldman, [Version Targeting: Threat or Menace?](http://www.alistapart.com/articles/minorthreat)

Now, I might just be a simple caveman lawyer, but it seems to me that if I have to do something extra to get the browser to behave as expected, then I'm the one that has to accommodate Microsoft, not the other way around.

> "The strong have always been burdened by the weak. It may not always seem fair, but helping where you can is “the right thing to do.” In the case of the ongoing X-UA-Compatible bluster, the strong are the savvy standardistas. The weak? Those who simply don’t know any better. The burden? A single meta tag or http header. Can we move on now?"
>
> — Shaun Inman, [Burden](http://www.shauninman.com/archive/2008/02/19/burden)

Of course, no matter how you feel about this debate, it helps to put everything into perspective. At the end of the day, all we're really talking about is a META tag, and you can make things even simpler by setting it on your server, so you don't even have to put extra markup into your pages.

Personally, I agree with Jeremy Keith that defaulting the rendering engine to IE7 is a bad move, but if it happens, I'll work around it. Just like I've always worked around Microsoft browsers.

**Note:** This was originally posted on [my work blog](http://blogs.popart.com/scott-vandehey/), and I'm re-posting it here for archival purposes.
