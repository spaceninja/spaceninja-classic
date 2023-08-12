---
title: "DNS is confusing"
created: 2004-04-06
tags:
  - web-development
authors:
  - scott
---

So I'm finally getting around to fixing the mess that Steve left when he abandoned the server. The main problem seems to be the DNS records are all messed up. All my domains have ns.fojar.com and monkeyland.thingsihate.org listed as the primary and secondary nameservers, respectively. This meant that when people tried to access one of my domains, they would end up on fojar, which was our server, so it worked out perfectly. However, when Steve left, he took the fojar domain with him, but didn't fix any of the nameserver stuff.

So not only do all my domains still point to ns.fojar.com, the server I have (which used to be fojar, but is now spaceninja) is still configured to think it's ns.fojar.com, even though it's not.

To be honest, my understanding of the whole DNS operation is not perfect. I've been reading a lot about it online, but it's all pretty technical, and a lot of it is over my head.

Still, if I'm understanding it right, this should have started causing problems a long time ago. Appearently, the only reason it didn't is because everyone's records for ns.fojar.com still point to spaceninja's IP address. (Maybe Steve never set up the ns.fojar.com thing on his new server?)

So my goal seemed clear. Update everything to ns.spaceninja.com, and there will be no problems.

Of course, nothing is ever that simple. I must have spent four hours poring over all the DNS stuff on spaceninja the other day before I even came close to being confident about how to set everything up, and I'm still not sure that I did it correctly.

Appearently, ns.spaceninja.com (and ns.fojar.com) is not really a subdomain, except for through the nameserver configuration. If I did everything right, then spaceninja now is doing nameserver operations at ns.spaceninja.com - but all the test utitlities I've found online have redirected ns.spaceninja.com through monkeyland.thingsihate.org - which no longer exists.

So - I don't know if my problem is that I didn't fix everything correctly, and spaceninja's nameserver config is not doing the whole ns.spaceninja.com thing, or if the problem is that in order to get out the new records on spaceninja.com having an ns.spaceninja.com record, that has to be updated through a nameserver, which is now pointing at itself, which causes a loop and doesn't work.

What this all boils down to is that I'm in way over my head. I don't even know what specificially is broken, let alone how to fix it, and I've got several users sending me emails asking me why certain things aren't working. These may or may not be related to the DNS problems - again, the questions they are asking are just over my head.

As much as I hate to say it, I think part of the problem is that I'm working with Steve's configuration. Every tutorial I can find on the internet is based around creating a new setup, but I'm working with an existing and highly customized setup... It's a lot like jumping out of a moving boat to learn how to swim.

The frustrating realization for me is that I may just have to admit that I don't know what the hell I'm doing, and I may be doing more harm than good... I may have to change all my domains to get their nameservices from joker.com and tell all the people using the server that they're out of luck.

Ugh. This is frustrating for me because I'm not a dumb person, and I've always been capable of learning what I need to do with computers - but I'm just stuck in a situation where I need to know way more than I can possibly learn in my spare time on weekends.

I don't like admitting that technical stuff is over my head, because I know that given the time and resources, I could definitely learn this stuff. But after hours spent searching the internet for meaningful tutorials on sysadmin stuff, separating out the cruft, and then trying to absorb all the new information, which is often conflicting, I can barely see straight.

I do not want to spend every waking minute trying to keep this server alive.

But I also don't want to give up my websites - and most ISPs don't give you the level of access (with PHP and MySQL priviledges) that I'm looking for.

I'm afraid that the day is coming when I'm going to have to make a choice between the server and my happiness, and that the server is going to lose.
