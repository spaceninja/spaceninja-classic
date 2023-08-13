---
title: 'If you’re interested at all'
date: 2003-02-19
authors:
  - scott
---

If you're interested at all in trying to filter your spam out of your email, you should go read the article "[A Plan For Spam](http://www.paulgraham.com/spam.html)" by Paul Graham. The technique he describes is called Bayesian Filtering. It works by having the user flag their emails as spam or not-spam. Then the software learns what common tokens (a token is usually a single word, but can be just about anything, including information in the email headers) appear in both the spams and the non-spams. So if an email contains "lolita" or "ff0000", the filter can be reasonably sure it's a spam. If it contains both tokens, it can be very sure. And the opposite is true as well. So when the software scans over all the emails in your inbox and compares all the tokens, it ends up with a percentage likelyhood that an email is spam, and you can filter based on that.

Mozilla 1.3b has already implimented Bayesian Filtering, and there are free filtering programs available for other programs like Outlook as well.

But even if you don't want to use one of these filters, the article is fascinating to read and understand a little more about how we can fight spam, and even how you could build your own spam filter just using keyword recognition, a feature every email client I've ever used has included (even Pine!).
