<?php 
$path = $_SERVER['DOCUMENT_ROOT'].'\XerOne\'';
//$path.=''.preg_match("/[A-z][.php]/", $path);'';
include_once('disconnect.php');
include_once('login_check.php');
include_once('register.php');
include_once('loggedin_user.php');
include_once('loggedin_customer.php');

$loggedin = false;

function logout($loggedin, $email) {
	$disconnect;
	$loggedin == false;
	/*Terminate session and expire cookie*/
	return $loggedin;
}

function loggedin($loggedin) {
	switch ($loggedin) {
		case false:
			$loggedin == false;
			break;
		case true && false:
			$loggedin == false;
			break;
		case false && customer:
			$loggedin == false;
			break;
		case true:
			$loggedin == true;
			$fname == $fname;
			$email == $email;
			break;
		case true && customer:
			$loggedin == true;
			$fname == $fname;
			$email == $email;
			customer();
			break;
		default:
			$loggedin == false;
			break;
		}
	return $loggedin;
}

loggedin($loggedin);
?>
<!DOCTYPE html>
<head>
<meta charset="UTF-8">
<meta name="description" content="html templates">
<meta name="keywords" content="HTML, CSS, JavaScript">
<meta name="XerOne" content="XerOne">  
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="C:\wamp64\www\XerOne\base.css">
<link rel="stylesheet" type="text/css" href="C:\wamp64\www\XerOne\iframe.css">
</head>
<body>
<content class="wrapper" id="w">
<header>
<h1 id="page_title">XerOne</h1>
</header>
<content class="main" id="m">
	<article class="articles" id="first">
	<?php
	$login_form = '<div id="login">	
						<form action="login_check.php" method="post" enctype="application/x-www-form-urlencoded" 
						accept-charset="utf-8">
							<label for="userid">ID / Email:</label>
							<input type="email" id="userid" name="userid" value='.$email.'><br>
							<p id="userid" class="error">'.$error.'</p>
							<label for="password">Password:</label>
							<input type="password" id="password" name="password" value="'.$pass.'"><br>
							<p id="password" class="error">'.$error.'</p>
							<input type="submit" value="Submit">
						</form>
					</div>';

	$register_form = '<div id="registration">
						<form action="register.php" method="post" enctype="application/x-www-form-urlencoded" accept-charset="utf-8">
							<label for="fname">First Name:</label>
							<input type="text" id="fname" name="fname" value='.$fname.'><br>
							<p id="fname" class="error">'.$fnerror .'</p><br>
							<label for="lname">Last Name:</label>
							<input type="text" id="lname" name="lname" value='.$lname.'><br>
							<p id="lname" class="error">'.$lnerror.'</p><br>
							<label for="email">Email:</label>
							<input type="email" id="email" name="email" value='.$email.'><br>
							<p id="fname" class="error">'.$emerror.'</p><br>
							<label for="password">Password:</label>
							<input type="password" id="password" name="password" value='.$pass.'><br>
							<p id="fname" class="error">'.$perror.'</p><br>
							<label for="password">Confirm Password:</label>
							<input type="password" id="password" name="password" value='.$pass2.'><br>
							<p id="fname" class="error">'.$perror2.'</p><br>
							<input type="submit" value="Submit">
						</form>
					</div>';
	?>
	<!--div id="registration">
		<form action="document.alert('success');" method="post" enctype="application/x-www-form-urlencoded" accept-charset="utf-8">
			<label for="fname">First Name:</label>
			<input type="text" id="fname" name="fname" value="name"><br>
			<label for="lname">Last Name:</label>
			<input type="text" id="lname" name="lname" value="lastname"><br>
			<label for="email">Email:</label>
			<input type="email" id="email" name="email" value="email"><br>
			<label for="password">Password:</label>
			<input type="password" id="password" name="password" value="password"><br>
			<label for="password">Confirm Password:</label>
			<input type="password" id="password" name="password" value="password"><br>
			<input id="submit_input" type="submit" value="Submit">
		</form>
	</div -->
	</article>
	<article class="articles" id="second">
		<h2 class="news">Todays Top News</h2>
		<div class="news_breaker" id="0">
			<h4 class="news_title">Some random writing on the wall</h4>
			<p class="news_text">A Random link which goes nowhere productive to accompany the writing on the wall should be <a href="#" target="_self">available here somewhere</a> and also whilst we\'re here, might as well do nothing else but laugh.</p>
		</div><br>
		<div class="news_breaker" id="1">
			<h4 class="news_title">Military across the Globe</h4>
			<p class="news_text">Military across the globe have begun to take action to, quite literally, underground threats to human captives, illegal drug factories being built underground and used, so called \'Whorenets\' (prostitution networks) and illegal Weapon silos. <a href="#" target="_self">More info here (must have a governement login)</a>.</p>
		</div><br>
		<div class="news_breaker" id="2">
			<h4 class="news_title">Some ransome ware delivered by XerOne</h4>
			<p class="news_text">A Ransome link which goes nowhere productive to accompany the writing on the wall should be <a href="#" target="_self">available here somewhere</a> and also whilst we\'re here, might as well do nothing else but laugh whilst the payload is delivered to meet their demands.</p>
		</div><br>
		<div class="news_breaker" id="3">
			<h4 class="news_title">Animals are better off when humans stop being nasty and emitting pollution</h4>
			<p class="news_text">Old studies from years ago <a href="#" target="_self">available here somewhere</a>, suggest and prove Humans are destroying their planet Earth. Also whilst we\'re here, Bill Gates is Furious, as are we.</p>
		</div><br>
		<div class="news_breaker" id="4">
			<h4 class="news_title">LGBT Gets better recognition</h4>
			<p class="news_text">Finally, it\'s about time. <a href="#" target="_self">Peadophiles still condemmed</a>. Probably or the best........Editor.</p>
		</div>
		<div class="news_breaker" id="5">
			<h4 class="news_title">Priti Patel</h4>
			<p class="news_text">Possibly sexiest woman in government media scope.......Editor.</p>
		</div>
    </article>
