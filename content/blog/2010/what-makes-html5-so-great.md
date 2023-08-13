---
title: 'What Makes HTML5 so Great?'
date: 2010-10-04
categories:
  - professional
tags:
  - guidelines
  - html5
  - principles
  - w3c
authors:
  - scott
---

[![HTML5 Design Principles](/images/5042475807_3de47b47cf.jpg)](http://www.flickr.com/photos/spaceninja/5042475807/ 'HTML5 Design Principles by spaceninja, on Flickr')

When the W3C started working on HTML again in 2007, they posted a set of [guiding principles](http://www.w3.org/TR/html-design-principles/) for the new version, emphasizing compatibility, utility and interoperability. I'd like to highlight four of these principles that I think are especially important.

1. Support existing content
2. Degrade gracefully
3. Pave the cowpaths
4. Priority of Constituencies

In the process, I'll explain why HTML5 is not just the latest version, but represents a fundamental shift in the philosophy behind HTML.

### 1\. Support Existing Content

> “It should be possible to process existing HTML documents as HTML5 and get results that are compatible with the existing expectations of users and authors, based on the behavior of existing browsers.”
>
> — _W3C HTML Design Principles_

Another way to put this is backwards-compatibility, and it almost didn't happen this way. Without getting into [too much detail](http://diveintohtml5.org/past.html), in the late 90s, the W3C was concerned that HTML was too forgiving of markup errors, and began shifting focus from HTML to the more draconian XML.

However, the browser vendors and web development community didn't like the new direction, and formed a new group to evolve HTML. In 2006 the W3C admitted that they were wrong, and that they would work with the new group on HTML5,

As a result, one of the core principles of HTML5 represents the conclusion of nearly a decade of debate and politics into the simple idea that a new standard shouldn't break existing websites.

### 2\. Degrade Gracefully

> “HTML5 should be designed so that Web content can degrade gracefully in older or less capable user agents, even when making use of new elements, attributes, and APIs.”
>
> — _W3C HTML Design Principles_

HTML5 includes several new types of form inputs, including phone numbers, URLs, and search. Modern browsers that support the new types deliver an enhanced experience, while older browsers treat them as plain text inputs.

This sort of progressive enhancement is not possible for every new feature, but codifying this ideal demonstrates the commitment to backwards compatibility.

### 3\. Pave the Cowpaths

> “When a practice is already widespread among authors, consider adopting it rather than forbidding it or inventing something new.”
>
> — _W3C HTML Design Principles_

HTML5 allows you to use either HTML style (`<br>`) or XHTML style (`<br />`) markup. Both approaches will validate, and which you use is a matter of preference.

It would have been easy enough to say "We're back to HTML now, so XHTML syntax isn't valid anymore," but allowing both styles encourages more people to follow the spec.

### 4\. Priority of Constituencies

> “In case of conflict, consider users over authors over implementors over specifiers over theoretical purity. In other words costs or difficulties to the user should be given more weight than costs to authors.”
>
> — _W3C HTML Design Principles_

Finally, we have the priority list. Sounds like common sense, but since the vendors are part of the groups that draft the specs, they had a larger voice than we did. This guideline reminds the authors that they ultimately answer to the users, not the vendors. After all, if nobody follows the spec, it doesn't matter if any browsers support it.

\* Illustration by [Dale Stephanos](http://www.drawger.com/dalestephanos/?article_id=9643)

**Note:** This was originally posted on [my work blog](http://metaltoad.com/blog/scott), and I'm re-posting it here for archival purposes.
