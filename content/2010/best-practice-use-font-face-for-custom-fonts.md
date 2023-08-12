---
title: "Best Practice: Use @font-face for Custom Fonts"
created: 2010-06-23
categories: 
  - professional
tags: 
  - font-face
  - bestpractices
  - css
  - cufon
  - fonts
  - html
  - sifr
  - typography
authors: 
  - scott
---

_I just wrote the following for our marketing team to understand how to sell font solutions to our clients. If you have any feedback, I would love to hear it in the comments section!_

When a client’s design calls for a custom font in the headlines, there are a variety of solutions we can recommend, ranging from sIFR to image replacement. Each solution (detailed below) offers advantages and disadvantages, so the correct choice may vary from client to client. In general, however, @font-face will provide the best long-term solution and ease of development.

## @font-face

CSS3 adds the ability to serve a custom font from the server. It works beautifully, and is well supported in modern browsers\*, including IE6+, FF3.5+, Safari 4+, and Chrome 4+. This is the way custom fonts **should** be handled. That said, there’s one barrier to adoption: Since the font is hosted on the server, you must have a font that is licensed by the foundry (the company that made the font) for web use. There are many free, open-source\* fonts available, and a growing library of fonts that can be licensed\* directly from the foundry. The cost for a web license (which is frequently separate from the regular cost of the font) ranges widely depending on the foundry.

We encourage our clients to use this method, despite the extra cost, as it is legal, accessible, requires no extra development time, and is the most future-proof solution. Compared to @font-face embedding, every other solution listed here will cost extra (in the form of development time). By purchasing the font license, they are supporting the foundry that made their font, and making their website more adaptable for future edits.

Additionally, for any advanced font styling such as gradient fills, drop-shadows, glows, backgrounds, etc., @font-face is the only solution. You simply cannot recreate these advanced CSS styles on dynamic headlines through sIFR or cufón.

**Pros:** native font rendering, accessibility, graceful degradation, and advanced font-styling through CSS.

**Cons:** must use an open-source font, or purchase a license for a commercial font.

**Cost:** just the cost of the font license. no extra development cost.

## TypeKit

Typekit is essentially a hosted version of @font-face. It handles the font licensing and embedding for you, in exchange for a subscription fee. As long as the font(s) the client wants are available in their library (which is pretty large and incorporates several large foundries), this is a very good solution for a very reasonable cost, which could be rolled into the ongoing budget for hosting. The only real downside is that it requires javascript and since it’s a hosted solution, you’re relying on another company’s uptime. I haven’t heard of any issues with Typekit’s uptime, but it’s worth noting.

**Pros:** handles all the @font-face embedding and licensing for you. Likely cheaper than a license direct from the foundry.

**Cons:** requires javascript and yearly subscription fee. if typekit goes down (not likely to happen), then the client’s fonts are unavailable.

**Cost:** depends on website traffic – ranges from $25 to $99/year

## sIFR – not recommended

sIFR is a dynamic flash-replacement technique which uses javascript to target certain headlines on the site (eg, all H2s, or all H4s in the sidebar). It reads the text, calculates the dimensions the HTML headline would have occupied, and replaces it with a flash movie that renders that headline’s text in the client’s font. This was the most popular method before @font-face came along, but the project is dead in the water now, and hasn’t been updated since October 2008. It’s difficult to implement, though it’s still a decent solution due to the built-in graceful degradation – users without Flash or JS will see the regular HTML headlines, not a broken flash movie. This is also the only dynamic solution that doesn’t require a license from the font foundry.

**Pros:** graceful degradation, widespread flash adoption, and legal to use with any font.

**Cons:** complicated and limited. Basic text replacement works great, but more complicated things like nested styles within the headline are difficult or impossible. Project is no longer being developed, and is poorly supported.

**Cost:** At least 3 hours of front-end development PER headline style, and further QA, since the site now has to be tested with and without flash.

## cufón – not recommended

Intended as a replacement for sIFR, cufón uses javascript instead of flash to dynamically replace headlines. It’s easier to set up, but has some serious accessibility concerns, and may not be legal to use without a license from the foundry – and if you have a license, you might as well use @font-face instead.

**Pros:** less complex than sifr

**Cons:** accessibility concerns, and since the font isn’t embedded in flash, it may not be legal unless you have a license from the font foundry.

**Cost:** At least 3 hours of front-end development PER headline style, and further QA, since the site now has to be tested with and without javascript.

## Image replacement – not recommended

Using CSS, we replace individual headlines with images containing that headline set in the client’s font. This solution is time-consuming and difficult to edit, but works well on sites with a small number of headlines that don’t need to be edited very often.

**Pros:** gives the client exactly what’s represented in the comp.

**Cons:** requires lots of image production time to create every headline image, and corresponding CSS production time to write code to replace all those headlines with their images. Making edits in the future is difficult, because someone will need to make a new image and edit the CSS. Likely impossible to implement in a dynamic CMS like Drupal.

**Cost:** 10 minutes per headline, minimum.

## Use native fonts instead – not recommended

This isn’t really a solution, since it doesn’t use the client’s font. I’ve just included it for completeness’ sake. This approach means that we ignore the custom fonts and use one of the limited set of “native” fonts instead. In practice, this means using Arial for sans-serif fonts and Georgia or Times New Roman for serif. If the client’s font isn’t very distinct, then this can be a good choice.

**Pros:** requires no development time at all.

**Cons:** does not use the client’s font.

**Cost:** none.

### Further reading:

- [CSS3 support chart, including @font-face](http://www.findmebyip.com/litmus/)
- [List of free, open-source fonts](http://www.fontsquirrel.com/)
- [TypeKit](http://typekit.com/)
- [hExample font foundry web fonts](http://www.fontshop.com/fontlist/n/web_fontfonts/)
