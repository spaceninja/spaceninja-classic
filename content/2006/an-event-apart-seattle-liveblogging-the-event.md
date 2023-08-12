---
title: "An Event Apart Seattle: Liveblogging the Event!"
created: 2006-09-18
tags:
  - aeaseattle06
  - alexrobinson
  - aneventapart
  - clients
  - conferences
  - css
  - design
  - ericmeyer
  - jasonsantamaria
  - jeffreyzeldman
  - kellygoto
  - markup
  - mobile
  - seattle
  - standards
authors:
  - scott
---

[![Eric Meyer](/images/247750057_0dffa749be_m.jpg)](http://www.flickr.com/photos/spaceninja/247750057/)

We're here! It's 8:50, and the big screen is showing a slideshow of photos that they guys must have taken yesterday when they got into town. The conference room is really nice - slightly elevated rows as you move back in the room, with Aeron chairs at the desks for each row (no power for laptops, but there's free wi-fi). Up front is a podium, and a table with two mac laptops and the video switchbox for the projector. I just waved at a guy I recognize from last night. Zeldman was personally supervising the lighting earlier, getting the light dim enough to focus on the stage, but still let you see your laptops (funny that's he's so hands-on running things - and he really is shorter than you would expect).

Not a lot of schwag - a nice black notebook with an AEA logo on it, a plastic duffle-style bag with the firefox logo on it, and another notepad with the conference center logo on it.

Zeldman and Meyer just walked on stage, and the room immediately went silent. Zeldman is introducing Meyer and telling us about slides and how we shouldn't blog them because they don't make sense out of context. Meyer's mike is humming - "Sorry, signal from the mothership."

### Eric Meyer: Hardcore CSS

"Bar none, this is the best venue we've ever been in, which sounds like a 'Hello, Seattle!' kind of thing, but I'm serious."

"Anyone use the child selector? (several hands raise) Ah, the people who don't use IE! Rock on."

`body p {color: red;} body * p {color: black;}`

These two rules fake the child selector. Note that the Universal Selector does NOT contribute to specificity - these two rules have the same specificity.

Meyer is covering some really basic stuff, but he's assuring us he'll get to more advanced stuff soon - "To quote Bill Cosby, I told you that story to tell you this one."

`body.css.tools` should be a valid selector, but IE only sees `body.tools`

He's showing us the CSS Vertical Bar Graphs experiment now.

(sets margin on HTML) "There's something outside the HTML element! No one has ever been able to explain to me what that is. The raw chaos from which our universe was formed, I guess."

The one exception to the rule that CSS doesn't inherit upwards is that if the HTML element doesn't have a bg color set, then the body element background color will get copied "up" to the canvas.

The SCOPE attribute for TH and TR elements is for accessability, to allow screenreaders to say something like Invoiced, Q2, $18,500.00

"I'm not an accessibility expert, so if something I say contradicts an accessibility expert, I'm almost certainly wrong. ...Just like if an accessibility expert contradicts something I say about CSS, they're almost certainly wrong... Well, probably wrong."

Meyer is suprisingly funny!

"Of course no-one here is using tables for layout... and never has."

Zeldman is standing in the aisle, surveying the audience like a bouncer.

(discussing TB Raman (sp?) who is blind, and wrote the emacs speaking browser, and now works at google) "I have hopes that these amazing accessibility things will come out of Google... I mean, it'll be in Beta (laughter), but at least there'll be something."

"How about ems vs percentages for width... I do have thoughts on that (looks at watch, everyone laughs) but I don't have time for that, we'll cover it later on."

Zeldman is back on stage, and just announced that they've arranged to have power strips brought in to let "all the people who are draining their laptop batteries" recharge.

Talking about how bad traffic is, and how there are people sitting in the back of the room, "which is sad, because there are plenty of seats near the front." He's asking everyone to raise their hand if they have an empty seat next to them. "This is bad, it'll show up on someone's blog like a power trip fascism thing. (chuckling)"

### Jeffrey Zeldman: These Aren't The Droids You're Looking For

Zeldman says he's giving a new talk called "These aren't the droids you're looking for, and you all know what that's a reference to, so I won't bore you with Star Wars history, but there are 17 references in this lecture..."

First slide is titled "Underwear."

"Those were the glory days \[of web design\] - Me at home in my underwear, with the clients afraid of me. I knew the glory days were over when a client said to me 'shouldn't this site have an entrance tunnel?"

Now he's discussing David Seagle and "creating killer websites" and how he got a bad rap because he promoted table layouts for so long. The Entrance Tunnel was his pre-flash loading page idea.

(Referring to the guy who spoke before him at an AIGA event years ago) "He didn't give a presentation and stand up here sweating like I am, thinking 'they all know I'm just faking this.'"

"It's a myth that you need a great client. It's possible to do great work for a terrible client - if you're willing to extend the scope of the project indefinitely."

**The client is not an idiot** - This is very important, and I want you all to write this down. To put it another way, Don't choose clients who are idiots. To put a marketing spin on it, Choose good clients.

Learn to Smell Trouble. **Bad assignments pack plenty of paperwork.** It says the client doesn't know what it wants you to achieve. What we really want them to approach us with initially is "my magazine sells well in print, but no one reads it online, and I need help with that." - Like a movie pitch "It's like Rocky, but with women."

"If you're giving me a 37-page RFP, then you'd better be giving me a million dollars, because I'm going to hate every minute of working for you. But if I can buy a house... (laughter)"

**Dialog early. Banter and be casual.** Makes an analogy to how he knows the difference between when his daughter is doing something safe or dangerous, because he's absorbing hundreds of tiny little signals every second. Another analogy is dating, how you know within minutes whether you get along with someone. It's instinct. You can do the same thing with clients, but you need dialog with the client first.

Not being a web expert is not the same thing as being a dummy. It does mean you'll have to educate the client. We remind the client of who we are and what we do, including examples that are relevant to the client and that we're not ashamed of. Your goal is to establish confidence in your ability. We've done this for awhile, and we're not too bad at it. Next, we show him real-world examples of what he's looking for that work well. Next, we show him real-world examples of what he's looking for that don't work. Now that we've scared him, we reassure him that he shouldn't worry by showing him how to address the problems we've raised (and how we can do it for him). We gave him bullet points and inferences that he can refer to later on, which will reassure him (like how you never read the warranty for things you buy, but you're reassured that it's there).

Good Selling means: **Have a process. Be calm and methodical.** This includes things like open lines of communication with the client to build a sense of trust and rapport. **Build the relationship before you show design.** Wireframes are great for building relationships, not just diagramming user flows. **Keep reminding the client where you are in the process and what's been agreed to.** Almost like they have alzheimer's - this is not a confrontation, it's to remind them because they have lots going on, and the website may not be their highest priority. Reminding them of their process helps to reassure them that there's a process and that they're in good hands. Finally, as in any relationship, **Learn to Translate.** Analogy: "My wife says 'that's a nice sweater.' Then a few days later, she says 'boy, it's getting cold out.' ...I can put that together."

Hillman Curtis says "Everyone understands design." Your job is to **convey the meaning of the design.** You don't need to tell them "This is the white design with four columns and a green nav." Instead, say things like "This is the Conde Naste design, which addresses the perception that you're stuffy and reserved." or "This is the formal design that is very austere, and says we're where you come to find out about design." or "Color is up for grabs, photo posioning is up for grabs, but what we want you to see is that this design is very humanist, this one is very corporate, and this one is the hybrid."

"When we get to the critiques later, the designs we received here are by far the best we've received anywhere."

Responding to criticism. "The client says 'that color is ugly' and your natural response is 'so are you!'" You should ask for clarification. The client says that button is too big. "Actually, I've never seen a client say a button is too big." Then your response is to explain your reasons - user studies are great.

### Jason Santa Maria: Solving (Re)Design Problems

"Something about that \[wet floor\] look reminds me of a wet bathroom floor, like that sort of runoff you get in front of the toilet."

Santa Maria is discussing the ALA redesign, and how they had all this incredible content, but the organization and CMS was really dated, and lacked branding. The plan was to update mainly the architecture, but keep the content the same.

He is discussing that a huge source of inspiration for him was books, and how they get typography right, because it's their main focus. He wanted people to want to read ALA, not feel like they had to print it out - He wanted to give them a comfortable space.

Your logo is not your brand, your brand is not your logo. Your logo should leave an impression of your brand. People will associate your action with your logo.

The first place I start with any design is my sketchbook - before I turn on the computer. Just get the ideas out of your head onto paper. Don't worry about typography or details. Work in black and white to begin with, on your logo. Anytime you can reinforce your brand (eg, favicon), however small, take it. (He's showing us lots of iterations and failed attempts for the ALA logo, each time closer to the final).

"That was the black tie gala logo, and this is the feet-up-on-the-sofa logo."

"I think that full black text on a white background is too violently contrasted. Going off-black on off-white decreases contrast, but increases readability."

The critics were missing the point - Design is Problem Solving. It's about addressing your client's issues, and serving the content as best you can.

"It was me IM'ing Eric a lot and saying 'We need more space under this type, this type needs to be bigger,' and him saying 'Why does this need to be bigger, why is this an image, I hate you.'"

### Eric Meyer: The One True Layout

Meyer is about to discuss Alex Robinson's "One True Layout." He's asking everyone who's read the article (several hands raised), and now he's asked who understood it the first time (only one hand). He just told that guy that he can come down and have his job, because he didn't understand it the first time around at all.

Asking for questions, someone asked how important it is for designers to understand code. "As important as a sculptor understanding how to chisel rock." It's unrealistic for a designer to try to design without understanding the medium they're designing in, like saying you want to design like Chihuly without knowing how to blow glass.

(Referring to the ALA redesign) "That was the compromise I reached with myself - I'm not going to use classes everywhere, and I'm not going to kill Jason (laughter), so I'll just have to accept some complicated selectors."

He's now discussing the One True Layout.

"Alex published this technique last year in October 2005, nine years after the CSS1 rules were published. As far as I can tell, no one else thought of this before him, including me, which is why I hate him."

If you do this with ems or percentages, you can get a fluid layout.

"Now, if you got into web design because you were told that there would be no math, I'm sorry."

This is starting to get really abstract and confusing.

To avoid float wrapping, give the floats a container with a width large enough to hold them.

(Repeating an audience question) "This stuff isn't going to break in Explorer, is it?" (laughter)

"If you're mixing units, you're playing with fire."

"As far as IE goes, position:relative is my aregano. This doesn't work, throw in some position:relative - it makes any dish better!"

setting overflow:auto causes boxes in the normal flow of the document to expand to contain floats.

to get full height columns, set padding-bottom: 100em, margin-bottom:-100em, and change from overflow:auto to overflow:hidden. GENIUS!

### Jeffrey Zeldman: Textism

This talk is about improving copy on websites to improve user experience. Chances are, whether you're a writer, designer, devloper, etc. There are words on your site that aren't working as hard as they could be.

Things we know about the web: 1) **Content drives traffic.** See Alexa top 500. 2) **Freshness matters** See top 100 blogs, mostly ugly. **Language is the primary user interface.** Labels, Guide copy, etc. See Flickr. Based on this, it would be logical to expect: 1) Most sites have a writing/editing budget. 2) Most sites, especially large ones. have a content czar (mind in charge).

