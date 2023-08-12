---
title: "The Damn Server II"
created: 2004-04-30
tags:
  - hate
authors:
  - scott
---

So I managed to boot the server off the FreeBSD 4.9 boot disks I made, and I tried to start the upgrade procedure (hoping to salvage as much of the existing configuration as possible). Sadly, it looks like the upgrade procedure simply isn't going to work.

1. When sysinstall starts, I get a ton of error messages about devices not being found (things like firewire drives and gigabit ethernet cards, which the server doesn't have).

2. Once sysinstalls starts, the upgrade option gives the following error:

> No disks found! Please verify that your disk controller is being properly probed at boot time. See the Hardware Guide on the Documentation menu for clues on diagnosing this type of problem.

So... yeah. I tried googling for the error, but I didn't find much of anything. I also can't find anything explicitly labelled a "Hardware Guide" anywhere. There's one on the docs menu in sysinstall, but it won't open (maybe because it's just the floppy?).

I'll try to get Miles over here at some point to get a second opinion to make sure I haven't missed anything obvious, but it looks like the next step is to actually format the disk and reinstall FreeBSD - A task I'm not sure I'm up for.

The server's future looks more and more grim every day.
