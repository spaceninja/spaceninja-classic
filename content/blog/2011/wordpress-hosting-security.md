---
title: "It doesn't matter how secure your WordPress installation is if you have insecure hosting"
date: 2011-08-03
categories:
  - professional
tags:
  - dreamhost
  - hosting
  - security
  - wordpress
authors:
  - scott
---

I recently struggled with a nasty case of Pharma spam on my blog. I'll post soon with a more detailed run-down of what happened and how I dealt with it. In a nutshell, however, it appears that the hackers got in through poor security on my hosting, rather than any vulnerability in WordPress.

At the time, I was using Dreamhost's shared hosting plan, which I previously never had anything negative to say about. When the hacks started, I spent months focused on possible problems due to WordPress. I upgraded everything, changed my passwords repeatedly, disabled all plugins, did complete fresh installations and scoured my database for any references to the hacks, all to no avail.

Eventually, I was forced to concede that the problem probably originated from the hosting plan I was on. I switched hosts, and was able to clean everything up. Since then, I've discovered two settings in Dreamhost's control panel that probably contributed, so I'd like to share them with you.

![Dreamhost Domain Security: Check the Extra Web Security option on the edit domain page.](/images/dreamhost-security-domain.png)

When editing a domain, make sure the "Extra Web Security" option is checked. Here's what the [Dreamhost wiki](http://wiki.dreamhost.com/Mod_security) has to say about the option:

> The Extra Web Security option (you see it when adding a new domain or editing the web settings for an existing domain) enables the use of a very special security module for your website. Many common attacks that can compromise your website will be blocked by this option. We cannot guarantee that all attacks will be blocked but we will do our best to ensure the most common known attacks will be prevented.

![Dreamhost User Account Security: Check the Enhanced Security option on the edit user account page.](/images/dreamhost-security-user.png)

When editing a user account, make sure the "Extra Security" option is checked. I would also check the "Disable FTP" option, since FTP is notoriously insecure. Again, here's what the [Dreamhost wiki](http://wiki.dreamhost.com/Enhanced_User_Security) has to say:

> The Enhanced User Security setting prevents other users from accessing your home directory. It can be enabled separately for each user in the panel under Manage Users. It is disabled by default.

This option is particularly dangerous if you're a WordPress user, since the WordPress password is stored in a plain text file in your website's root directory. So if this option is unchecked ANY USER on your Dreamhost server can view your database credentials. I cannot understand why Dreamhost leaves this option unchecked by default.

Who needs a backdoor if you leave the keys in the door?
