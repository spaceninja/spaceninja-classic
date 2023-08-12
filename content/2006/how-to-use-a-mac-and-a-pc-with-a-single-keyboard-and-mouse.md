---
title: "How to Use a Mac and a PC with a Single Keyboard and Mouse"
created: 2006-11-10
tags:
  - apple
  - computers
  - keyboard
  - kvm
  - macintosh
  - mouse
  - noteworthy
  - pc
  - share
  - synergy
  - windows
authors:
  - scott
---

[![Scott's Desktop](/images/293400158_62566fffb8.jpg)](http://www.flickr.com/photos/spaceninja/293400158/)

As a web developer who prefers to use a Macintosh, I struggled to find the least painful way to test my work on a PC. Dual-booting was a possibility, but having to reboot every time I want to check IE was a pain. A KVM Switch was a little better, but it was still inconvenient, and I had difficulty locating one that would let me use my DVI monitor and USB mouse. I had a PC, but it bugged me having the second monitor, mouse and keyboard on the desk, getting in the way all the time. So you can imagine how happy I was to discover a way to share a single keyboard and mouse between two computers.

The solution, which seemed magical, turned out to be a program called [Synergy](http://synergy2.sourceforge.net/). After installing the software on both computers, you assign one to be the server and one to be the client. The server shares its keyboard and mouse input with the client over the network, effectively creating a dual-monitor setup where one monitor is a PC and one is a Mac.

In my case, I’ve got my Mac set up as the server, and I’ve got the PC keyboard and mouse at the back of my desk, behind the monitors – though I could just as easily put them under the desk, or even disconnect them entirely. The instructions I’m about to share are for that setup, though you could easily adjust them to have the PC be the server, or to add extra client computers (Mac-PC-Linux Tri-Monitor System, anyone?). It also works flawlessly with the operating system’s native multi-monitor support (my coworker has a dual-monitor Mac and a third monitor for his PC).

#### Advantages

- Clutter-free desktop with only one keyboard and mouse.
- Easily jump from Macintosh to PC and back, without needing to reboot or flip a switch.
- Cut-and-Paste between Macintosh and PC.
- Use your favorite programs, regardless of Operating System – for instance, use [TextMate](http://www.macromates.com/) on your Mac, and Outlook on your PC.

#### Disadvantages

- Confuses coworkers using your computer – though this could be seen as an advantage.
- Keyboard layout conflicts – Mac and PC keyboards put the ALT key in a different place, and the Mac uses the CMD key instead of the CTRL key. This can really mess with your muscle memory, and I constantly found myself trying to use CMD-C to copy text on my PC. Synergy lets you remap keys, but this again can confuse coworkers using your computer when the CTRL key doesn’t do what they expect.
- Requires two actual computers, as opposed to dual-booting or emulation. This isn’t a problem if you already have two computers, but if you’re looking for an all-in-one solution, this won’t work for you.

Note: The two computers will need to be on the same network.

#### Macintosh Instructions

1. Download and install the [Synergy Mac Client](http://sourceforge.net/projects/synergykm/).
2. Open the new “SynergyKM” Control Panel icon.
3. Click on the “General” tab.
4. Select “Share my Keyboard and Mouse.”
5. Check “Show Synergy status in the menu bar.”
6. Click on the “Server Configuration” tab.
7. Add your Macintosh:
   1. Click the Plus button to add a new screen.
   2. In the Name field, type the name of your Mac (this should match the Computer Name set in the Sharing pane of your Control Panel).
   3. You shouldn’t need to set anything under Screen Aliases or Screen Options.
8. Add your PC:
   1. Click the Plus button to add a new screen.
   2. In the Name field, type the IP address of your PC (you can find this by typing “ipconfig” at a command prompt on your PC).
   3. Under Screen Aliases, add an alias and type the name of your PC (this should match the Computer Name set in the System Properties tool, found in your Control Panel).
   4. Under Screen Options, swap the Control and Command keys for the PC, to keep your keyboard layout the same between systems.
9. Press the “Apply Now” button, and start Synergy if it isn’t started already.

#### PC Instructions

1. Download and install the [Synergy PC Client](http://sourceforge.net/project/showfiles.php?group_id=59275&release_id=300224)
2. Start the Synergy program.
3. Select “Use another computer’s shared keyboard and mouse (client)”
4. Click on “Advanced” and set Screen Name to the name of your PC (this should match the Computer Name set in the System Properties tool, found in your Control Panel).
5. Click on “Autostart” and click the Install button under “When Computer Starts” – which will start Synergy as a service on the computer.
6. Press the “Start” button (which should automatically minimize the program to your system tray).

Note: You may need to restart one or both computers to get everything synchronized.

After following the above instructions, you should have the same setup that I do. My experience is then when I reboot either or both computers, it generally takes 15-30 seconds before the Synergy client on my PC picks up on the input from the Mac.

#### Screensaver Notes

One of the only hiccups I’ve encountered with Synergy is with screensavers. If I’m working on my Mac, and don’t touch the PC for awhile, the screensaver will start, and I can’t “wake it up” using my Mac’s keyboard or mouse. I think this is because I've got the "Require password to wake computer from screensaver" option checked on my PC. When that happens, I just reach up and give the PC’s mouse a poke. There is an option in the program to “Synchronize Screensavers,” but when I used it, it not only didn’t work, but it seemed to make the system unstable. Your results may be better.

#### Do you need a Keyboard and Mouse on the PC?

After I set my coworker Ryan up with Synergy, he disconnected his PC’s keyboard and mouse, and hasn’t had a single problem. He doesn’t use a screensaver on his PC (just the energy saver mode), so that particular problem doesn’t affect him.

Outside of that, the only situation I can think of where you’d need them is if you lost network connectivity, then your PC would be a paperweight until the network came back up.

So the answer is “Yes, if you’re paranoid like me, or use a password-protected screensaver,” but otherwise, you can go ahead and disconnect them with no problems.

#### References

1. [Lifehacker article about Synergy](http://lifehacker.com/software/productivity/how-to-turn-your-dualmonitor-pc-into-a-dual-macpc-system-106123.php)
2. [Synergy Macintosh Client](http://sourceforge.net/projects/synergykm/)
3. [Synergy PC Client](http://sourceforge.net/project/showfiles.php?group_id=59275&release_id=300224)
4. [Synergy Project Homepage](http://synergy2.sourceforge.net/)

**Update, 2/21/2008:** Updated the URL for the Synergy Mac client to its new home on Sourceforge
