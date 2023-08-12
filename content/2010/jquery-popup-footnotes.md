---
title: "jQuery Popup Footnotes"
created: 2010-02-05
categories: 
  - professional
tags: 
  - css
  - footnotes
  - howto
  - jquery
  - slidingdoors
authors: 
  - scott
---

A recent site I worked on had footnote references throughout the body copy, and a corresponding list of footnotes at the bottom of the page. That's easy enough to mark up, but the client also wanted the footnote to display it a little tooltip-style popup when you moused over the footnote reference.

I didn't want to duplicate the footnotes in the markup, so I used jQuery to copy the contents of the footnote and display it. Here's the code.

### HTML

\[html\]<div id="content"> <p>Sentence with a footnote<sup><a href="#footnote3">3</a></sup>.</p> </div> ... <div id="footnotes"> <p id="footnote1"><sup>1</sup> This is footnote number one.</p> <p id="footnote2"><sup>2</sup> This is footnote number two.</p> <p id="footnote3"><sup>3</sup> This is footnote number three.</p> <p id="footnote4"><sup>4</sup> This is footnote number four.</p> </div>\[/html\]

Note that the `href` on the footnote reference must match the `ID` on the footnote, so that jQuery can associate them properly. As a bonus, in a non-JS environment, the footnote references will just link down to the proper footnote.

### jQuery

\[js\]// add markup to all footnote references $("sup a").append("<span><em></em></span>"); // on hover, show the popup and add the matching footnote $("sup a").hover(function() { // show the popup $(this).find("span").fadeIn(); // use our href to find the apprpriate content from the footnote list var content = $(this).attr("href"); var content = $(content).html(); // copy the footnote content into the popup $(this).find("span em").html(content).append("<br /><br />All references are listed at the bottom of the page."); }, function() { // hide the popup on mouseout $(this).find("span").fadeOut(); });\[/js\]

This looks much more complicated than it is. In plain english, we add some markup (a span) to each footnote reference, and then use its `href` to find the correct footnote from down below, and copy its content into the span we just created. Then we show and hide the span when the user hovers over the footnote reference.

### CSS

\[css\]sup a { position: relative; } sup a span { display: none; /\* hidden by default \*/ width: 294px; height: auto; position: absolute; left: -125px; bottom: 1em; /\* sliding door background image - bottom half on span, top half on em \*/ background: transparent url("/images/bg-footnote-bottom.png") no-repeat left bottom; padding-bottom: 13px; cursor: default; z-index: 999; text-decoration: none; /\* other wise, this is underlined like a link \*/ } sup a span em { display: block; font-style: normal; background: transparent url("/images/bg-footnote-top.png") no-repeat; padding: 20px 10px 15px 20px; }\[/css\]

Nothing complex here. We're using a vertical [sliding doors](http://www.alistapart.com/articles/slidingdoors/) technique to allow the background on the popup to grow to accommodate varying amounts of text. The only other hiccup is to remember to override your link styles within the span, since the browsers will treat your popup as part of the link.

You can see a version of this code in action [over here](http://www.stretchmarkstv.com/).
