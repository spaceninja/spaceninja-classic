---
title: "Who's Afraid of HTML Email?"
date: 2008-12-18
tags:
  - css
  - design
  - email
  - gmail
  - markup
  - microsoft
  - outlook
  - standards
  - tables
authors:
  - scott
---

Anyone who tells you creating HTML email is easy has either never done it, or is lying. Inexperienced designers tend to think, "Oh, no problem, it's all tables and font tags!" Grizzled veterans, however, know all too well the difficulties of getting anything but the most simple design to render well in a variety of clients.

Email design today is like web design in the early 90's, complete with nested tables, spacer gifs, and `FONT` tags galore. Standards support is virtually non-existent, and even simple things like background images and table spacing are handled poorly by some clients.

By being aware of the unique challenges that HTML email presents, and following the recommendations in this article, you'll make life much easier for your production team.

### What Email Clients Do People Use?

Until recently, the single biggest problem when designing HTML emails was a lack of reliable information about the target audience. Unlike web design, where server logs and web statistics programs make it pretty easy to find out what browsers your audience is using, there are no equivalent tracking programs for email.

The only sources of information I could find online were [two](http://www.clickz.com/1428551) [surveys](http://www.wilsonweb.com/wmt8/email_format_preferences.htm), published in 2002 and 2003, that were given to limited audiences. With the small size of the sample groups, the way the survey was structured, and the age of the surveys (which predate both Gmail and the iPhone!), the results are nearly useless.

Thankfully, while conducting research for this article, a company that makes [email client usage statistics software](http://fingerprintapp.com/email-client-stats) decided to start publishing some of their data. The results for business users are surprising:

[![2008 Email Client Stats](/images/3100559043_f2ec61591a.jpg)](http://fingerprintapp.com/email-client-stats)

Some noteworthy takeaways:

- Outlook is the most popular, but not by much.
- Most people have yet to upgrade to Outlook 2007.
- Webmail programs add up to more than half of total usage.
- Gmail is dramatically outnumbered by Yahoo.
- Yahoo is even more dramatically outnumbered by Hotmail.
- Lotus Notes and AOL are (thankfully) negligible.
- The iPhone has a respectable 1.3% of total usage!

This means we can expect any email we create to be viewed in Outlook, Yahoo, Hotmail, and Gmail. Testing in all of these is ideal, however, if time is tight, you can probably get away with just testing Outlook 2007 and Gmail. As we'll discuss next, these are the two most restrictive clients, and if your email works well for them, it should work well in all the others.

### What are the Problems with HTML Email?

Now that we know what clients our audience is using, we can start looking at some of the challenges that arise when building HTML emails. A complete list of every type of problem is beyond the scope of this article, but if you're interested, [Campaign Monitor's tips section](http://www.campaignmonitor.com/resources/) is a great resource.

#### CSS Support is Unreliable

While most email clients [support CSS to some degree](http://www.campaignmonitor.com/css/), the problem here arises from the fact that each does so in a different, and contradictory manner. The two worst offenders are [Outlook 2007](http://www.email-standards.org/clients/microsoft-outlook-2007/) and [Gmail](http://www.email-standards.org/clients/gmail/).

Gmail only supports inline CSS, therefore, any `STYLE` blocks or linked stylesheets in the `HEAD` of your document will be stripped entirely. Of course, even if they weren't, it wouldn't do you much good, since Gmail also strips all `ID` and `CLASS` attributes.

[![Outlook 2000 vs Outlook 2007](/images/3100224711_4821897552.jpg)](http://www.flickr.com/photos/spaceninja/3100224711/)

Outlook 2007 will allow linked stylesheets and `STYLE` blocks, but the emails are rendered using the [Microsoft Word rendering engine](http://www.campaignmonitor.com/blog/post/2396/the-truth-behind-the-outlook-2007-change-and-what-you-can-do-about-it/). This means no background images, no floats, no positioning, and no margins or padding. It's so bad that when Microsoft announced the change, Campaign Monitor's headline was "[Microsoft takes email design back 5 years](http://www.campaignmonitor.com/blog/post/2393/microsoft-takes-email-design-b/)."

Due to the popularity of Outlook among business users, [Campaign Monitor recommends](http://www.campaignmonitor.com/blog/post/2533/a-guide-to-css-support-in-emai-2/) that all business emails be built with tables and minimal inline CSS only.

#### Most Clients Disable Images by Default

[![Image Blocking by Email Client](/images/3100224675_a9a9c3744c_m.jpg)](http://www.flickr.com/photos/spaceninja/3100224675/)

There is some variation between clients, but most have images blocked by default, unless the user is in the address book. Older versions of Gmail actually blocked images at all times, though this seems to have been fixed recently.

As a result, [Campaign Monitor recommends](http://www.campaignmonitor.com/resources/entry/677/image-blocking-in-email-clients/) that you "become a known sender" by adding a note to your sign-up form, and any subsequent emails you send, asking users to add you to their address book. Needless to say, this requires that you send your emails from the same address each time.

Additionally, they recommend that you plan for images being disabled. Since `ALT` text is unreliable (more on that in a moment), you should begin your email with HTML or plain-text headlines. This means users can tell what your email is about, even without seeing your images. Also, consider putting plain-text captions under important images.

#### ALT Text is Unreliable

[![Blocked Images in Outlook](/images/3100224563_e8d2592eb1_m.jpg)](http://www.flickr.com/photos/spaceninja/3100224563/)

The fact that images are disabled by default wouldn't be so bad except that most clients also have [difficulty displaying `ALT` attributes](http://www.campaignmonitor.com/resources/entry/676/how-do-alt-attributes-appear-in-email/). As usual, Gmail and Outlook are the worst offenders.

Gmail does show `ALT` text, but only if the image dimensions are large enough to display the entire string of text. As a result, small images, or images with lengthy `ALT` attributes, show nothing at all.

Outlook (both 2007 and previous versions) do show the `ALT` text, but they preface it with a lengthy error message, which effectively hides the text from view in most cases. In this case, the one positive note is that since every image in every email will display this security message, most users will be used to it, and to clicking the button that enables images in the email.

#### Gmail Ignores Cellspacing

[![Missing Cellspacing in Gmail](/images/3101061302_9463ca8690_m.jpg)](http://www.flickr.com/photos/spaceninja/3101061302/)

This is a very recent change and, for my money, one of the most annoying problems facing email designers. [Gmail strips all `PADDING` and `CELLSPACING` from tables](http://www.campaignmonitor.com/blog/post/2421/the-varying-landscape-of-gmail-1/). Regardless of whether you use CSS, or the old-school attributes for the table itself, Gmail zeroes it all out.

As a result, you have to retool all your tables to not use any `PADDING` or `CELLSPACING`. Instead, bust out your spacer gifs and add empty table cells everywhere you need white space. This won't impact the way your emails are designed, but it means a dramatic increase in code bloat.

### Tips for Designing HTML Emails

In addition to learning about the most common difficulties with HTML emails, there are several things you can do to make your experience easier. If you're still familiar with table-based layouts, these are common sense, but if you've been doing standards for a while now, it can be difficult to get back into the mindset of the limitations you need to work within.

#### Remember HTML Font Sizes

[![HTML Font Sizes](/images/3101061360_0d9e5b4181_m.jpg)](http://www.flickr.com/photos/spaceninja/3101061360/)

It's easy to forget that without CSS, there are only 7 font sizes, and the differences between them are pretty severe. Size 1 text is tiny, and usually only suited for the fine print in the footer. Size 3 is huge, so your body text will probably be size 2. That means you only really have one or two usable font sizes for your body text. Keep this in mind while creating the design to avoid having layout shifts due to font size differences.

#### Avoid Overlaps

Since Outlook 2007 won't display background images, you cannot display HTML text over an image — even a simple one like a gradient. You'll either need to adjust your design to keep a solid color behind all HTML text, or set it up so that if the background disappears, the design still looks appropriate.

#### Avoid Image Headlines

As mentioned above, most email clients have images disabled by default and have difficulty displaying `ALT` text. As a result, if your most important headlines are images, your readers won't see them at first! If you know your audience is invested enough to click through, that risk might be acceptable, but most of the time you should make sure that your primary call to action is not stuck in an image. This will limit your font choices, but will dramatically improve the odds that your audience will see your headline.

#### Web Version and Address Book

Even if you follow every suggestion in this article, your email may not work for some people, so provide them with alternatives. Most email campaign products make it easy to insert a "view as web page" link and to include a plain-text version of your email.

A good way to do this is to include a bit of text requesting that your readers add you to his or her address book. One easy technique to get all this out of the way, is to include a block of plain HTML text at the very top of your email that explains why the reader received this email, provides an unsubscribe link, a link to a web-based version of the email, and suggests that they add your email to their address book.

### In Conclusion

The bad news is that CSS and web standards support in email clients is so inconsistent as to be non-existent. Not only that, but it's gotten worse in the last two years thanks to Outlook 2007 and Gmail.

When I first started designing HTML emails for our clients, I would quote 1-2 hours for each email. Today, I quote 4-5 hours because it's gotten so much more complicated.

The good news is that things are going to improve — slowly. [The Email Standards Project](http://www.email-standards.org/) aims to do for email what [the Web Standards Project](http://www.webstandards.org/) did for web browsers in the late 90's. However, it took the Web Standards Project years to make a significant impact, and due to the slow rate of upgrades in email clients, it'll probably take even longer. Still, this kind of pressure will undoubtedly help the situation.

**Note:** This was originally posted on [my work blog](http://blogs.popart.com/scott-vandehey/), and I'm re-posting it here for archival purposes.
