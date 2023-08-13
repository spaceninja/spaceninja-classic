---
title: 'one confusing mess and much geekery'
date: 2003-04-09
tags:
  - cables
  - cords
  - dsl
  - fojar
  - geekery
  - internet
  - networking
  - qwest
  - servers
authors:
  - scott
---

Okay, so I just got off the phone with the somewhat helpful girl at Qwest, who is upgrading my DSL from 256/256 to 640/640. The reason I'm getting this upgrade is so that fojar can come live at my house, which has a variety of advantages, including allowing Steve to cancel his phone line (to use his cell) and DSL service, and get rid of the cables that run all over his house.

Now, being the type of guy who tends to map things out in his mind, I've already come up with a rough concept of what the networking situation is going to look like in my house after fojar arrives

- The phone line exits the wall and travels around my desk to plug into the DSL modem, which sits on top of my computer.
  - Aside: the phone line exits the dsl modem and plugs into a DSL filter.
  - The DSL filter plugs into the back of my computer, in the modem I have for receiving faxes.
  - The phone line exits my computer's modem, and travels around the wall into the caller ID box, sitting on top of a speaker.
  - The caller ID box has a phone cord running into my cordless phone's base unit.
  - The cordless phone is usually stuffed between the couch cushions.
- An ethernet cable runs from the DSL modem up the wall to plug into my 5-port switch (which is a fancy type of hub).
- One ethernet cable runs from the switch back down the wall into my computer, giving it a static IP and leaving it outside of the fojar firewall, meaning I can now netmeeting with Steve!
- Another ethernet cable runs from the switch across the room, into the back of Fojar, giving it a static IP address so it can continue to serve the world with Pokey and Hatelife.
- Out of the second network card in fojar comes another ethernet cable, which travels back across the room and plugs into a 5-port hub, which will probably sit on top of the switch, just to be cute.
- An ethernet cable exits the hub, travels around the doorframe, and up into the moulding in the living room, and travels all the way around the room, and back down around the doorframe into Annie's office, where it snakes around behind some books to plug into her machine, which will get a shared internet connection from Fojar.
- Any other computers, such a laptops or my other Windows 2000 computer, will also plug into the hub and gain a net connection through Fojar.

TOTALS

- 1 DSL Filter
- 1 5 port switch
- 3 dirty magazines
- 1 5 port hub
- 2 static IP addresses
- 4 phone cables - over 20 feet total
- 5 ethernet cables - over 70 feet total
