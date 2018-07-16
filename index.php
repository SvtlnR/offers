<?php
	error_reporting(E_ALL);
?>
	<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	
	<title>
		About me
	</title>
	<link rel="stylesheet" type="text/css" href="./css/style.css">
	<script  src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1" />
</head>
<body>
	<header>
		<div class="hdr">
				Svetlana Ragulina
		</div>	
	</header>
	<nav>
		<div id="sandwich">
				<div class="stripe"></div>
				<div class="stripe"></div>
				<div class="stripe"></div>
		</div>
		<ul>
			<li class="navli"><div id="shgi">General information</div></li>
			<li class="navli"><div id="shfsh">Favourite shows</div></li>
			<li class="navli"><div id="shcont">Contacts</div></li>
			<li class="navli"><div id="shoff">Create offer</div></li>
		</ul>
	</nav>
	<main>
		<div id="geninf">
			<div class="inf">
				<dl>
					<dt>
						<div class="par">
							Personal information 
						</div>
					</dt>
					<dd>
						<div class="content">	
							<strong>Age:</strong> 19. <br>
							<strong>School:</strong> finished school 22 in 2016. <br>
							<strong>University:</strong> Petro Mohyla Black Sea National University.<br>
							<strong>Department:</strong> Computer Science.<br>
							<strong>Speciality:</strong>Computer science and IT.<br>
							<strong>Hobby:</strong> play piano.<br>
						</div>
					</dd>
					<dt>
						<div class="par">
							What I already know 
						</div>
					</dt>
					<dd>
						<div class="content">
							html, css, a little bit of JavaScript and jQuery
						</div>
					</dd>
					<dt>
						<div class="par">
							What I want to learn 
						</div>
					</dt>
					<dd>
						<div class="content">
							I want to improve my skills in JavaScript, learn how to work with frameworks(e.g. Angular).
						</div>
					</dd>
				</dl>
			</div>
			<div class="imgwr">
				<img src="./images/photo.JPG" >
			</div>
		</div>
		<div id="favsh">
			<div class="inf">
				<div class="content">
					<div class="par">Ellen</div>
					<div class="fr">
					<iframe  src="https://www.youtube.com/embed/txtlWTDr34A" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
					</div>
					<div class="par">James Corden</div>
					<div class="fr">
					<iframe  src="https://www.youtube.com/embed/QjvzCTqkBDQ" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
					</div>
					<div class="par">Jimmy Fallon</div>
					<div class="fr">
					<iframe  src="https://www.youtube.com/embed/tPwuLLL64HM" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
					</div>
				</div>
			</div>
		</div>
		<div id="cont">
			<div class="inf content">
				<strong>E-mail:</strong> <a href="mailto:svet.ragulina@gmail.com"> 
				<img src="./images/gmicon.png" class="icon">svet.ragulina@gmail.com</a>.<br>
				<strong>Instagram:</strong> <a href="https://www.instagram.com/_svtln_r/" target="_blank">
				<img src="./images/instaicon.png" class="icon">@_svtln_r</a>.<br>
				<strong>VK:</strong> <a href="https://vk.com/svetlana_ragulina" target="_blank">
					<img src="./images/vkicon.png" class="icon">Svetlana Ragulina</a>
			</div>
		</div>
		<div id="offer">
			<div id="inputoffer">
			<div class="inf content">
				<div class="err" id="errmail">Invalid e-mail</div>
				<div class="err" id="errfile">File has to be .pdf,.jpeg or .jpg</div>
				<form action="/handler.php" method="post">
					
					<div class="inpfield">
						
						<strong>E-mail</strong><br>
						
						<input type="text" id="email">
					</div>
					<div class="inpfield">
						
						<strong>Comment</strong><br>
						
						<textarea id="comment"></textarea>
					</div>
					<div class="inpfield">
						
						<strong>Attach file</strong><br>
						
						<input type="file" id="addfile" value="Choose file">
					</div>
					<div class="inpfield">
						<input type="submit" id="sendform" value="Send">
					</div>
				</form>

			</div>
			</div>
			<div id="resform">
				<div class="inf content">
					Your offer is sent.
				</div>
			</div>
		</div>
	</main>
	<footer>
		
	</footer>
	<script src="./js/script.js"></script>
	<script src="./js/valid.js"></script>
</body>
</html>
