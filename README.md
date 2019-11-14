# Project SLiP

## **S**uper **L**ogin **P**hish
With help of this site you can spoof a very default windows login screen. (Close enough for DAUs, i hope)
The typed in password will be written in a file as of now.
In the future i want to add a few small features like choosing different backgrounds, supporting more resolutions,
different languages and simulating the few seconds of waiting after entering your password with a loading animation.

## How to use:
You have to open this page (index) and set your settings. Then you have to open the phishing page with the button.
The newly opened page is a javascript-called window and can close itself after entering the "password" (Due to some javascript restrictions).
Now close the first page and make the phishing page fullscreen. Have fun! 

## Example
I have no idea of input sanitizing. Because of this, i fear that uploading an working example, will attract someone who drops a shell or some shit through the password-saving (stealing) form.
So look for an example here: https://gfycat.com/ideallikelyfowl

## Known Issues
-Looks like shit to everyone who keeps comparing the original with the phish-site.
-Does not work in internet explorer
-Not tested in Edge (I don't even know how i removed it from my system, but i will not try to add it back)
-People are automated enough to just enter their password in something like this (yes, that's an issue)


## Antisleep
i have added a javascript from here https://github.com/ivanmaeder/computer-sleep
It should play a soundfile without sound in the background.
I have not tested it!! But i know that at least Firefox needs to whitelist the site to autoplay media. You can do that in the url bar on the very left.
Again: untested! 