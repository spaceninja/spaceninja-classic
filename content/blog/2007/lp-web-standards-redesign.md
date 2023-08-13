---
title: 'How Web Standards Made a Better Site for LP'
date: 2007-04-27
tags:
  - accomplishments
  - css
  - design
  - lp
  - redesign
  - standards
authors:
  - scott
---

[![LP Style Refresh](/images/474714800_7659333fb3.jpg)](http://lpcorp.com/)

What started as a simple project with LP to redesign their top-level landing pages quickly grew to encompass [their entire site](http://lpcorp.com/). This brought with it some surprising logistical difficulties, which the [Pop Art](http://www.popart.com/) team overcame through clever use of web standards. The end result is a new look applied across the entire site, with the increased accessibility and search-engine optimization that comes from a web standards solution.

### Objects in Rear-View Mirror may be Larger than they Appear.

When our programmer discovered that the changes we were making to the navigation section would require updating every template in use on the site, it meant that instead of just touching 13 pages, we were dealing with over 40 templates affecting several hundred pages. If we were going to have any hope of coming in on budget, we needed to make our process as efficient as possible.

After discussing our options, we decided that we could dramatically simplify the process by consolidating the templates and converting to web standards. Since most of the templates were only slight variations on a theme, we were able to switch to just three layout templates (for one, two and three column variations), and define all the other variations like splash image and headlines in an XML file that would be parsed into the templates.

### Backwards-Compatible

This gave us a great deal of flexibility while reducing the amount of time we had to spend making changes to templates for the new navigation section. It also meant that our new web standards layout would be applied to every page on the site instead of just the 13 landing pages we were originally targeting. Fortunately, we found an easy way to make the new template backwards compatible.

The 13 landing pages were having their content reworked to web standards code, but all the other pages on the site were keeping their old content, tables and font tags. Luckily, the content well was staying the same width, so we could leave all that hard-coded stuff alone, and it would work just fine. Additionally, all the old pages had a div wrapped around their content that I could use to identify them. After that, it was just a matter of copying their old styles into a new stylesheet called legacy.css, which I included in all the templates.

After prefacing all the old rules with the class of the container div, and making a few tweaks so that the old styles would match the new fonts and colors, we had a bulletproof set of legacy styles that would be completely ignored by the new standards-compliant pages, but would be available for any older content on the site.

### Little Things make a Big Difference

One of the things I found out early on in this project was that even relatively minor changes can have a noticeable impact on the finished project. For example, while I was laying out the template, our lead designer asked me if I could line up the page headline with the bottom of the LP logo. Because they were in separate columns, I hadn’t connected them together, but by putting them on the same baseline, there’s a visual connection between them, so that the page title reads “LP WeatherBest” instead of just “WeatherBest.”

We brought that attention to detail to a debate over what order the source code should be put in – should the search box and top navigation be above or below the main content? What about the email promo? What about the secondary navigation? In the end, we compromised, and put the critical primary navigation and tools above the content, and provided a link to let the user skip to the secondary navigation below the content. Most users won’t even notice this, but for mobile users or disabled users with screenreaders, this can have a big impact on their experience with the site.

We even managed to get sIFR headlines working on the old pages. It took a little work to implement a second set of sIFR rules for the old headline class, but the work paid off. When you visit the older pages on the site and they look and feel just like the new sections, instead of having some alternate headline style, it helps to reinforce the user experience.

### Happy Campers

Due to the dramatically increased scope on the project, I was concerned about how it would be received. We did great work, but would the client be concerned about the breadth of our changes? For that matter, would our own project managers consider the effort a success?

Thankfully, my concerns were unfounded. Our project managers understood that while the scope increased, the work we did was really an investment in the site, which will pay off over time. And every report we’ve heard from the client has been glowing, with our contacts passing along compliments from coworkers and even upper management.

I think what excites me most about this project is that we didn’t set out with the goal of converting LP’s site into a showcase for web standards. We arrived there through honest evaluation of the client’s needs and what approach would most benefit them. At all times, our primary concern was to minimize the impact of our changes and maintain backwards compatibility, and on that measurement, this project was a huge success.

1 Photo originally posted on [flickr](http://www.flickr.com/photos/spaceninja/474714800/).
