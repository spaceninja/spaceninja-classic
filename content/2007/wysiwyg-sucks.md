---
title: "WYSIWYG Editors are the Bane of My Existance"
created: 2007-08-16
tags: 
  - editors
  - horror
  - markup
  - wysiwyg
authors: 
  - scott
---

I had to make a slight tweak to a page on a site with a content-management system today. After spending a few minutes unraveling the code, I found out that a simple list of three links was using the following markup, which has clearly been screwed up by the WYSIWYG editor on the site.

```
<p>
  <span class="TextBold">
    NEXT STEPS:
    <br>
    <br>
  </span>
  <span class="TextPlain">
    <span class="TextPlain">
      <span class="TextPlain">
        <span class="TextPlain">
          <span class="TextPlain">
            <span class="TextPlain">
              <span class="TextPlain">
                <span class="TextPlain">
                  <span class="TextPlain">
                    <span class="TextPlain">
                      <img alt="" 
                      src="/media/icon-arrow-sm.gif" 
                      border="0">
                      <a href="ContactUs.aspx">Contact 
                      Us</a> today!
                    </span>
                  </span>
                </span>
              </span>
            </span>
            <br>
            <br>
          </span>
        </span>
        <span class="TextPlain">
          <span class="TextPlain">
            <span class="TextPlain">
              <img alt="" 
              src="/media/icon-arrow-sm.gif" 
              border="0">
              Evaluate your 
            </span>
          </span>
        </span>
        <span class="TextPlain">
          SEM campaigns with our 
          <a href="analytics.aspx">Campaign Management and 
          Analytics solutions</a>.
        </span>
        <br>
        <br>
      </span>
      <span class="TextPlain">
        <span class="TextPlain">
          <span class="TextPlain">
            <img alt="" src="/media/icon-arrow-sm.gif" 
            border="0">
            Expand your marketing
          </span>
        </span>
      </span>
      <span class="TextPlain">
        efforts with
        <a href="marketing.aspx">Direct E-mail Marketing</a>.
        <br>
      </span>
    </span>
  </span>
</p>
```
