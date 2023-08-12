---
title: "Now Witness the Power of this Fully Armed and Operational Regular Expression"
created: 2007-08-21
tags: 
  - development
  - markup
  - regex
  - replace
  - search
authors: 
  - scott
---

For a recent project, I found myself having to convert 60+ product detail pages from the old table-based format to the new XML-based format. I was doing this on my own, and I didn't relish the thought of manually editing hundreds of tables of product details. For example, here's an excerpt from one of the old table-based detail lists:

```
<table cellspacing="0" cellpadding="0" width="268">
  <tr>
    <td class="specheading" colspan="2">Performance</td>
  </tr>
  <tr>
    <td width="122">Efficiency</td>
    <td width="144">MERV 15</td>
  </tr>
  <tr>
    <td width="122">Warranty</td>
    <td width="144">5-year limited</td>
  </tr>
</table>
```

Note that it consists of a list of specifications grouped under a title. Now, here's what the new, XML-based code looked like:

```
<specs group="Performance">
  <spec>
    <label>Efficiency</label>
    <value>MERV 15</value>
  </spec>
  <spec>
    <label>Warranty</label>
    <value>5-year limited</value>
  </spec>
</specs>
```

There was a time when I would have just gritted my teeth and manually edited every table. It would have taken me a couple of weeks, and by the end of it I would have been seriously thinking about quitting my job, because who needs that? Thankfully, having worked closely with programmers for the last several years, I've developed a fine sense for when there should be an easier way to accomplish a task. I might not know how to do it, but I know that there has to be a better way.

Sure enough, in this case I saved days of work through the power of regular expressions. For the non-programmers out there, regexes, as they are commonly known, are a search tool that are as powerful as they are complicated - and they're incredibly complicated. I am not very familiar with their usage, but I knew that TextMate, my favorite text editor, was capable of using them in search-and-replace operations.

After working through the regex tutorial in the TextMate help file, I managed to cobble together the follow set of search and replace operations that let me get the job done in just a couple of days, rather than a couple of weeks. Note that someone who really knows their stuff could probably wire this all up into a single regex, but my skillz aren't that good, so I had to work with several smaller regexes run in sequence.

To begin with, I had to figure out how to create a regex that said to replace an HTML tag while saving the contents of the tag, and ignoring the attributes, which might be different. For example, some of the table cell tags contained `width` or `colspan` attributes, and some didn't - and even the ones that did sometimes had them out of order.

After a bit of research, I found out that the magic equation was the expression `.*?` - The "`.`" means "match any non-whitespace character," while the following question mark and asterisk mean to match any number of them in a row. By using that bit, I could write something like this: `<td.*?>(.*?)</td>`, which means look for any `<td>` tag and ignore any attributes it has. Then I wrapped the contents of the tag in parenthesis, which tells regex to save that as a variable, which I can echo back out in the search results. This sounds much more complicated than it is. Check out the following examples to see how I used it.

First, I converted the group name by searching for:

```
  <table.*?>
    <tr>
      <td.*?>(.*?)</td>
    </tr>
```

And replacing it with:

```
  <specs group="$1">
```

Then I had to convert the closing table tag to a closing specs tag (no regex here, but I had to do it as a separate search).

```
  </table>
```

And replacing it with:

```
  </specs>
```

And finally, I could search for the individual table rows containing the specifications:

```
  <tr>
    <td.*?>(.*?)</td>
    <td.*?>(.*?)</td>
  </tr>
```

And replacing them with:

```
  <spec>
    <label>$1</label>
    <value>$2</value>
  </spec>
```

The moral of the story is that if you're willing to take the time to puzzle out how to work a "simple" regex, you can dramatically increase your efficiency.