</content>
<footer>
	<li class="foot_info">
		<a class="foot_link" href="#">someinfo</a>
		<a class="foot_link" href="#">someinfo</a>
		<a class="foot_link" href="#">someinfo</a>
		<a class="foot_link" href="#">someinfo</a>
		<a class="foot_link" href="#">someinfo</a>
	</li>
	<li class="foot_info">
		<a class="foot_link" href="#">someinfo</a>
		<a class="foot_link" href="#">someinfo</a>
		<a class="foot_link" href="#">someinfo</a>
		<a class="foot_link" href="#">someinfo</a>
		<a class="foot_link" href="#">someinfo</a>
	</li>
	<li class="foot_info">
		<a class="foot_link" href="#">someotherinfo</a>
		<a class="foot_link" href="#">someotherinfo</a>
		<a class="foot_link" href="#">someotherinfo</a>
		<a class="foot_link" href="#">someotherinfo</a>
		<a class="foot_link" href="#">someotherinfo</a>
	</li>
	<li class="foot_info">
		<a class="foot_link" href="#">someotherinfo</a>
		<a class="foot_link" href="#">someotherinfo</a>
		<a class="foot_link" href="#">someotherinfo</a>
		<a class="foot_link" href="#">someotherinfo</a>
		<a class="foot_link" href="#">someotherinfo</a>
	</li>
<img src="" alt="" >
</footer>
<nav>
	<?php
	if ($loggedin == true) {
		echo '<div class="user_welcome">
				<div class="account">
					<h3 class="welcome" id="welcome">Hello '.$fname.' welcome.</h3>
				</div>
			</div>
	<button id="menu" type="button" onclick="show_hide()">MENU</button>';
	?>
	<div class="sign">
		<button type="button" id="login" action="<?php echo $login_form; ?>">LOGIN</button>
		<button type="button" id="register" action="<?php echo $register_form; ?>">REGISTER</button>
	</div>
</nav>
<?php 
echo '<aside id="user_info">
	<button id="menu" type="button" onclick="show_hide()">MENU</button>
	<button type="button" id="profile" onclick="show_profile()">PROFILE</button>
	<div id="user_profile">
		<li id="profile_links">
			<a href="#">someotherinfo</a>
			<a href="#">someotherinfo</a>
			<a href="#">someotherinfo</a>
			<a href="#">someotherinfo</a>
			<a href="#">someotherinfo</a>
			<a href="#">someotherinfo</a>
			<a href="#">someotherinfo</a>
			<a href="#">someotherinfo</a>
			<a href="#">someotherinfo</a>
			<a href="#">someotherinfo</a>
		</li>
	</div><br><br>
	<button type="button" id="settings" onclick="show_settings()">SETTINGS</button><br>
	<div id="user_settings">
		<li id="settings_links">
			<form action="account_settings.php" method="post" enctype="application/x-www-form-urlencoded">
					<!---Rest of form here check boxes etc --->
				<input type="submit" value="SAVE">
			</form>
			<a href="#">someinfo</a>
			<a href="#">someinfo</a>
			<a href="#">someinfo</a>
			<a href="#">someinfo</a>
			<a href="#">someinfo</a>
			<a href="#">someinfo</a>
			<a href="#">someinfo</a>
			<a href="#">someinfo</a>
			<a href="#">someinfo</a>
		</li>
	</div><br><br>
	<button type="button" id="logout" onclick="';?><?php logout($loggedin == true, $email); ?><?php echo '">LOGOUT</button><br>
	<div id="guest">
		<li id="guest_links">
			<a href="#">someinfo</a>
			<a href="#">someinfo</a>
			<a href="#">someinfo</a>
			<a href="#">someinfo</a>
			<a href="#">someinfo</a>
			<a href="#">someinfo</a>
			<a href="#">someinfo</a>
			<a href="#">someinfo</a>
			<a href="#">someinfo</a>
		</li>
	</div>
</aside>
<script>
	function show_hide() {
		var z = document.getElementById("user_info");
		if (z.style.visibility === "visible") {
			z.style.width = "0%";
			z.style.visibility = "hidden";
			z.style.transition = "0.1s";
		} else {
			z.style.width = "25%";
			z.style.visibility = "visible";
			z.style.transition = "0.3s";
		}
	}

	function show_settings() {
		var y = document.getElementById("user_settings");
		if (y.style.visibility === "visible") {
			y.style.height = "0%";
			y.style.visibility = "hidden";
			y.style.transition = "0.1s";

		} else {
			y.style.height = "35%";
			y.style.visibility = "visible";
			y.style.transition = "0.3s";
		}
	}
		
	function show_profile() {
		var x = document.getElementById("user_profile");
		if (x.style.visibility === "visible") {
			x.style.height = "0%";
			x.style.visibility = "hidden";
			x.style.transition = "0.1s";
		} else {
			x.style.height = "35%";
			x.style.visibility = "visible";
			x.style.transition = "0.3s";
		}
	}
	
    function showiframe(){
        var x = document.getElementById("login");
        if (x.style.visibility = "visible"){
			x.style.height = "0%";
			x.style.width = "0%";
			x.style.visibility = "hidden";
			x.style.transition = "0.1s";
        } else {
			x.style.height = "50%";
			x.style.width = "100%";
           	x.style.visibility = "visible";
			x.style.transition = "0.3s";
		}
    }
</script>';
	} else {
		$loggedin = false;
	}
	?>
</content>
</body>
</html>
<?php

?>