He's asking us to raise our hands if we have a writing budget (about 20 peoples) and to keep them up if we have a content czar (1 person). "Pretty good, actually."

Refer to "Language is the Ultimate User Interface" from year 2000 on ALA. Conclusion: Go hire a copy czar. The End. (kidding)

Copy is a precious opportunity to define your brand. It's also the cheapest and easiest thing on your site to fix, generally.

Guide copy should be brief, clear, audience-appropriate, easy-to-follow, and brand-appropriate, because the web is used by people of various levels of education, or even ESL. Copy Copy lets you relax the rules on brevity. Brand Copy should stay brief and clear, and brand-appropriate. Labels guide users to the site, but also reinforce the brand. URLs are another chance to user language to connect (eg, alistapart.com/topics/design/).

Shovelware: It's like someone wrote up a bunch of word documents and threw them over the wall onto the website, like a dumptruck full of manure.

How words work online. Web users are most often in interactive "find" mode. When you get a newspaper, you're just trying to find out if there was a terrorist attack, or what time the game is. Therefor they scan, even people who love to read scan when online. Many readers speak ESL. Vocabularies and education very greatly. For most people, reading heaps of text online is visually and mentally fatiguing, even with Cleartype.

From this knowledge, guidelines emerge: Use frequent subheads for easier scanning. Chunk text to avoid fatigue (more and shorter paragraphs). User short, declarative sentences.

