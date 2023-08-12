---
title: "New York Times Claims HTML5 is a \"Pandora's Box\" of Privacy Risks"
created: 2010-10-11
tags: 
  - evercookie
  - hakonwiumlie
  - html5
  - newyorktimes
  - pamdixon
  - privacy
  - samykamkar
  - security
authors: 
  - scott
---

Alarmist rhetoric from news organizations about the web is nothing new, but today's front-page headline on the New York Times still caught my eye: "[Web Code Offers New Ways to See What Users do Online](http://www.nytimes.com/2010/10/11/business/media/11privacy.html?pagewanted=all)." It's about HTML5 privacy risks, and it's a load of crap.

In the author's rush to scare her readers, she picked the wrong target. The article claims HTML5 will make it easier for advertisers to gather information about you. Through context it's clear that the cause of concern is the [web storage](http://dev.w3.org/html5/webstorage/) specification (which isn't actually part of HTML5, but we'll let that slide). The only real-world example of a privacy risk presented is "[evercookie](http://samy.pl/evercookie/)," a persistant tracking cookie that is very difficult to delete. Evercookie is a legitimate security concern, and if the article had focused on that it would have been fine, but by putting HTML5 in the crosshairs it completely misses the point.

Here's what the article has to say about how HTML5 will allow advertisers to track you:

> The technology uses a process in which large amounts of data can be collected and stored on the user’s hard drive while online. Because of that process, advertisers and others could, experts say, see weeks or even months of personal data. That could include a user’s location, time zone, photographs, text from blogs, shopping cart contents, e-mails and a history of the Web pages visited.

Assuming the article is referring to the web storage specification, this is all true -- but you can also do all of this today, using existing tools. This is not some insidious new security threat that HTML5 introduces.

Hakon Wium Lie, the CTO of Opera, attempts to tone things down by pointing out that HTML5 "gives trackers one more bucket to put tracking information into." One more -- as in, the trackers already have many buckets. However, his quote is immediately followed by Pam Dixon of the [World Privacy Forum](http://www.worldprivacyforum.org/) -- an organization that, as far as I can tell, consists only of Pam Dixon. She is quoted as saying "HTML 5 opens Pandora’s box of tracking in the Internet," which is a wonderful scare quote, and I'm surprised they didn't use it in the headline.

Even worse is the quote they got from Ian Jacobs at the W3C, who says "This is not a secret cabal for global adoption of these core standards." Ian, I can see where you were going with that quote, but do me a favor. When trying to tone down an attack piece, don't ever use the words "secret cabal," even to say that you're not part of one.

The crown jewel of the article is the section discussing Samy Kamkar, who is breathlessly introduced as having "creating a virus called the '[Samy Worm](http://en.wikipedia.org/wiki/Samy_(XSS)),' which took down MySpace.com in 2005." It goes on to explain that he recently created the evercookie, an extremely persistant cookie that is intended to be difficult to delete. On the [evercookie site](http://samy.pl/evercookie/), Samy explains:

> evercookie is a javascript API available that produces extremely persistent cookies in a browser. Its goal is to identify a client even after they've removed standard cookies, Flash cookies, and others. evercookie accomplishes this by storing the cookie data in several types of storage mechanisms that are available on the local browser. Additionally, if evercookie has found the user has removed any of the types of cookies in question, it recreates them using each mechanism available.

Now, to be fair, the evercookie does take advantage of HTML5 techniques like Web Storage, but this is just one of many storage vectors it takes advantage of. It also uses an Internet Explorer storage feature, PNG files, and Javascript, but you don't see the article fretting over any of those technologies.

Despite all evidence to the contrary, the article attempts to paint Samy as some sort of white hat hacker who's just looking out for the common man by highlighting security risks. Let's ignore the fact that his previous claim to fame was writing a virus that crashed a major website. He goes out of his way to point out that he could have sold the evercookie code to advertisers, but didn't. Instead, he published the technique for free on his website! His argument is that this will provoke the browser vendors to create better privacy tools to combat his cookie.

Well, I'm sorry, but I don't think Samy deserves a pat on the back for this. This is like saying "Hey, I designed this really neat gun that never runs out of bullets, but don't worry! I didn't sell it to our enemies, I just put the plans on my website for anyone to read. Oh, you guys should probably start designing some body armor."

If you can get past the rhetoric in the article, it's clear that the risk to your privacy is real, but it's not from HTML5. It's from guys like Samy Kamkar.

**Note:** This was originally posted on [my work blog](http://metaltoad.com/blog/scott), and I'm re-posting it here for archival purposes.
