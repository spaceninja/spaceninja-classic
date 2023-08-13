---
title: 'ahahah! the counter did get'
date: 2002-08-14
authors:
  - steve
---

ahahah! the counter did get reset!

curse my lack of file-locking. here's what happened: two people loaded the page at near the exact same moment in time. the first person's page-load triggered the script to read in the counter, increment it, and write it out again to the file. the second person's page-load triggered the script to read in the counter at the moment in time when the first person's page-load had partially written it out. et voila!

it was at 30-something, if you want to go and set it back up by hand. (that also tells you the relative likelihood of this happening again - roughly every 30,000 page-views \*smirk\*)
