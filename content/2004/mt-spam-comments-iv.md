---
title: "MT Spam Comments IV"
created: 2004-11-14
tags:
  - web-development
authors:
  - scott
---

Okay, so removing the URL and Email fields was a really, **really** bad idea. MT-Blacklist was actually blocking a good portion of the comment spams, but it operates by comparing the URL in the comment to the blacklist of URLs it knows to block. No URLs meant no comments were blocked.

On the plus side, it does prove that a good portion of the comment spams we're getting are done by robots, so I can move forward with Phase 2. I've already renamed my comment script, but I still gave it a pretty generic name, so I'm going to rename it to something crazy. I've already removed the popup links and links directly to the comment script, so spammers already have to go through the individual entries to spam, but since those are permalinked, it doesn't really slow them down.

Phase 2 is removing the Post button and seeing how much that decreases the spam.

Phase 3 (if needed) will be to add a CAPTCHA image to force commentors to verify they're not robots before they post. I hesitate to take this step, because I hate to force legitimate posters to jump through hoops before they can post.

Phase 4 is to add a blockade - I have to manually verify every comment before it gets posted. Drastic and ugly, because it requires me to do a lot of work.

Phase 5 is where things start getting really unattractive. If we get this far, we're looking at really bad options like turning off comments on entries older than two weeks, turning off comments altogether, or upgrading MT to v3, which includes a comment registration system. I don't like any of the options, so I'm hoping we don't have to go that far.

I love comments, and I love allowing people to comment without having to register or login or prove themselves - but if my alternative is to be buried under comment spam, I may have to alter my stance on this issue. :(

**update:** I've removed the Post button on the comment form, and I've also added a CAPTCHA plugin, which will force users to type a number from an image to verify that they're not a robot. Everything seems to be working well so far, though I had to undo another change I made that split the Preview and Post actions into separate forms because it conflicted with the CAPTCHA plugin. At this point, I've pretty much made up my mind to switch to WordPress if this doesn't work.
