---
title: 'Skinning Community Server 2007'
date: 2007-10-01
tags:
  - blogging
  - communityserver
  - cs2007
  - documentation
  - software
  - wordpress
authors:
  - scott
---

We recently upgraded the [Pop Art Blog](http://blogs.popart.com/) to [Community Server 2007](http://communityserver.org/), and I was assigned to upgrade the templates. Dave produced a wonderful comp, and when I read about CS2007's new [Chameleon Theme Engine](http://docs.communityserver.org/wiki/page.aspx/120/introduction-to-chameleon/), I was pretty excited. The actual experience of working with the templates turned into a bit of a nightmare, however.

Before I get into how it went wrong, let me point out what went right. First of all, we did eventually succeed in getting nearly everything we wanted done, and I'm incredibly proud of the final results. Secondly, although I experienced many frustrations along the way, the [official support forum](http://communityserver.org/forums/) was very helpful, and I always got a response to my questions within 24 hours. If you're going to try skinning a CS2007 site, I highly recommend getting an account on the forums, and working with a programmer, if you can (more on that later).

Finally, although I did have difficulties, CS2007 is built to support a corporate blogging environment from the ground up. Wordpress and Movable Type are better programs in terms of the overall blogging experience, but their support for multiple-user scenarios are limited at best. Wordpress MU comes close, but I don't like being removed from the primary development branch. At the end of the day, CS2007 is clearly the best solution for corporate blogging the way we want to do it.

With that out of the way, let's talk about why skinning it was such a frustrating experience. It all boils down to one simple problem: A complete and total lack of documentation for non-programmers. Allow me to explain.

There are basically three classes of users for a product like CS2007 or Wordpress. You have your basic users who don't know anything about the code, and only interact with the program through the browser interface. These users have minimal documentation needs. Give them some instructions on how to make a new blog post or add their logo to the default template, and they're good to go. Both Wordpress and CS2007 have this basic documentation.

Next, you have your programmers. These are power users who are happy to muck around in the source code if they don't like the way something works. These users have advanced documentation needs, because they need insight into things like the database schema, program controls and common functions. Both Wordpress and CS2007 have this advanced documentation. In fact, Community Server's comes in an [MSDN-style CHM file](http://docs.communityserver.org/wiki/page.aspx/252/chameleon-control-documentation/) listing all the controls that are available. My programmer cohorts assure me that this documentation is quite thorough and gave them everything they needed to know.

Lastly, you have your casual developers. These are the guys like me who are very familiar with front-end code like HTML, CSS and javascript, but don't know any .NET or PHP. These users have moderate documentation needs. They don't need to understand how the source code works or the structure of the database necessarily. What they need is an easy way to pull out specific bits of information.

To give you a way to compare, let me give you a simple example common to both WordPress and Community Server.

In Wordpress, to display the date a post was made, you use this code: `<?php the_date(); ?>` I found this out by going to the [Wordpress documentation](http://codex.wordpress.org/), clicking on [Template Tags](http://codex.wordpress.org/Template_Tags), and then clicking on [the_date](http://codex.wordpress.org/Template_Tags/the_date) in the "Date and Time tags" section. I was given a description of the tag, a list of parameters, and some examples of how to use it.

In Community Server, to do the same thing, you use this code: `<CSBlog:WeblogPostData runat="server" Property="PostDate" />` I found this out by visiting the [Community Server documentation](http://docs.communityserver.org/) section, and searching (in vain) for information on modifying templates. Eventually, I stumbled onto the [Single Value Controls](http://docs.communityserver.org/wiki/page.aspx/123/single-value-controls/) page, which helpfully explains the structure that is used to get a bit of information out of the database. This page does not give a complete list of values, however. To get that, I had to backtrack using the breadcrumb trail at the top of the page to the [Chameleon Control Documentation](http://docs.communityserver.org/wiki/page.aspx/252/chameleon-control-documentation/) page, which links to the MSDN file I mentioned before, as well as "API Property Documentation", which includes a link to [Blog Control Property Data](http://docs.communityserver.org/wiki/page.aspx/395/blog-control-property-data/), which lists all the properties for the CSBlog:X control. By combining the structure I found on the Single Value Controls page and the property names I found on the Blog Control Property Data page, I was able to make a control that echoes out the post date.

Now, that's really not a great example, because I was never trying to look up something as simple as the post date. For something like that, I would look for an example in an existing theme. I'm just using this to illustrate what a pain it is to find any information on the Community Server side if you're not a programmer. I tried looking in that MSDN document, but it was all greek to me. Even when my programmer cohorts were assisting me and walking me through the document, I didn't understand what I was looking at.

A more common example of the kind of thing I needed documentation for was how to display a list of weblog posts but limit it by a certain tag. I never did find any documentation explaining how to do something like that. If you need anything like that, your only recourse is the forums. For example, here is a search I did for [filter blog posts by tag](http://communityserver.org/search/SearchResults.aspx?q=filter+blog+posts+by+tag+AND+sectionid%3a129&o=Relevance). You'll notice that of the results I got, most of them have nothing to do with my search, except that they are about how to use tags. Of the posts that do seem relevant, you'll notice that most of them date from 2005 or 2006 - meaning they refer to the previous version of Community Server, and are no longer relevant.

Everything is like this. Searching for the most simple information becomes an incredibly frustrating ordeal. The only saving grace of the forum is that it is populated by people like [Ben Tiedt](http://communityserver.org/members/btiedt.aspx), who managed to answer all the questions I posted within 24 hours, and was really helpful.

So, to recap: If you want to find anything out about Community Server, be prepared to spend hours trolling the forums and documentation, sifting through the irrelevant and out-of-date results to possibly find an answer, but more likely, you'll have to post a question yourself, and wait for a community member to help you out.

I can't be the only one who thinks that forums should not be the primary method of sharing information. Community Server desperately needs Wordpress-style documentation aimed at casual developers (like myself) who have higher needs than the average end user, but aren't programmers.

**Note:** This was originally posted on [my work blog](http://blogs.popart.com/scott-vandehey/), and I'm re-posting it here for archival purposes.
