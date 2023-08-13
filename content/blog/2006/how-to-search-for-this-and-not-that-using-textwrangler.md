---
title: 'How to Search for This and Not That Using TextWrangler'
date: 2006-01-07
tags:
  - boolian
  - computers
  - grep
  - howto
  - regex
  - search
  - textwrangler
authors:
  - scott
---

I've been doing a ton of search-and-replace operations at my job lately, and one of the worst ones I did had to do with searching for the word "Comfort." Unfortunately, this word is absurdly common on this site, and I was getting well over 1000 matches, most of which didn't apply.

Now, the first thing I tried was making the search case-sensitive. The usage of Comfort I'm searching for is used as part of a product title, so it will always be uppercase. I checked the Case Sensitive checkbox, and that eliminated around 300 results, but I was still getting far too many.

The next thing I noticed is that almost every page on the site included the phrase "Home Comfort" as part of the header. This was matching my search, but wasn't something I needed. If only there was a way, I thought, to tell it to search for Comfort, but only return it if it is NOT preceded by the word Home.

TextWrangler to the rescue! _(Note: you can actually do this with just about any search tool that allows boolian or grep-style searches, but I use TextWrangler, so I'm addressing my post to that)_. A quick read through the documentation, and I managed to construct the following search:

```
(?<!Home )Comfort
```

When I checked the Grep Search checkbox, suddenly my search did exactly what I was looking for, and I now have a much more managable set of about 500 results. Hooray for powerful tools!
