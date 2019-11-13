<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>SLiP</title>
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<!-- <link href="style.css" rel="stylesheet" type="text/css" media="screen" /> -->
	<style type="text/css">
    body {
		overflow: hidden;
		background-image: url("images/def_background.jpg");
		background-size: 1920px 1200px;
    }
	* {
        margin: 0;
        padding: 0;
    }
    .imgbox {
        display: grid;
        height: 100%;
    }
    .center-fit {
        max-width: 100vw;
        max-height: 100%;
        margin: auto;
    }
	.center {
		min-width: 1920px;
		min-height: 1200px;
		text-align: center;
		align-items: center;
	}
	.results {
		color: white;
		font-size: xxx-large;
		font-family: Segoe UI Light;
	}
	.botright{
		position: fixed;
		right: 30px;
		bottom: 30px;
	}
	.userchooser{
		position: fixed;
		left: 30px;
		bottom: 30px;
		z-index: 1;
	}
	.userchooser2{
		position: fixed;
		left: 30px;
		bottom: 100px;
		z-index: 1;
	}
		.userchooser2select{
		position: fixed;
		left: 23px;
		bottom: 98px;
		height: 66px;
		background-color:rgba(220, 220, 220, 0.5);
		font-family: Segoe UI Light;
		font-size: x-large;
		color: white;
		z-index: 0;
	}
	.userchooserselect{
		position: fixed;
		left: 23px;
		bottom: 25px;
		height: 66px;
		font-family: Segoe UI Light;
		font-size: x-large;
		color: white;
		z-index: 0;
	}
	
	</style>
	<script>
	var displayname = "<?php echo htmlspecialchars($_GET["displayname"]);?>"		
	var displayheight = "<?php echo htmlspecialchars($_GET["reheight"]);?>"
	var displaywidth = "<?php echo htmlspecialchars($_GET["rewidth"]);?>"
	</script>
</head>


<body oncontextmenu="return false;">



<div>   
  
  <!-- <div class="imgbox"> 
	<img class="center-fit" src="images/def_background.jpg">
  </div> -->
  
  <div >
	<form action="processor.php" method="POST">
		
		<div class="center">
			<div style="padding-top:15%;">
				<img src="images/UserAva.png">
			</div>
			<div class="results" style="padding-top:50px;">
				<!-- freihalter für Javascript -->
			</div>
			<div style="margin-top:20px; ">
				<input type="password" id="password" name="fname" style="border: 2px solid slategray; font-family:Segoe UI; width: 250px; height: 25px; " placeholder="Passwort" >
				<img src="images/pwarrow.png" style="margin-bottom:-9px; margin-left:-6px; border: 2px solid slategray; ">
			</div>
		</div>
		<div class="botright">
			<img src="images/Netzwerk.png"> &nbsp;
			<img src="images/utilman.png">
			<img src="images/power.png">
		</div>
		<div class="userchooser">
			<img src="images/UserChooser.png">
		</div>
		
		<div class="userchooserselect">
			<p style="position:relative; left: 70px; top: 14px;">Anderer Benutzer</p>
		</div>
		
		<div class="userchooser2">
			<img src="images/UserChooser.png">
		</div>
		
		<div class="userchooser2select">
			<p id="username" style="position:relative; left: 70px; top: 16px; padding-right: 80px;"></p>
		</div>
		
		<input type="submit" style="position: absolute; left: -9999px; width: 1px; height: 1px;" tabindex="-1" />
	</form> 
  </div>
</div>

<script>
document.querySelector('.results').innerHTML = displayname;
document.querySelector('#username').innerHTML = displayname;
</script>
