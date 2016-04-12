<!DOCTYPE html>

<html lang="en">
	
<head>
<!-- Html Page Specific -->
<meta charset="utf-8">
<title>Login Page</title>
<meta name="description" content="Twitter Clone">
<meta name="author" content="Joshua Parkin and Siphan Bou">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">

<link rel="stylesheet" href="styles.css"/>

<head>
</head>

<body class="body"> <!-- Class is used for style -->

	<div id="wrapper"> <!-- Container for all content. Contains #container-header and #container-main -->
		<header id="header">
			<div id="container-header"> <!-- #container-header is a child of #wrapper -->
				<div id="logo">
					<img id="image" src="100-512-min.png" alt="running logo">
				</div>
			
				<div id="tagline">
					<p>Impossible fitness made possible by running!</p>
				</div>

				<div>
				</div>

				<div id="nav-div">
					<ul class="nav">
						<li class="nav-buttons"><a href="/" target="_blank" title="Amsterunner">Home</a></li>
						<li class="nav-buttons"><a href="https://twitter.com/Sissilacoureuse" target="_blank" title="Twitter Siphan">Latest Stories</a></li>
						<li class="nav-buttons"><a href="https://twitter.com/JDeePee" target="_blank" title="Twitter Josh">All stories</a></li>
					</ul>
				</div>
			

				<div id="login">
					<ul class="nav">
						<li class="edit_log"><a href="https://twitter.com/Sissilacoureuse" target="_blank" title="Twitter Siphan">Edit Profile</a></li> <!-- When user is logged in -->
						<li class="edit_log"><a href="https://twitter.com/JDeePee" target="_blank" title="Twitter Josh">Logout </a></li> <!-- When user is logged in. Need to create a 'Log in' button when user is not logged in -->
					</ul>
				</div>
			</div>
		</header>

	<main>
		<div id="container-main"> <!-- #container-main is a child of #wrapper -->	
			<br> <!-- Check if br can be replaced by a "gap" style as per Rudy's advice -->
			<div id="article">
				<h3>Sign in here!</h3>
				<form action="index.php" method = "post">
					<label for="username">Username</label> <input type="username" id="usename" name="login"><br /><br />
					<label for="password">Password:</label> <input type="password" id="password" name="password"><br /><br />
					<button type = "submit">Login</button>
				</form>
			</div>
		</div>
	</main>
</html>
