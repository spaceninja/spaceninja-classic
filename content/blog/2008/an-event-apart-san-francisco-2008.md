---
title: 'An Event Apart San Francisco 2008'
date: 2008-09-03
tags:
  - accessibility
  - aeasf08
  - aneventapart
  - conferences
  - css
  - ericmeyer
  - heatherchamp
  - jasonsantamaria
  - jeffreyzeldman
  - jeffveen
  - jeremykeith
  - palacehotel
  - sanfrancisco
  - standards
authors:
  - scott
---

[![Columbus Tower](/images/2795113450_1681dbbe3b.jpg)](http://www.flickr.com/photos/spaceninja/2795113450/)

I've managed to attend An Event Apart [every](/blog/2006/an-event-apart-seattle-liveblogging-the-event/) [year](/blog/2007/an-event-apart-seattle-2007/) so far, and this year was particularly exciting because the nearest location was in San Francisco. I went to Seattle the last two times, which was fine, but I know Seattle pretty well, so the opportunity to play tourist in a new city was very appealing to me. Luckily, my coworker Libby was coming with me, and she used to work in "the City" so I had the advantage of a guide.

(While I was there, I took hundreds of photos, and even after whittling it down, I still uploaded more than 100 to flickr. Rather than bore you with them, I'll keep this post limited to discussion of the conference, and if you want to see dozens of photos of beautiful architecture, you can check out [the photo set](http://flickr.com/photos/spaceninja/sets/72157606932652142/).)

[![Palace Hotel](/images/2794443907_b885b48101.jpg)](http://www.flickr.com/photos/spaceninja/2794443907/)

The conference was held in the beautiful Palace Hotel on Market St. in the Financial District. My inner Blues Brothers fan had to suppress a giggle that we'd be going to the Palace Hotel Ballroom (where it's ladies' night!). The hotel itself is beautiful, and the dining room you see when you first walk in has an amazing ornate glass ceiling. The rooms we were in weren't quite as nice, but even they had fancy chandeliers and the sight of hundreds of web people with their laptops and geeky t-shirts (myself included) was a bit surreal.

> "If your web site structure in any way resembles your org. chart, you've failed."
>
> — Jeffrey Zeldman

Zeldman kicked things off with a bang, as usual. His modestly-titled presentation "Understanding Web Design" continued themes he touched on in previous years. He gave 12 tips for web designers, of which the first and last were "start with the user." By focusing on the user's needs, rather than the designer or the client, it becomes more clear how a site should function. (Though he left out the anecdote he used previously that the only other industry to call their target audience "users" is drug dealers.)

He reiterated an idea that he and Jason Santa Maria have both talked about — "sell ideas, not pixels." Don't go to your client with the "green comp" and the "72pt Helvetica Comp." Go to them with the "Human Interest Comp" and the "Photographic Impact Comp." It's easier for clients to talk about the differences between ideas — otherwise they get hung up on design details.

Next up came Eric Meyer with a new presentation called "The Lessons of CSS Frameworks," where he analyzed several popular CSS frameworks for what they could teach us. Long story short: Don't use other people's CSS frameworks except as a jumping-off point. Ideally, you should be creating your own framework. The one really fascinating thing to come out of it, though, was a discussion of the "ideal" font-sizes for headings, which he came up with by averaging the sizes across all the frameworks.

> "How did you convince your organization to switch to CSS from tables? Oh really? I'm sorry."
>
> — Jason Santa Maria

Jason Santa Maria talked about the difficulties of designing for the web, starting with the great example of the wonderful design in Wired magazine, and how none of that design carries over to their website, which uses a completely standard template. After talking about why web designs tend to look alike, he came to the example of his recent site redesign as a way to inject some art direction into a template-driven site.

Luke Wroblewski took us through lunch, discussing visual hierarchy, and how to design a site to encourage users to see the important bits and complete the important actions. He cited eye tracking studies that show that users do not read everything on a page — they skip around like mad, looking for anything that seems relevant — and if they don't find anything quickly, they move on.

> "Being community manager is like being a pinata. People beat on you with sticks and you still have to give them candy."
>
> — Heather Champ

After lunch, Heather Champ came out to talk about the work she does as a community manager for flickr. I was already somewhat aware of her from reading her husband's website, and I had seen her pop up a few times in the flickr support forums. This was the first time I'd seen her speak, and I have to say, she may be one of my new favorite web people. She is passionate, and the things she had to say about how to manage a community were equally smart and funny. I have a new appreciation for the work that goes on behind the scenes at flickr... and rereading this paragraph, perhaps a bit of a crush on the woman herself.

Liz Danzico spoke next about frameworks, and I'm ashamed to say that I got almost nothing out of her talk. The entire presentation was based on a metaphor of music notation, and I was completely lost. I don't know anything about music notation, so her analogies might as well have been in another language. It's too bad, because I know she's smart, and I was looking forward to her talk.

[![An Event Apart Ballroom](/images/2794383827_d3bdac46e1.jpg)](http://www.flickr.com/photos/spaceninja/2794383827/)

Dan Cederholm was the last official speaker for the first day, and he talked about "Bulletproof" design. I've seen him speak before, and it was great, as usual, but very little new information for anyone who's read his book or seen him speak before. Still, he got a ton of applause when he said that websites don't need to look exactly the same in every browser.

Oddly, the day was capped by a presentation from a sponsor. It was tacked on at the end of an already long day, the introduction was brief, and probably two-thirds of the audience had already left. Scott Fegette from Adobe came out and promised that his presentation wasn't a sales pitch for Dreamweaver (which he works on). We tried to stick it out, but it became obvious within minutes that it _was_ a sales pitch, and we bailed like everyone else.

> "Your stylesheets SUGGEST the way a website should look. The user decides how your site WILL look."
>
> — Jeremy Keith

Day two of the conference wasn't quite as strong. Jeremy Keith kicked things off with a presentation about the process they use at Clearleft. It was interesting in that it's always interesting to get a peek behind-the-scenes of another agency, but I really didn't learn anything.

Eric Meyer went next to talk about debug and reset stylesheets. If you read his website, you've already seen everything we heard, but it's always nice to see the master at work. Two things I walked out not knowing before: 1) for testing purposes, use `outline: 1px solid red;` rather than `border` because `outline` doesn't affect layouts, and 2) reset stylesheets are _much_ more popular than I thought. Probably 90% of the room raised their hands when Eric asked who used them. I don't make CSS decisions based on the "wisdom of the crowd" but with that number of people, maybe it's worth taking a closer look.

Derek Featherstone gave a talk called "Accessibility Beyond Compliance" which had one of the best opening lines I've ever heard. He walked up on stage, cleared his throat, and started with "The person on the other end of the phone said 'I'm sorry sir, but I have to hang up now.'" He was telling a story about a blind user whose bank wouldn't help him because he was using a screenreader — and they thought that meant there was another person in the room, violating their privacy policies.

Beyond the stories he told, which were very powerful, and helped to illustrate the point that accessibility is more than just `alt` attributes, the thing I walked away with was that managing `focus` in your web applications is incredibly important.

After lunch, Kelly Goto gave a talk about agile development. It was pretty good, and she's a good speaker (I enjoyed a presentation I saw her give on the future of mobile at An Event Apart Seattle in 2006), but my lack of interest in agile combined with a big lunch was like a sleeping pill. No fault of hers, but I was really struggling to stay awake.

> "I wore a shirt that says 'Math is easy. Design is hard.' You know what's not funny at Google? That shirt."
>
> — Jeff Veen

Jeff Veen gave the last presentation, and I have to say, he's probably the most compelling public speaker I've ever seen. I wouldn't even know where to start summarizing it. His larger theme seemed to be how to present data in such a way that users can "find their story." He discussed infographics, from Snow's cholera map to Minard's Napoleon map. (When he got to that, he suggested a game called "Web Conference Bingo," which would include the Minard map, an iPod, LOLcats, etc.) He even mentioned that the look of the charts in Google Analytics were inspired by the flyover maps from Raiders of the Lost Ark. None of this really captures the fact that he is just an amazing speaker. If you ever get a chance to see him, take it. You'll be glad you did.

All In all, I've got to say that An Event Apart remains the best web conference I've ever attended. You definitely get your money's worth, and even though I've come three years in a row, I always come away having learned a lot, and with a renewed excitement about my job. The single-track format makes a huge difference, too, because you don't have to stress about which sessions are the best to attend, or sneaking out of a bad session to go to your second choice. Plus — and this might seem minor, but if you've ever been to a conference, you'll know it's a big deal — they take a 15-minute break between every speaker. This means time to go to the bathroom, grab a drink, and just stretch your legs for a few minutes. Plain and simple, these guys get it.

**Note:** This was originally posted on [my work blog](http://blogs.popart.com/scott-vandehey/), and I'm re-posting it here for archival purposes.
