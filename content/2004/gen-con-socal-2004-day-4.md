---
title: "Gen Con SoCal 2004 - Day 4"
created: 2004-12-03
tags:
  - work
authors:
  - scott
---

Around 6pm last night, credit card authorizations stopped working. This is a huge deal, because it means that about half the people coming up can't pay, and we can't process any refunds to people who paid by credit card.

Standard Operating Procedure in these cases is to establish the cause of the problem as quickly as possible. There are four components to the system that need to be checked. The software we wrote, the server running the software, the network the server is hooked into, and our connection to Verisign, the company that verifies credit cards for us (and most of the rest of the world).

Anyways, as you can imagine, no one wants to be to blame, so our programmer is assuring me that it's not the software, because everything else it does works fine, and nothing has changed from earlier, when it worked fine. Our sysadmin is assuring us that it's not the server, and the network guys are assuring us that it's not the network, so I asked our programmer to also check our connection to Verisign.

Bingo. All the errors are things like "the connection timed out" or "host not found", which all indicate that we can't find Verisign. So we decide to hit Verisign's website to get a number to call - and their website is down.

I'm not sure how much this means to you, but you have to understand that a MAJOR company like Verisign just doesn't crash like this. They have multiple redundant setups, and if one goes down, it seamlessly goes over to another. So it's fairly hard to beleive that their website (and credit card authorizations) are down, and have been for more than ten minutes now.

Unable to find any other contact info, our sysadmin looked up Verisign in other countries to try to find contact info. On a whim, he used his laptop to call Australia, because they were up, and it was the only number we could find.

After going through the usual phone tree (but with an australian accent), we finally got through to a very nice sounding woman, who told that, yes, Verisign was having problems in their American branches, and it looked like it was starting to affect the rest of the world too.

The specific phrase she used was "It's spreading faster than we thought."

Anyways, she gave us an 800 number to call for American tech support. When we called, we got an automated response that was something like this:

"We are currently experiencing a higher-than usual call volume"

Really? I can't imagine why. Perhaps because almost everyone verifies credit cards through Verisign, so every business everywhere is calling at once?

"Due to call volume, we will not be able to answer your call right now. If you require technical assistance, please send an email to..."

Yeah, except their server is down, so they won't get that email.

Anyways, we were all pretty much in shock. While it was nice that it wasn't anyone's fault on our side, the fact is that credit card verification was still down, and there was absolutely nothing we could do except wait.

It finally came up again about an hour later, and common opinion around the tech geeks here is that Verisign was being attacked with a Denial-of-Service-Attack.

Aside from that, yesterday was smooth and deadly, and I spent the whole day in the game lan playing my new copy of World of Warcraft (full post on that coming later).
