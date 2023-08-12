---
title: "jQuery Slide-Down Language Selector"
created: 2010-02-12
categories: 
  - professional
tags: 
  - css
  - howto
  - internation
  - jquery
  - language
  - selector
  - slidedown
authors: 
  - scott
---

A site I worked on recently had an international link, and when the user clicked on it, the whole page was supposed to slide down and reveal a language picker. I found some jQuery to slide the page down, but it relied on the language picker being the first div on the page. For SEO reasons, I didn't want that, so I put the language picker code into the normal site navigation, and then used jQuery to move everything into position. Here's how it works:

### HTML

\[html highlight="2,8,9,10,11,12,13,14,15,16,17"\]<body> <div id="placeholder-regions"></div> <div id="container"> <h1>Page Title</h1> <ul id="utilities"> <li><a href="#">Utility Link One</a></li> <li><a href="#">Utility Link Two</a></li> <li id="util-int"><a href="#">International</a> <div id="util-regions"> <h4>Select Regional Site</h4> <ul> <li><a href="#">Europe</a></li> <li><a href="#">Australia</a></li> <li><a href="#">Deutchland</a></li> </ul> </div> </li> </ul> ... <p>Page content...</p> </div> </body>\[/html\]

Two things to notice here. First, there's a blank placeholder div, which is the first bit of markup inside the `BODY` element. Second, the International code is all included in the regular navigation as an `LI` element. That way, users without javascript still get a functional site, and the search engine spiders can see the most important content, like the headlines, at the top of the page.

Note these two IDs, as well. `#util-int` is the list item that contains the link to show and hide the internation section. `#util-regions` is the div that contains the international section, which we want to show and hide.

### jQuery

\[js\]// scroll the page to display the international section $('#util-int').toggle(function() { $("#util-regions").remove().prependTo("#placeholder-regions").slideToggle('swing'); }, function() { $("#util-regions").slideToggle('swing'); });\[/js\]

This jQuery is pretty compact, but in plain english, what this says is when `util-int` is toggled (clicked), then move `#util-regions` from the navigation into the placeholder `DIV` at the very top of the page, and also show and hide it. The `slideToggle()` code is what shows and hides the international section, and the `remove()` and `prependTo()` code is what moves the code into the placeholder `DIV`.

### CSS

\[css\]#util-int { z-index: 1000; } #util-regions { display: none; /\* hidden by default, will be shown by jQuery \*/ width: 948px; margin: 0 auto; height: 60px; position: relative; } #placeholder-regions { background: #666; }\[/css\]

Some important things to note: `#util-int` has a very high `z-index` value to make sure it appears on top of anything else. `#util-regions` has a width and height, and is `position: relative` so that its contents can be absolutely positioned within, and is also hidden by default (the jQuery will show it later on). `#placeholder-regions` has a background, but no height, padding or margins, so that when we show and hide `#util-regions`, it will collapse gracefully.

You can see a version of this code in action [over here](http://tripwire.com/).
