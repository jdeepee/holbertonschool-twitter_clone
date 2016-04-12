<?php
$users = [
    array("id" => 1, "login" => "user1", "password" => "password1", "full_name" => "User 1"),
    array("id" => 2, "login" => "user2", "password" => "password2", "full_name" => "User 2"),
    array("id" => 3, "login" => "user3", "password" => "password3", "full_name" => "User 3"),
  ];

function userExists($login, $password, $users)
{
	foreach ($users as $value) {
		if ($value['login'] == $login) {
			if ($value['password'] == $password) {
				return $value["full_name"];
      			}
    		}
	}
	return false;
}
?>

<!DOCTYPE html>

<html lang="en">
	
<head>
<!-- Html Page Specific -->
<meta charset="utf-8">
<title>Running Blog</title>
<meta name="description" content="Twitter Clone">
<meta name="author" content="Joshua Parkin and Siphan Bou">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">

<link rel="stylesheet" href="styles.css"/>

<script src="post_a_status.js"></script>
<script src="reply.js"></script>
<script src="toggle.js"></script>
<script src="load_more.js"></script>
<script src="ajax.js"></script>
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
				<?php
					if ($_POST["login"]){
						if (userExists($_POST["login"], $_POST['password'], $users) == false) {
                					echo "Hello, there!";
                					echo "<br>";
                					echo "<p id='error'>Invalid credentials</p>";
              					} else {
                					echo "Hello, " . userExists($_POST["login"], $_POST['password'], $users);
                					echo "<br>";
                					echo "Your rot13’d login is: " . str_rot13($_POST["login"]) . ",";
                					echo " and the length of your login is: " . strlen($_POST["login"]);
              					}
            				} else {
              					echo "Hello, there!";
            				}
				?>
				</div>

				<div id="nav-div">
					<ul class="nav">
						<li class="nav-buttons"><a href="http://amsterunner.com/" target="_blank" title="Amsterunner">Home</a></li>
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

    
<!-- SEO ranking competition based on query “impossible octopus fitness” -->
<!-- Homepage Main Part code -->
<!-- Each status should have:
	- a large image of the user who posted it, floating on the left 
	- the name of the user who posted it
	- the date it was posted
	- the status's content itself, short or long -->
	
		<main>
		<div id="container-main"> <!-- #container-main is a child of #wrapper -->	
			<br> <!-- Check if br can be replaced by a "gap" style as per Rudy's advice -->
			<div id="article">
	            <br>
				<h1>Impossible octopus fitness</h1>
				<br>
				<p>
				Welcome to JDeePee, the Twitter for runners, fitness and octopus lovers.
				</p>	
				<br>
                <br>
                <br>

<!-- Post a new status button -->                  
				<div class="ask-post-status" id="ask-post-status">
					<div class="post-status-button-div">
						<button id="post-status-btn">Post a status</button>
					</div>

					<form class="hidden" id="statuspost" title="statuspost">
						Submit a post: <br>
						<input type="text" name="post" title="post">
						<input type="radio" name="location" value="location" title="location" > Include location<br>
						<input type="submit" value="Post" title="Post">
					</form>
				</div>

<!-- The code below allows users to post even if they do not have JS enabled -->
				<noscript>
					<form class="statuspost">
						Submit a post: <br>
						<input type="text" name="post">
						<input type="radio" name="location" value="location"> Include location<br>
						<input type="submit" value="Post">
					</form>
				</noscript>
                <br>
				<hr>

                
<!-- Load more statuses button. Extra statuses are in statuses-1.html -->
<!-- This is "a call-to-action, so marketing-wise, you want the user to want to click there in priority; don't be shy with contrast and affordance" -->                
				<br>
                <div id="extra_statuses">
					<button id="button-load">See more statuses</button>
				</div>

                
<!--                 Statuses             -->      
<!-- Status 1 -->
                <div class="post">
					<img class="article_img" src="q8XtwJ0q-min.jpg" alt="user marine">
					
					<h2>Marine Dejean</h2>
					<h3>March 20, 2016</h3>
					<br>
					<p>
					Been running for 2 months in SF. Getting used to the hills, running on flat routes is now a piece of cake! I can now have my cake and eat it too!
					</p>
					<br>
                    
                    <!-- Reply button & form -->  
					<div class="post-status-button-div" data-attribute="hidden">
						<button class="button-reply">Reply</button>
					</div>

					<form class="hidden reply-form" title="reply">
						Reply:<br>
						<input type="text" name="post" title="post">
						<input type="radio" name="location" value="location" title="location" > Include location<br>
						<input type="submit" value="Post" title="Post">
					</form>

				</div>	
				<hr>

<!-- Status 2 -->
                <div class="post">
					<img class="article_img" src="bennett_buchanan-min.jpg" alt="user bennett">
					
					<h2>Bennett Buchanan</h2>
					<h3>March 19, 2016</h3>
					<br>
					<p>
					A classmate of mine is training for the Indianapolis marathon in May and this has inspired me to run 13.1 miles too.
					</p>
					<br>
                    
                    <!-- Reply button & form -->  
					<div class="post-status-button-div" data-attribute="hidden">
						<button class="button-reply">Reply</button>
					</div>

					<form class="hidden reply-form" title="reply">
						Reply:<br>
						<input type="text" name="post" title="post">
						<input type="radio" name="location" value="location" title="location" > Include location<br>
						<input type="submit" value="Post" title="Post">
					</form>

				</div>	
				<hr> 

