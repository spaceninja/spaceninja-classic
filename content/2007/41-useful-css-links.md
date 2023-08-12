---
title: "41 Useful CSS Links"
created: 2007-10-24
tags: 
  - alistapart
  - browsers
  - css
  - design
  - development
  - links
  - markup
  - standards
authors: 
  - scott
---

I was clearing out my bookmarks recently, and noticed that I had a pretty large collection of web development and CSS-related bookmarks that I never refer to any more, but might be useful to people who are just getting started with CSS. So with that in mind, here's a collection of links, and I hope it helps you out!

### Browser Testing

You'll probably be spending a lot of time testing your designs in different browsers. The old-school way to do this is to physically install every browser you might have to test on your computer. That can be a big hassle to maintain, however, and you'll run into trouble trying to keep multiple versions of browsers like Internet Explorer or Safari since they're integrated into the operating system. You can get around this by [installing hacked stand-alone versions of IE](http://labs.insert-title.com/labs/Multiple-IEs-in-Windows_article795.aspx), or [stand-alone versions of Safari](http://michelf.com/projects/multi-safari/). These are reasonably accurate, and should be good enough for 90% of the testing you need to do. If you don't want to clutter up your computer with them, you still have two options.

You can use a [web service that tests your site in different browsers](http://browsershots.org/). BrowserShots is the most well-known of these services, and it works well, but it costs money and it's slow. What I prefer to do is use Virtual machines. For testing previous versions of IE, I use the [IE6 VPC Image](http://go.microsoft.com/fwlink/?LinkId=70868) that the IE development team provides. It runs under [Virtual PC 2007](http://www.microsoft.com/windows/products/winfamily/virtualpc/default.mspx) and [Virtual PC for Mac](http://www.microsoft.com/mac/products/virtualpc/virtualpc.aspx?pid=virtualpc), both of which are free. The VPC image is time-bombed, meaning that you'll have to replace it every six months, but the IE team has committed to providing updated versions of the image for the foreseeable future.

Once you do get into the browser, you'll still need some tools to help make your testing more efficient. Here are the ones I've found most useful. [Firebug](http://www.getfirebug.com/) is a toolbar for Firefox that lets you access a ridiculous amount of information about your page. The single most useful part is the "Inspect" button, which lets you see all the CSS styles applied to any element on the page. Nearly as useful is [X-Ray](http://westciv.com/xray/), which displays some basic information about any selected element on the page. It's a javascript bookmarklet, which means it doesn't give quite as much information, but it has the advantage of working in any browser, including IE. Another one I use all the time is the "toggle CSS" bookmarklet from [Tantek's bookmarklet collection](http://www.favelets.com/). Finally, the [web developer toolbar for firefox](http://chrispederick.com/work/web-developer/) and the [IE developer toolbar](http://www.microsoft.com/downloads/details.aspx?familyid=e59c3964-672d-4511-bb3e-2d5e1db91038&displaylang=en) are very useful for things like turning javascript on and off.

### HTML Tools

I have bookmarks for a [_lorem ipsum_ generator](http://ungreek.toolbot.com/) and a [text obscuring tool](http://www.felgall.com/jstip33.htm), which I used for concealing the markup of email addresses. However, I don't use either of these tools anymore, since [TextMate](http://www.felgall.com/jstip33.htm), my favorite text editor, does both of these for me. To generate _lorem ipsum_, just type "lorem" and then hit Tab, and to obscure an email address, just select the address, hit CMD-C to copy it to the clipboard, and then hit CTRL-SHIFT-L. TextMate will automatically wrap the email in a proper mailto: link tag, and convert all the text to character entities! Of course, if you ever need to look a character entity up by hand, it's still useful to have a complete [XHTML Character Entity Reference](http://www.digitalmediaminute.com/reference/entity/index.php) available. Finally, here's a [complete list of official DTDs](http://www.w3.org/QA/2002/04/valid-dtd-list.html) from the W3C.

### Generic CSS References

Most of these links are to specific tools or techniques, but I would be remiss to leave out the big guns. These three links were critical reading when I was first learning CSS, and they're still solid introductions to the field. First, if you're unclear of what XHTML is, or why you should use CSS, the [NYPL Online Style Guide](http://www.nypl.org/styleguide/index.html) should be your first stop. Written in plain English, it does a great job of introducing all the key concepts you need to understand. Second, [A List Apart](http://alistapart.com/) should be required reading for anyone working on the web. They cover everything from project management to copywriting, but CSS and web standards are still the focus, and the archives are a gold mine of CSS information. Finally, there's Owen Brigg's collection of links, the [CSS Panic Guide](http://www.thenoodleincident.com/tutorials/css/).

### CSS Hacks

My philosophy is to write standards-compliant code for Firefox first, and then test and write browser-specific overrides as needed. This means that as browsers mature, my core code will continue working, and I can gradually phase out the browser-specific stuff as it stops being relevant. I avoid CSS hacks like the plague nowadays, preferring instead to use [IE conditional comments](http://msdn2.microsoft.com/en-us/library/ms537512.aspx) to put my IE-specific CSS rules into an IE-specific stylesheet. Still, it's good to know what all the [old-school CSS hacks](http://css-discuss.incutio.com/?page=CssHack) were and how they worked. The only two that I still use on a regular basis are the [::root hack for Safari](http://weblogs.macromedia.com/neils/archives/2005/12/css_hacks_and_t.cfm), because I can't find any other way to target Safari only, and the [clearfix hack](http://www.positioniseverything.net/easyclearing.html) for clearing a container full of floated items - and even then, I try to just float the container instead of using the hack whenever possible.

### CSS Image Replacement

There's going to come a time where you have to replace some HTML text with an image, usually for a headline. There are many techniques available to you, as you can see in this [presentation on image replacement from SXSW 2004](http://www.stopdesign.com/present/2004/sxsw/goodbad/?no=1). I prefer to use the [text-indent method](http://phark.typepad.com/phark/2003/08/accessible_imag.html), or [sifr](http://www.mikeindustries.com/sifr) if possible.

When you have to do image replacement, be smart about it. Currently, [Google doesn't penalize sites for image replacement](http://www.456bereastreet.com/archive/200510/google_seo_and_using_css_to_hide_text/), but that could change at any moment. The most important thing is to not do anything that looks "spammy" - such as replacing text with images that say something completely different. Our in-house rule is to only replace text with images that say the exact same thing.

Slightly more complicated than straight image replacement is the issue of using [transparent PNGs in IE6](http://support.microsoft.com/kb/294714). It is possible, but doing it for anything other than inline images gets much more complicated. We use the technique described here, with the modifications that we put the "filter" line in our IE6 stylesheet, and we use "crop" instead of "scale" so that the image doesn't stretch. Oh, and be aware that IE6 expects the size of the image to be defined in the CSS, so if your image isn't displaying, make sure you've explicitly defined a width and height.

### CSS List Navigation with Image Rollovers

I can't think of any site we've done in the last year that didn't use a plain unordered list for the primary navigation. This article from A List Apart is still the best [primer on using lists in CSS](http://www.alistapart.com/articles/taminglists/). Once you're familiar with the techniques described in there, you can work your way up to the more advanced techniques. If you're using HTML text, but you want image backgrounds that will shrink and expand with the size of the text, check out this introduction to [CSS Sliding Doors](http://www.stopdesign.com/present/2004/sxsw/hifi/?no=13). The technique we use most often is called either [CSS Sprites](http://www.alistapart.com/articles/sprites) or the [navigation matrix](http://veerle.duoh.com/index.php/blog/comments/the_xhtml_css_template_phase_of_my_new_blog_part_2/). Once again, a really good explanation can be found in this [CSS Rollovers presentation from SXSW 2004](http://www.stopdesign.com/present/2004/sxsw/hifi/?no=12).

### Print Stylesheets

There's no two ways about it, print stylesheets are a complicated mess, and they're probably not going to get better anytime soon. My advice to you is to give up expecting any kind of control over page breaks, and just go for trying to make something nice and presentable. Eric Meyer wrote the [definitive introduction to print stylesheets](http://www.alistapart.com/articles/goingtoprint/) on A List Apart back in 2002, and then for the site redesign in 2005, he wrote an [excellent followup](http://www.alistapart.com/articles/alaprintstyles/).

### CSS Forms

As Eric Meyer explains, [CSS and forms are unpredictable](http://meyerweb.com/eric/thoughts/2007/05/15/formal-weirdness/), for good reason. Still, there's a lot you can do, and most of it starts with a good understanding of [form theory](http://www.lukew.com/resources/articles/web_forms.html). How you lay out a form makes a huge difference on how usable it is, and it's also important to use [good markup](http://www.alistapart.com/articles/prettyaccessibleforms/). On a related note, did you know you can use [CSS to style bar graphs](http://meyerweb.com/eric/thoughts/2005/12/20/bar-graphs-with-style/)?

### Leftovers

Finally, I have a few leftovers that didn't really fit into any of the other categories. First up, Khoi shows off a brilliant technique for [making sure your CSS lines up with your grid by using a background image](http://www.subtraction.com/archives/2004/1231_grid_computi.php). And lastly, here's a great [free favicon creator](http://www.chami.com/html-kit/services/favicon/).

**Note:** This was originally posted on [my work blog](http://blogs.popart.com/scott-vandehey/), and I’m re-posting it here for archival purposes.
