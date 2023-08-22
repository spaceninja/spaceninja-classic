---
title: 'How to Make VirtualPC and Synergy Get Along'
date: 2006-11-16
categories:
  - personal
tags:
  - computers
  - howto
  - noteworthy
  - synergy
  - virtualpc
authors:
  - scott
---

[![Virtual PC](/images/298842632_862e1ae7f5_m.jpg)](http://www.flickr.com/photos/spaceninja/298842632/)Recently, I installed VirtualPC on my XP box so that I could still test IE6 after installing IE7. However, I immediately ran into a problem. There is some sort of conflict between the mouse emulation being done in the VirtualPC window, and the mouse emulation being done on my PC to let me use my Mac’s keyboard and mouse via [Synergy](/blog/2006/how-to-use-a-mac-and-a-pc-with-a-single-keyboard-and-mouse/). Lucky for me, there’s an incredibly easy solution to this problem: [Install the Virtual Machine Additions](http://www.theeldergeekvista.com/vista_00014c.htm).

When you get your VirtualPC up and running, there’s an option in the Action menu called “Install or Update Virtual Machine Additions.” This will mount a virtual CD-ROM in your VirtualPC. From there, you can launch the installer like a normal program (or wait for the auto-run). Once you install the program, things should just work. I believe this is because the additions integrate the mouse input between the host machine and the guest machine, instead of forcing the guest to “capture” the mouse. As a result, Synergy can keep control of the mouse without conflicting with VirtualPC.
