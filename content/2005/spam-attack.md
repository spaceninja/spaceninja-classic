---
title: "Spam Attack"
created: 2005-05-26
tags: 
  - web-development
authors: 
  - scott
---

I was getting slammed with comment spam tonight, all for prescription drugs. But Wordpress, being wonderful, stopped 99% of it and dropped the spams into my moderation queue, where I just gave a quick look to confirm they were all spams, and then deleted them all in one fell swoop. The ones it missed were for one particular drug, which I've now added to my moderation list, and best of all, the spammer was dumb enough to post all the comments from the same IP, so now I've blacklisted his IP. Hooray for Wordpress!

**Followup:** The spam just kept coming, although WP was good enough to put 95% of it in the moderation queue, for me to delete by hand. Strong measures were needed, however, so I installed the [wp-hashcash](http://elliottback.com/wp/archives/2005/05/11/wordpress-hashcash-20/) plugin, which adds a hidden form field to the comments form. It doesn't affect human users at all, but it stops bots from being able to do anything, and since turning it on 24 hours ago, I haven't had a single spam, so it seems to be working well.

**Followup 7/27/2005:** Hashcash has done the trick! My spam problems are effectively over. I still get one or two a month thrown in the moderation queue, but not a single spam has slipped through, and not a single person (to my knowledge) has been prevented from commenting. Victoly!
