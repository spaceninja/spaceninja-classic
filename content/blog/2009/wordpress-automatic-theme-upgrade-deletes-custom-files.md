---
title: 'Wordpress Automatic Theme Upgrade Deletes Custom Files'
date: 2009-02-28
tags:
  - automatic
  - deleted
  - dojo
  - frustration
  - upgrades
  - wordpress
authors:
  - scott
---

When I made [Dojo](/dojo/), one of the main features of the theme is the ability to add a custom.css file in the same directory, and the theme will load it - that way you can use the theme as a starting point, and just change the colors and stuff to match what you want. That's how [Sean's blog](http://nyarlo.net/) works. It's a stock installation of Dojo with a single custom.css file.

A few days ago, I released an upgrade to the theme to add support for some new features in Wordpress 2.7, so I logged into Sean's blog to upgrade the theme. Newer versions of wordpress added the ability to automatically notify users when a new version of a theme is available, and let them click on a link to automatically upgrade. Since I wasn't sure how it would work, I backed up Sean's files first, and then used the Upgrade Automatically feature.

It worked perfectly, except it **deleted** all his custom files! His custom.css file and some other images in the theme directory were just gone. No notification, nothing. Thankfully, I had the backup, so I could restore those files quickly, but I hate to think that someone out there is going to upgrade their installation of my theme this way, and lose all their work.

So please, if you use the Upgrade Automatically feature, make sure you have a backup of your files first, otherwise your custom files will be deleted!
