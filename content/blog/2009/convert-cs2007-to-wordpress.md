---
title: 'How to Convert from Community Server 2007 to Wordpress'
date: 2009-07-20
tags:
  - blogs
  - communityserver
  - cs2007
  - howto
  - wordpress
authors:
  - scott
---

It's safe to say that no one at Pop Art was ever really happy with Community Server. We selected it as a platform for a variety of reasons, some of which turned out to be based on faulty assumptions. Once we finally made the decision to switch to Wordpress, the conversion was a huge pain, but ultimately worth the effort.

### How We Got Into This Mess

When I was hired at Pop Art in early 2006, there was no official Pop Art blog. The design team had their own site, which was sporadically updated and not branded as a Pop Art site. Several members of the dev team also had work blogs, but again, they were not branded. As somewhat of a blogging zealot, I pushed hard to standardize these onto one site, and in August, I got the go-ahead to set something up.

When I started looking into solutions, I was working with a few assumptions. First, that the existing blogs would stay up, and the central blog would syndicate their posts by pulling in their RSS feeds. Secondly, despite my strong preference for Wordpress, that it was not a viable option for us. That's because we're a Microsoft shop, so we don't have a lot of PHP experience in-house, and we don't have any Apache boxes to host the site on. Also, since I was assuming we wanted multiple blogs syndicated at one domain (rather than a single blog with multiple authors), there wasn't a good way to do that with Wordpress at the time (Wordpress MU hadn't really taken off at the time).

Given those assumptions, we ended up installing Community Server. I felt good about this because it was the product used to host all the blogs at Microsoft, and appeared to be well-supported and active.

### Increasing Difficulties with Community Server

However, [installation and customization were a nightmare](/blog/2007/skinning-community-server-2007/). After a lengthy struggle to get everything set up correctly, it became increasingly clear that some of our assumptions were inaccurate.

Although we started with independent blogs being syndicated, our CEO eventually wrote a company blogging policy disallowing this, so we ended up with a Community Server site that had 20+ single-author blogs being aggregated onto a single homepage to give the appearance of a standard multiple-author blog. We weren't taking advantage of anything the multiple-blog scenario was originally set up to do.

Over time, we found out that Community Server was not only difficult to customize, it was also poorly supported. After we purchased and installed CS2007, they released two further versions, and stopped supporting ours. (When we contacted them about purchasing an updated for our license to add more blogs, we were told our version was no longer supported, and they offered to let us upgrade at a discounted price of $900. We didn't purchase that upgrade, and three months later, they announced that they were changing their license structure again, and we would now have to pay full price for a brand new license if we wanted to upgrade.) I know that companies make money by releasing new versions, but it seems crazy that less than two years after we bought their product, they wouldn't support us at all without a full upgrade.

To cut a long story short, the straw that finally broke the camel's back was when we decided to integrate Twitter into our blogs. We were able to add the javascript twitter script to the sidebar to display the Pop Art feed easily, but in order to add individual twitter feeds to the profile page, we were going to need to bring in the .NET programmers, who are always really busy — and I realized that if we were using Wordpress, I could do everything myself.

There were other factors, including our frustration with the licensing situation, and the fact that we didn't need the overly complicated multiple blog situation anymore, but the customization difficulties were the kicker. Once I was able to assure our CEO that switching to Wordpress wouldn't lead to a repeat of this situation in a few years, we had the green light to make the switch.

### Exporting Posts from Community Server

Getting our posts from Community Server to Wordpress was our first hurdle. Out of the box, there's no way to make it work, other than having Wordpress scrape the RSS feed — and that would lose all the comments. Thankfully, other people had already done the legwork for me. Bear with me here.

[Aaron Lerch](http://www.aaronlerch.com/blog/2007/08/23/breaking-up-moving-blog-engines/) wrote a great post in August 2007 about switching from Blogger to Wordpress using BlogML. I already knew from when we originally set it up that [Community Server supports BlogML](http://blogs.popart.com/2006/08/community-server-is-grrrreat/), and Aaron wrote a module for Wordpress to import from BlogML format.

Then, in October 2007, [Rob Walling](http://www.softwarebyrob.com/2007/10/05/a-tale-of-moving-blog-engines-community-server-to-wordpress/) wrote a post about switching from Community Server 2007 to Wordpress. He updated Aaron's Wordpress importer because Wordpress 2.3 switched from categories to tags.

Finally, in October 2008, [Kavinda Munasinghe](http://www.kavinda.net/2008/10/23/migrating-from-dasblog-to-wordpress.html) wrote a post about switching from DasBlog to Wordpress, and once again, updated Aaron's Wordpress importer.

So, I grabbed the [BlogML Export module for Community Server 2007](http://nayyeri.net/blog/community-server-2007-blogml-converter/), and Kavinda's updated [BlogML Importer for Wordpress](http://www.kavinda.net/2008/10/23/migrating-from-dasblog-to-wordpress.html), and set about my business.

### Importing Posts to Wordpress

The first problem I ran into is that I couldn't get one big export file of every blog in our Community Server installation, I had to create an export file for each one.

The second problem I ran into is that my exports didn't import correctly. Now, I have no idea if the problem was from one of the versions of the importer, or if the exporter wasn't working correctly, or even if the latest version of Wordpress just has a slightly different database. What it boiled down to is that I had to manually reformat each of my 32 export files.

The biggest issue was with categories/tags. First of all, all my tags were being imported as categories. I was willing to ignore this, since Wordpress has a "convert categories to tags" feature, but it was still annoying. In addition to that, however, all the categories were importing as numbers. Turns out that Wordpress was grabbing the category ID instead of the category name.

I looked at both the importer and the exporter, but I didn't have the programming know-how to fix it, so ultimately, I just wrote a simple regular expression to reformat all the categories so that their names were in the ID attribute so they would import correctly.

In addition to that, author names weren't importing correctly, draft status posts were being published, and a couple of older blogs where the authors had copy-and-pasted from Word were bringing in a bunch of crazy custom microsoft markup. All in all, I probably spent about 3-4 hours manually cleaning up all my export files. This all sounds like a huge pain (and it was!), but I'm happy to say that once I was done, everything imported perfectly.

### Redirecting Old Posts

The final thing I needed to do was set up a 301 redirect for all the old posts. Aaron's importer script gives you a file that you can use to build a list of redirects in your .htaccess file, but I was sure there was a better way. After a bit of digging, I found a forum post about [using mod_rewrite to change dynamic to static URLs](http://www.webmasterworld.com/forum92/6079.htm) that helped me write the following regular expression to redirect from our old permalinks to our new ones.

```
RewriteRule
     ^([^/]+)/archive/([^/]+)/([^/]+)/([^/]+)/([^/]+).aspx$
     http://blogs.popart.com/$2/$3/$5 [R=301,L]
```

Note that normally, that would all appear on one line. I've broken it up for readability. That looks for urls like /scott-vandehey/archive/2006/11/09/post-title.aspx and redirects them to /2006/11/post-title/. With that one rule in our .htaccess file, all our old blogs posts would automatically get a 301 redirect to the new URLs.

Now that we've made the switch, I'm really happy we spent the time on it. We took the opportunity to redo the design to better match our main site, and the template engine in Wordpress is a real joy to work with — and well-documented, more importantly! I'm confident that we'll be able to handle the evolving needs of our company in the future, and informally, I can say that everyone seems happier using the new system. The transition was a pain, but the results were worth it.

**Note:** This was originally posted on [my work blog](http://blogs.popart.com/author/scottvandehey/), and I'm re-posting it here for archival purposes.