<!-- Status 3 -->
                <div class="post">
					<img class="article_img" src="MyPhoto-min.jpeg" alt="user tasneem">
					
					<h2>Tasneem Farag</h2>
					<h3>March 18, 2016</h3>
					<br>
					<p>
					Today I ran 8 miles along the Golden Gate Park to Ocean Beach and back. I'm not a big fan of the park as there are cars everywhere, luckily seeing and hearing the waves in Ocean Beach was worth the trip!
					</p>
					<br>
                    
                    <!-- Reply button & form -->  
					<div class="post-status-button-div" data-attribute="hidden">
						<button class="button-reply">Reply</button>
					</div>

					<form class="hidden reply-form" title="reply">
						Reply:<br>
						<input type="text" name="post" title="post">
						<input type="radio" name="location" value="location" title="location" > Include location<br>
						<input type="submit" value="Post" title="Post">
					</form>

				</div>	
				<hr>
                
<!-- Status 4 -->
                <div class="post">
					<img class="article_img" src="DSC_0346112-min.jpg" alt="user bilal">
					
					<h2>Bilal Barki</h2>
					<h3>March 17, 2016</h3>
					<br>
					<p>
					Jogged along the Embarcadero to AT&T stadium, home of the #Giants. Iconic!! Hope to watch a game soon.
					</p>
					<br>
                    
                    <!-- Reply button & form -->  
					<div class="post-status-button-div" data-attribute="hidden">
						<button class="button-reply">Reply</button>
					</div>

					<form class="hidden reply-form" title="reply">
						Reply:<br>
						<input type="text" name="post" title="post">
						<input type="radio" name="location" value="location" title="location" > Include location<br>
						<input type="submit" value="Post" title="Post">
					</form>

				</div>	
				<hr>                

<!-- Status 5 -->
                <div class="post">
					<img class="article_img" src="DSC_5872-min.jpg" alt="user praylin">
					
					<h2>Praylin Dinamoni</h2>
					<h3>March 16, 2016</h3>
					<br>
					<p>
					Joe Greene (not the football player) has been coaching Rona and I on strength workout. We will get #buff!
					</p>
					<br>
                    
                    <!-- Reply button & form -->  
					<div class="post-status-button-div" data-attribute="hidden">
						<button class="button-reply">Reply</button>
					</div>

					<form class="hidden reply-form" title="reply">
						Reply:<br>
						<input type="text" name="post" title="post">
						<input type="radio" name="location" value="location" title="location" > Include location<br>
						<input type="submit" value="Post" title="Post">
					</form>

				</div>	
				<hr>

<!-- Status 6 -->
                <div class="post">
					<img class="article_img" src="small-min.png" alt="user chandler">
					
					<h2>Chandler Mayo</h2>
					<h3>March 15, 2016</h3>
					<br>
					<p>
<!-- For accessibility, links should have titles and images alt attributes -->					
					<a href="https://www.youtube.com/watch?v=41N6bKO-NVI" target="_blank" title="BringSallyUp video">#sallyChallenge</a> is on! 30 days to completing the whole song. What did I get myself into? #planks #pushUps #coreWorkout
					</p>
					<br>
                    
                    <!-- Reply button & form -->  
					<div class="post-status-button-div" data-attribute="hidden">
						<button class="button-reply">Reply</button>
					</div>

					<form class="hidden reply-form" title="reply">
						Reply:<br>
						<input type="text" name="post" title="post">
						<input type="radio" name="location" value="location" title="location" > Include location<br>
						<input type="submit" value="Post" title="Post">
					</form>

				</div>	
				<hr> 

<!-- Status 7 -->
                <div class="post">
					<img class="article_img" src="lol-min.png" alt="user ian">
					
					<h2>Ian Wagener</h2>
					<h3>March 14, 2016</h3>
					<br>
					<p>
					I really need to #proteinLoad, but I love cold pizzas. #veggies #fruits #moreVeggies #whereCanIGetQualityCheapSalmon
					</p>
					<br>
                    
                    <!-- Reply button & form -->  
					<div class="post-status-button-div" data-attribute="hidden">
						<button class="button-reply">Reply</button>
					</div>

					<form class="hidden reply-form" title="reply">
						Reply:<br>
						<input type="text" name="post" title="post">
						<input type="radio" name="location" value="location" title="location" > Include location<br>
						<input type="submit" value="Post" title="Post">
					</form>

				</div>	
				<hr>
                
