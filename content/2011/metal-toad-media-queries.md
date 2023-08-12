---
title: "How we made the Metal Toad site more mobile-friendly with media queries"
created: 2011-03-31
categories: 
  - professional
tags: 
  - css
  - css3
  - mediaqueries
  - mobile
  - responsive
authors: 
  - scott
---

There's been a lot of buzz lately about [Responsive Web Design](http://www.alistapart.com/articles/responsive-web-design/), and in particular about CSS3 Media Queries. When our CEO recently asked me to make our site easier to view on his mobile phone, I jumped at the chance to retrofit our fixed-width layout using these new techniques.

In a nutshell, media queries allow you to define alternate styles that are applied to certain screen sizes. The obvious example is to pass a mobile stylesheet to small screens, and your regular stylesheet to large screens.

## Modifying an Existing Site

If I were to start from scratch, I would probably create the mobile/small screen version of our site first, and then use media queries to pass in alternate layouts for increasingly larger screens. However, we already had a fully functional site, and I chose to use media queries to set up layouts for smaller screens instead.

I ended up adding three alternate layouts for our site:

- **0-520px** - Single column, fluid-width layout using all available horizontal screen space. This layout was optimized for the 320px width of the iPhone.
- **520-760px** - As soon as the screen got wide enough for our standard main content width (500px, plus some padding), I switch to a single column, fixed-width layout. Again, this was to capitalize on our existing styles, which were based on a fixed width.
- **760-960px** - Once we hit 760px, I switch to a two column, fixed-width layout, which is basically our existing layout with less padding. This layout was optimized for the iPad's 768px width.
- **960px+** - Once we hit 960px, it switches back to the existing layout.

The code for all this is pretty simple:

\[css\] @media only screen and (max-width: 519px) { /\* Single Fluid Width Column (iPhone) \*/ }

@media only screen and (min-width: 520px) and (max-width: 759px) { /\* Single Fixed Width Column \*/ }

@media only screen and (min-width: 760px) and (max-width: 959px) { /\* Two Fixed Width Columns, Medium Padding (iPad) \*/ }

@media only screen and (min-width: 960px) { /\* Two Fixed Width Columns, Large Padding (Desktop) \*/ } \[/css\]

You can [view our media queries stylesheet](http://www.metaltoad.com/sites/all/themes/metaltoad/css/media.css) if you want to see more details.

## IE Support

Media queries are not supported in anything below IE9. To get around this, you'll need to either include a [javascript file](http://code.google.com/p/css3-mediaqueries-js/) that adds support to older browsers, or use IE conditional comments to load any layout changes you want.

Personally, I prefer the javascript approach, since that keeps IE working like the other browsers, but if you don't want to rely on javascript, you'll need to either use conditional comments or just leave IE out of your responsive web design world -- as long as they get the default desktop styles, maybe it doesn't matter?

## iPhone Support

Although the iPhone has a native resolution of 320px, by default it loads your site as if it had a resolution of 980px, and zooms out to fit the whole page on screen as if you were viewing it on a desktop. Then you can tap-to-zoom on the parts you're interested in. To get the iPhone to use its native screen resolution, you need to add the following meta tag:

\[html\]<meta name="viewport" content="width=device-width">\[/html\]

Note however, that both the iPhone and iPad use the same device-width regardless of orientation. That is, the site will display at 320px in portrait mode, and still in 320px in landscape mode -- but will appear larger, since the screen is wider. There's no way around this that I know of.

For more information, see the [Safari Web Content Guide](http://developer.apple.com/library/safari/#documentation/AppleApplications/Reference/SafariWebContent/Introduction/Introduction.html).

## To the Skeptics:

"This isn't really Responsive Web Design! Ethan Marcotte says '[media queries alone do not a responsive design make](http://jeffcroft.com/blog/2010/aug/06/responsive-web-design-and-mobile-context/#c166264).' You also need fluid images and a fluid layout grid!"

Yes, you're right! The changes we made are a great example of how you can use media queries to dramatically improve the mobile experience with very little effort -- but to make a truly responsive web design, we would need to make more changes than just tweak the layout based on viewport width.

"You haven't **really** made a mobile version of your site, because they [still have to download all your images](http://www.cloudfour.com/css-media-query-for-mobile-is-fools-gold/)."

Again, guilty as charged. Our goal wasn't to make a full-fledged [mobile experience](https://twitter.com/#!/zeldman/status/52522842591473664), it was to invest a small amount of time to improve the experience of the mobile user. Yes, given more time, we would address some issues on the back-end to keep large images from downloading for mobile users in the first place, but our site is fairly lightweight to begin with, so it wasn't really worth the time it would take to mess around with that stuff. We may revisit the issue in the future, however. Also, just to play devil's advocate, Jeremy Keith pointed out that it's a [bad assumption](http://adactio.com/journal/4443/) that mobile devices always have limited bandwidth and desktops always have plenty.

If you have any thoughts on responsive web design or media queries, we'd love to hear them. Also, check out the site on your favorite mobile device, and let us know how it looks (screenshots would be awesome!).

#### References

- [Responsive Web Design](http://www.alistapart.com/articles/responsive-web-design/) by Ethan Marcotte
- [The Practicalities of CSS Media Queries, Lessons Learned](http://blog.bloop.co/the-practicalities-of-css-media-queries-lesso) by Sam Collins
- [Safari Web Content Guide](http://developer.apple.com/library/safari/#documentation/AppleApplications/Reference/SafariWebContent/Introduction/Introduction.html)
- [css3-mediaqueries.js](http://code.google.com/p/css3-mediaqueries-js/) - Javascript library to add media query support to older browsers.
- [Combining Meta Viewport and Media Queries](http://www.quirksmode.org/blog/archives/2010/09/combining_meta.html) on QuirksMode
- [Example Media Queries](http://stuffandnonsense.co.uk/blog/about/hardboiled_css3_media_queries) - a boilerplate media query set by Andy Clarke

**Note:** This was originally posted on [my work blog](http://metaltoad.com/blog/scott), and I'm re-posting it here for archival purposes.
