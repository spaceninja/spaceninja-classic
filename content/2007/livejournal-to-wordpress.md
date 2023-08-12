---
title: "Moving from LiveJournal to WordPress"
created: 2007-03-19
tags: 
  - archive
  - comments
  - export
  - howto
  - import
  - livejournal
  - wordpress
authors: 
  - scott
---

I'm working on a new site for a local author, and one of the things she wanted was to move her blog from LiveJournal to WordPress. I did a bit of research, and found out that there are a few complications.

1. LiveJournal's export tool will only export a single month of entries at a time.
2. The LiveJournal export file will have all the HTML encoded, meaning images and links won't work.
3. WordPress's LiveJournal import tool won't import comments.

However, thanks to a third-party LiveJournal export tool called [ljArchive](http://www.fawx.com/ljArchive/), I was able to get all the posts and comments exported in one file.

With that problem out of the way, I did a bit more looking and discovered that Vinit Bhansali has created a [modified version of WordPress' LiveJournal import script](http://www.bhansalimail.com/wordpress_import-livejournal.php) that decodes the HTML entities, and adds support for comments.

I was really excited to have solved my problem, and then I noticed that his notes say his script was tested in WordPress 1.5. Given that WordPress is currently at version 2.1, I wondered if his changes had maybe been incorporated into the latest version.

Happily, they have been! I'm pleased to say that I was able to use the stock WordPress LiveJournal import tool to import all the posts and their comments, and all the images and links still work.

So if you're making the switch, you **should still use ljArchive** to get all your posts out at once, but you **don't need any modified WordPress scripts** to import them, because the standard one works fine.
