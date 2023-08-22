---
title: 'For the past three hours,'
date: 2003-01-19
authors:
  - scott
---

For the past three hours, I have been beating my head against Internet Explorer, trying to make it understand that CSS-based layouts are not a bad thing. No luck, so far.

`<boring technical paragraph>`

My problem revolves around the fact that I want to maintain something similar to the old killingmachines.org layout, with a large center column, and two narrow sidebars. Tutorials for making three-column layouts abound, but none of the methods are perfect. [W3C](http://www.w3.org/)'s [three-column redesign](http://www.w3.org/2002/11/homepage) uses a technique that floats all three columns to the left, so they sit against each other. The downfall is that if the content of any of the columns is wider than the space it has, it breaks the design by shoving the broken column down below everything else. [The Noodle Incident](http://www.thenoodleincident.com/)'s [three-column layout](http://www.thenoodleincident.com/tutorials/box_lesson/basic4.html) uses absolute positioning (probably the most popular technique). The disadvantage is that you must know which of your columns will be the tallest, because the absolutely positioned columns will overlap anything below them (I don't know which column will be the tallest on KMorg, because it could be the journal list, or the content column). And [Glish](http://glish.com/) has a neat idea for [floating sidebars](http://glish.com/css/1.asp) inside their parent element, but that really doesn't give you columns, just floating sidebars (I'm picky). I'm starting to get very frustrated. Appearently CSS3 is going to include some code for [fluid columns](http://www.w3.org/TR/css3-multicol/), like you get in page layout programs, but CSS3 is a ways away yet, and even so, I'm not looking for fluid columns. ...I really really want this CSS redesign to work, but I'm starting to get frustrated. If I haven't found a solution in the next hour or so, I think I'm going to give up (for now) and just post a simpler layout that doesn't use sidebars/columns.

`</boring technical paragraph>`

Last night, I went to see _Star Trek: Nemesis_ with Steve, Zach and Daniel. It had its good parts and its bad parts, but on the whole I enjoyed it. Probably the coolest thing was that it was obvious that they had been playing Halo, as we watched Picard roar around the desert in a jeep that looks suspiciously like a warthog, from the bouncy suspension to the mounted gun in the back, fired by a marine Worf. Daniel couldn't resist humming the Halo theme as they tore around shooting aliens on a hostile planet.

Forum5000 development continues. Steve keeps getting bigger ideas in his head. Yesterday, we implimented the messaging feature so you can send notes to other hatelife users, and he's already scheming up a new type of forum to allow you to create comparison lists. And this is after we already brainstormed up a huge improvement to the way post editing and deletion will work.

[See the final results of this design in the archives](/site-archives/kmorg/v4/).
