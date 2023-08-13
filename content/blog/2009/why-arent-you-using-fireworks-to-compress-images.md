---
title: "Why Aren't You Using Fireworks to Compress Images?"
date: 2009-02-19
tags:
  - compression
  - creative
  - design
  - filesize
  - fireworks
  - images
  - photoshop
  - software
authors:
  - scott
---

I'm sure you've all heard the Fireworks vs. Photoshop debate. When I started at Pop Art, I was a Photoshop user. It was the application that we were taught in my graphic design program, and when I found out that the creative team used Fireworks, it took quite awhile for them to convince me that [Fireworks is better](http://www.google.com/search?q=fireworks+vs+photoshop) for the kind of work a web agency does. Over time, I became a convert, but recently I had an experience that cemented Firework's status for me.

[![Overlay - Photoshop JPG](/images/3289084990_f8a696578b.jpg)](http://www.flickr.com/photos/popartinc/3289084990/ 'Overlay - Photoshop JPG by popartinc, on Flickr')

What you see here is an element from a design we were working on recently. This image is from a slideshow that will feature 10 or more slides, each with their own background image. The images measure 960×510 pixels. Naturally, filesize is a concern. If each image measures 200 kB, we could be looking at 2 MB being downloaded just for the slideshow photos!

To make matters worse, the black box you see overlaying the photo (which will contain promos and other text) is slightly transparent, and doesn't cover the entire bottom of the photo, leaving a little strip of photo running down the sides.

There's two reasonable ways to achieve that effect. Ideally, you make the overlay a separate transparent PNG that sits on top of the photo using CSS. However, given the filesize concerns we had, I was willing to consider the slightly uglier approach of making the overlay part of the actual photo if it would save us some filesize.

Because we weren't sure what would give the best filesize results, we set up a series of tests using various compression methods. You can see the results in the following tables.

### Photo Only

| Method                                                                    | Settings                                                      | Filesize |
| ------------------------------------------------------------------------- | ------------------------------------------------------------- | -------- |
| [Fireworks Selective](http://www.flickr.com/photos/popartinc/3289085956/) | Save as: JPG, 80% quality, 40% selective quality, 2 blur      | 84.3 kB  |
| [Fireworks](http://www.flickr.com/photos/popartinc/3288269585/)           | Save as: JPG, 80% quality, 2 blur                             | 98.5 kB  |
| [Photoshop](http://www.flickr.com/photos/popartinc/3289085094/)           | JPG, 7 quality, baseline optimized                            | 133.7 kB |
| [Photoshop Optimized](http://www.flickr.com/photos/popartinc/3288268321/) | Save for Web & Devices: JPG, 80% quality, optimized, .25 blur | 220.3 kB |

### Overlay Included

| Method                                                                    | Settings                                                      | Filesize |
| ------------------------------------------------------------------------- | ------------------------------------------------------------- | -------- |
| [Fireworks](http://www.flickr.com/photos/popartinc/3289086370/)           | Save as: JPG, 80% quality, 2 blur                             | 80.5 kB  |
| [Fireworks Selective](http://www.flickr.com/photos/popartinc/3288269127/) | Save as: JPG, 80% quality, 40% selective quality, 2 blur      | 79.1 kB  |
| [Photoshop](http://www.flickr.com/photos/popartinc/3289084990/)           | JPG, 7 quality, baseline optimized                            | 111.2 kB |
| [Photoshop Optimized](http://www.flickr.com/photos/popartinc/3289085056/) | Save for Web & Devices: JPG, 80% quality, optimized, .25 blur | 179.5 kB |

What we immediately noticed was that using Fireworks resulted in a dramatic decrease in filesize. I had expected Photoshop and Fireworks to be somewhat comparable, but there are some compression tricks built into Fireworks that Photoshop just can't compete with, even using their "Save for Web" options. In fact, the "Save for Web" files usually came out larger than the straight "Save as" versions!

But what really saved the day was when we found out about a feature of Fireworks called [Selective JPG Compression](http://help.adobe.com/en_US/Fireworks/10.0_Using/WS4c25cfbb1410b0021e63e3d1152b00d6af-7fe4.html) (follow that link for instructions). It's intended to let you use less compression on areas of your image containing text, but we could reverse the effect to more highly compress the area that will be covered by the overlay! The results were quite dramatic. On most of our images, we were able to get them down to around 80 kB by using selective compression.

Looking at the tables, you'll notice that there's a rough tie for smallest filesize between the plain photo with selective compression, and the two versions with the overlay included, all from Fireworks. Since the final filesize was so close, we ended up going with the plain photo to allow a slightly cleaner CSS approach to page layout.

Another surprise was that the Fireworks photos with the overlay included were roughly the same filesize, regardless of whether we used selective compression. Clearly, there's some sort of optimization that Fireworks can take advantage of due to the large field of black.

The conclusion is unavoidable. If filesize is a concern, you should absolutely save your images from Fireworks, rather than Photoshop. You could cut your bandwidth nearly in half!

**Note:** This was originally posted on [my work blog](http://blogs.popart.com/scott-vandehey/), and I'm re-posting it here for archival purposes.
