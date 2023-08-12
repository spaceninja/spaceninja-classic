---
title: "HATE.I&#039;ve been reading up on"
created: 2002-02-24
authors: 
  - scott
---

HATE.  
I've been reading up on CSS, and have learned that the elite thing to do is to use a CSS2 command to include your stylesheet. This will get you perfect results in good browsers, and fail non-catastrophically on bad browsers, and there's even a way to make the lack of the stylesheet display an error message telling people to get a better browser.  
  
Giddy with joy at the thought of not having to worry about Netscape 4 ever again, I modified www.km.org to use this code, only to have it fail in Mozilla. But it works perfectly in IE. Something is wrong here.  
  
A few hours of research later, and I have confirmed my suspicion that there is nothing wrong with Mozilla that would prevent including stylesheets. Therefore, it must be something about the server. So, curious about whether or not this could be something to do with the funky server configuration we have with the killingmachines.org domain, I copied the stylesheet into my ~scott folder, and pointed the include links there. Suddenly Mozilla works perfectly.  
  
AAAAAGH. Somehow, Mozilla is thrown off by our server to the point where I cannot include stylesheets from the same directory! This doesn't make any sense at all, and it infuriates me even more to know that IE is able to ignore it. I HATE HATE HATE obscure strange undocumented bugs like this.