Good example is Lulu.com's about page.

### Kelly Goto: About Interface

Kelly says Jeffrey and Eric asked her to speak about what she's passionate about. Sounds like she's talking about mobile design. Nope, I was wrong, she's talking about ethnography. She's going to discuss a technique called rapid ethnography. She's clarifying that she's not a researcher by training, but she's passionate about it.

"If any of you are like me, your parents are constantly asking you 'what is it that you DO?'"

"I went into Google a few weeks ago and went into the bathroom, and they had these remote control toilets."

Focus groups are asking people what they WOULD do, and results are skewed by peer pressure, etc. User testing is watching what people actually DO.

Examples: JetBlue's friendly kiosks and customer service. Tivo's user-friendly experience. Google mobile maps local ease-of-use. iPod is personality-driven and lifestyle-driven.

How can you design an appropriate user experience? There's a scale between emotional and practical (eg, the fancy designer coffee maker she bought for her office that has no labels on the buttons. It was only through sheer love that they learned how to use it). "When you have an emotional attachment to a product or experience, you'll try harder to make it work."

More than usable: Are you emotionally attached? Do you think it's useful? Does it meet your needs? Can you integrate it into your life?

3 take-aways: 1) See how large brands are incorporating lifestyle research into innovating new products and services. 2) Gain insight... \*sigh\* She clicked through the slide too fast.