<!-- Status 8 -->
                <div class="post">
					<img class="article_img" src="John_Serrano-min.jpg" alt="user john">
					
					<h2>John Serrano</h2>
					<h3>March 13, 2016</h3>
					<br>
					<p>
					It's Saturday night and here I am posting statuses on #JDeePee instead of resting to be ready for my Sunday run. It really is #impossibleOctopusFitness.
					</p>
					<br>
                    
                    <!-- Reply button & form -->  
					<div class="post-status-button-div" data-attribute="hidden">
						<button class="button-reply">Reply</button>
					</div>

					<form class="hidden reply-form" title="reply">
						Reply:<br>
						<input type="text" name="post" title="post">
						<input type="radio" name="location" value="location" title="location" > Include location<br>
						<input type="submit" value="Post" title="Post">
					</form>

				</div>	
				<hr> 

<!-- Status 9 -->
                <div class="post">
					<img class="article_img" src="01-min.jpg" alt="user rick">
					
					<h2>Rick Houser</h2>
					<h3>March 12, 2016</h3>
					<br>
					<p>
					What is the hardest? Running 13.1 miles? Impossible Octopus Fitness? Ajax calls? Creating compelling SEO content?
					</p>
					<br>
                    
                    <!-- Reply button & form -->  
					<div class="post-status-button-div" data-attribute="hidden">
						<button class="button-reply">Reply</button>
					</div>

					<form class="hidden reply-form" title="reply">
						Reply:<br>
						<input type="text" name="post" title="post">
						<input type="radio" name="location" value="location" title="location" > Include location<br>
						<input type="submit" value="Post" title="Post">
					</form>

				</div>	
				<hr>
                
<!-- Status 10 -->
                <div class="post">
					<img class="article_img" src="12556012_1568819283442820_1631910762_n-min.jpg" alt="user siphan">
					
					<h2>Siphan Bou</h2>
					<h3>March 10, 2016</h3>
					<br>
					<p>
					Looking back at Emily Blunt's workout for Edge of Tomorrow, I'm getting a motivation boost. #empowering
					</p>
					<br>
                    
                    <!-- Reply button & form -->  
					<div class="post-status-button-div" data-attribute="hidden">
						<button class="button-reply">Reply</button>
					</div>

					<form class="hidden reply-form" title="reply">
						Reply:<br>
						<input type="text" name="post" title="post">
						<input type="radio" name="location" value="location" title="location" > Include location<br>
						<input type="submit" value="Post" title="Post">
					</form>

				</div>	
				<hr>  		
<!--        End of Statuses        -->                 
			</div> <!-- End of div id="article" -->
			

<!-- Homepage Aside code -->
<!-- Most notable users, where each user must display at least:
	- the image of the user
	- the name of the user
	- the user's short bio -->
		<div id="aside">	

			<div class="notable_user">
				<img class="aside_img" src="nomipic-min.jpg" alt="user sophie"/>
					<h4>Sophie Rigault-Barbier</h4>
				<br>
				<p>
					Sophie used to be a top athlete - 11 years of competition in tennis and 4 years in volleyball. Although she really enjoyed it, when she started working she didn’t get to practice sports much for almost 6 years.
				</p>
				</div>	
				<br>

				<div class="notable_user">
					<img class="aside_img" src="10805743_744774678939939_1422144655117219420_n-min.jpg" alt="user electra"/>
						<h4>Electra Chong</h4>
					<br>
					<p>
					Electra is a 22-year-old resident of San Francisco, formerly of the Central Valley and Southern California. Along with running, she enjoys crochet, anime/manga, and sci-fi and fantasy.
					</p>
				</div>	
				<br>

				<div class="notable_user">
					<img class="aside_img" src="q8XtwJ0q-min.jpg" alt="user marine"/>
						<h4>Marine Dejean</h4>
					<br>
					<p>
					Marine is a 19 year old Paris, France native who moved to Santa Clara, California a year and a half ago with her American mother. She is a vegetarian foodie and enjoys outdoor activities such as running and hiking.
					</p>
				</div>
				<br>

				<div class="notable_user">
					<img class="aside_img" src="Screen_Shot_2015-12-03_at_10.31.06_AM-min.jpg" alt="user steven"/>
						<h4>Steven Garcia</h4>	
					<br>
					<p>
					Steven was born in Brooklyn, NY and grew up in Madrid, Spain. His family and him moved to California when he was 18. 
					</p>
				</div>
				<br>
				<br>

<!-- Welcome box -->
				<div class="welcome">
					<p> Welcome to our Beta application, impossible octopus! </p>
				</div>	
				
			</div>

		</div>	
		</main>

<!-- Footer should have at least one link for accessibility project -->
		<div id="footer">
<!-- For accessibility, links should have titles and images alt attributes -->					
			<ul id="footer-links-div">
				<li>Made by </li>
				<li class="footer-links"><a href="https://twitter.com/Sissilacoureuse" target="_blank" title="Twitter Siphan">Siphan Bou</a></li>
				<li>and </li>
				<li class="footer-links"><a href="https://twitter.com/JDeePee" target="_blank" title="Twitter Josh">Josh Parkin</a></li>
				<li>for </li>
				<li class="footer-links"><a href="https://www.holbertonschool.com/" target="_blank" title="school website">Holberton School</a></li>
			</ul>
		</div>
	
	</div>	<!-- End of div #wrapper -->

</body>

</html>
