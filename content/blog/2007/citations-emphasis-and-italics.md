---
title: 'Citations, Emphasis and Italics'
date: 2007-07-25
tags:
  - citations
  - css
  - debate
  - emphasis
  - italics
  - markup
  - standards
authors:
  - scott
---

Wanna get a headache? Go type "[html book titles italic em](http://www.google.com/search?q=html+book+titles+italic+em)" into Google and read for about 15 minutes. What you're looking at is an intense debate over the best way to mark up a book title using HTML. I'll save you some time and tell you that after several hours, my conclusion is that you should use the `<cite>` element for book titles. If that's all you need, then feel free to save yourself the trouble of reading the rest of this, but if you're curious about the logic, read on for an explanation.

Let's start at the beginning. Most style guides, [including MLA](http://www.mla.org/style/style_faq/style_faq2), recommend italicizing book titles. (MLA says italics or underlines, but given that underlines represent hyperlinks, we'll stick to italics). So the easy way to italicize something is with the Italic element, like so: `<i>Moby Dick</i>`

However, current standards say that we should separate presentation from content wherever possible by using semantic markup. The `<i>` element certainly qualifies, because a non-visual browser wouldn't know what to do with italic text - In fact, it's probably being deprecated in the next version of XHTML. The logical replacement is `<em>`, which also renders as italic text in visual browsers, but gives some flexibility to non-visual browsers to emphasize the text as they see fit. Lynx, for example, underlines the text, while a screen reader like Jaws would use verbal emphasis.

It's not as simple as that, however, as this quote from the [Wikipedia discussion page for the Manual of Style](<http://en.wikipedia.org/wiki/Wikipedia_talk:Manual_of_Style_(text_formatting)>) can attest:

> I am reverting the merger of italics and emphasis. Italics are used for emphasis, but not all things are italicized for emphasis, and I find it confusing. Books are put in italics not to emphasize them but to let you know you are looking at the title of a book. The meaning is _New York Times_ not "New York Times!".

An excellent point. We're not really trying to emphasize our book title. So is there a more semantic element we can use? Turns out, there is. The `<cite>` element, which has been around for quite awhile, but is frequently misunderstood. The confusion, and the reason I think most people are reluctant to use this element, is because the [HTML 4.01 specification](http://www.w3.org/TR/html401/cover.html) says the `<cite>` element should contain "a citation or a reference to other sources." [\*](http://www.w3.org/TR/html401/struct/text.html#h-9.2.1) Even more confusing, the `<blockquote>` element has a `cite` attribute, which is "intended to give information about the source from which the quotation was borrowed." [\*](http://www.w3.org/TR/html401/struct/text.html#edef-BLOCKQUOTE)

As a result, many people are confused about the purpose of this element, and don't consider it because all they're trying to do is label something as a book title, not cite an external reference.

However, if you dig back a bit further, you'll discover that the [HTML 2.0 specification](http://www.w3.org/MarkUp/html-spec/html-spec_toc.html) says the `<cite>` element "is used to indicate the title of a book or other citation." [\*](http://www.w3.org/MarkUp/html-spec/html-spec_5.html#SEC5.7.1.1) Similarly, the [XHTML 2.0 Draft](http://www.w3.org/TR/xhtml2/) shows examples of using the cite element to mark up a book title. [\*](http://www.w3.org/TR/xhtml2/mod-text.html#edef_text_cite)

So clearly, the cite element is the best choice for semantic reasons. As [Dan mentions on SimpleBits](http://www.simplebits.com/notebook/2003/09/25/simplequiz_titles_conclusion_sort_of.html), and [Tim expands on in his blog](http://tjameswhite.com/blog/archives/2005/07/semantic-markup-microformats/), you can expand its usefulness by adding CSS classes. For example, you could markup a book title as `<cite class="book">Moby Dick</cite>` and a magazine as `<cite class="magazine">Wired</cite>`, and then style them differently, per the MLA style guide.

There's a bit more room for debate on the topic of whether the `<em>` element should entirely replace the `<i>`. The HTML working group seems to be leaning towards doing so, as the XHTML 2.0 spec doesn't include any mention of the `<i>` element. However, even if XHTML 2.0 is not backwards-compatable, it's a reasonable assumption that the browsers will continue to be, so it's probably safe to keep using `<i>` for instances where you want to italicize text without emphasizing it. Personally, I follow this guideline that I found in a [debate on this topic](http://www.webmasterworld.com/forum21/9344.htm) on Webmaster World:

> I use `<em>` for emphazised text, `<cite>` for titles of books, movies etc., `<i>` for foreign words and phrases, lawsuits (Brown v Board of Education) and names of ships, aircraft etc. (USS Enterprise).