Example: Revenue for mobile applications: 72% is P2P messaging, everything else is less than 10%.

US Cell growth is climbing in the last two years because Korea and Japan (?) hit 100% penetration - to the point where many people are buying a second device. US is only 60-70 percent, so we're a hot market.

I'm really unclear what her overall point is. I guess it's just that user testing is good?

She's encouraging us to have one person in each team that takes one day each quarter and actually meet with your customers or clients.

### Critique

(I'm just taking selected quotes here, instead of writing about everything. It sounds like they're not going to discuss everything, but that's because there was too much good stuff, so they're trying to focus on stuff that needs help - so if they don't talk about our sites, that's not necessarily a bad thing.)

Zeldman: "Some of the best work I've ever seen in any critique, not just AEA, but anywhere."

Meyer: "I have nothing to say on the code on this one, because the person asked us not to review the code, and it's a table-based layout, so I have nothing to say, other than STOP IT."

(Referring to Savage Love site) Zeldman: "When you turned this one in, and we approved it for the critique, it was all about sex... What happened?"

Wow... Meyer was just ripping the designer for the Savage Love site a new on for his code.

Goto: "Who's the creator of this site? I'm not gonna harsh on you, okay? (hand is raised) I'm actually going to harsh on you a little bit..."

Meyer: "Not much to say about the code, but I am gonna come at it from the design point. (Santa Maria looks shocked) ...Yeah, I know, I'm getting above my station." Santa Maria: "Let me look at the code."

Heh... they're poking fun at the jagged edges on the traveloregon.com page, which is by our competitors at Opus. (That's the only bad thing they have to say, though, it's a beautiful site).

Well, they didn't get to any of our sites, but it was still a blast to listen to them all talk about sites.
