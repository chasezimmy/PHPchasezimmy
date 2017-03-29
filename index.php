<!DOCTYPE html>
<html lang="en">
<head>
	<title>Chase Zimmerman</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="description" content="Software Engineer &amp; Raspberry Pi Lover based in NYC!">
	<meta name="author" content="Chase Zimmerman">
	<meta name="keywords" content="Chase Zimmerman, Chase Zimmy, Python, Raspberry Pi, PHP, JavaScript, HTML,CSS">
	<meta name="google-site-verification" content="_2OMN_H7FtSg1OG1ReWuBl1rHfj37E5SXOZAyCx5GlE" />
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- FONT -->
	<link href="https://fonts.googleapis.com/css?family=Rubik|PT+Serif" rel="stylesheet">

	<!-- CSS -->
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/custom.css">

	<!-- Favicon -->
	<link rel="icon" type="image/png" href="favicon.ico">
</head>
<body>
<!-- Testing live push -->
<!-- We can only see a short distance ahead, but we can see plenty there that needs to be done.
		- Alan Turing' -->

<div class="container">
	<br />
	<div class="tile is-ancestor">
		<div class="tile is-vertical is-7">
			<div class="tile is-parent">
				<article class="tile is-child notification top-left">
					<p class="title">Chase Zimmerman</p>
					<p class="subtitle">Software Developer &amp; Raspberry Pi Lover in NYC</p>
					
					<div class="content contact">
						<h6><a href="mailto:chasezimmy@gmail.com" target="_blank">chasezimmy@gmail.com</a></h6>
						<h6><a  href="https://docs.google.com/document/d/1fi7suoBrx-Vte4mSTbk-CMuuyrU4QkvY4UHiA01As5o/edit?usp=sharing" target="_blank">resume</a></h6>
					</div>
				</article>
			</div>
			<div class="tile is-hidden-mobile">
				<div class="tile is-parent is-vertical">
					<article class="tile is-child notification middle-left has-text-centered is-unselectable">
						<span class="lenny  is-hidden" id="lenny_face"></span>
					</article>
					<article class="tile is-child notification bottom-left is-unselectable">
						<p class="title"></p>
						<p class="subtitle"></p>
					</article>
				</div>
				
				<div class="tile is-parent">
					<article class="tile is-child notification middle-middle is-unselectable">
						<p class="title"></p>
						<p class="subtitle"></p>
			  
						<figure class="image is-4by3">
						</figure>
					</article>
				</div>
			</div>
		</div><!-- /.tile -->

		<div class="tile is-parent">
			<article class="tile is-child notification long-right" id="work">
				<div class="content">
					<p class="title">Work</p>
					<p class="subtitle">From freelance to cubicle</p>
					
					<ul class="workscroll" id="tile-work">
						<li class="project">
							<a href="https://www.mailman.columbia.edu/">Columbia University</a><em> &#47; Software Developer</em>
							<ul class="description">
								<li><span>Application development for Columbia web apps and upkeep on Medical Center website</span></li>
								<li><span>PHP, Python, Javascript, HTML, CSS, Drupal</span></li>
							</ul>
						</li>
						<hr >
						<li class="project">
							<a href="http://jasonrobertbrown.com/">Jason Robert Brown</a><em> &#47; Web Developer</em>
							<ul class="description">
								<li><span>Upkeep for composer's professional website</span></li>
								<li><span>PHP, Javascript, HTML, CSS, Wordpress</span></li>
							</ul>
						</li>
						<hr >
						<li class="project">
							<a href="http://www.bevite.co/">Bevite</a><em> &#47; Web Developer</em>
							<ul class="description">
								<li><span>Closed-loop shared retail platform aimed at building a sustainable retail ecosystem</span></li>
								<li><span>Ruby on Rails, Javascript, HTML, CSS, PHP, Ecommerce</span></li>
							</ul>
						</li>
						<hr >
						<li class="project">
							<a href="#">LP-1 Web Controller</a><em> &#47; Software Engineer</em>
							<ul class="description">
								<li><span>Implemented a web controller using a Raspberry Pi and Python</span></li>
								<li><span>Raspberry Pi, Python, Flask, Javascript</span></li>
							</ul>
						</li>
						<hr >
						<li class="project">
							<a href="https://www.snagtag.com">SnagTag</a><em> &#47; Software Engineer</em>
							<ul class="description">
								<li><span>Data collection with bluetooth and Node.js on Raspberry Pi</span></li>
								<li><span>Raspberry Pi, Node.js, Javascript, Bash, Python</span></li>
							</ul>
						</li>
						<hr >
						<li class="project">
							<a href="https://www.editorr.com">editorr</a><em> &#47; Web Developer</em>
							<ul class="description">
								<li><span>Add responsive web design</span></li>
								<li><span>HTML, Javascript, CSS, PHP, Bootstrap</span></li>
							</ul>
						</li>
						<hr >
						<li class="project">
							<a href="https://www.dentless.com">Dentless</a><em> &#47; Web Developer</em>
							<ul class="description">
								<li><span>Updated UI to create a responsive website for mobile optimization</span></li>
								<li><span>HTML, Javascript, CSS, PHP, Bootstrap</span></li>
							</ul>
						</li>
						<hr >
						<li class="project">
							<a href="https://www.dolanbloom.com">Dolan Bloom</a><em> &#47; Web Developer</em>
							<ul class="description">
								<li><span>Create actor's website</span></li>
								<li><span>Squarespace, Javascript</span></li>
							</ul>
						</li>
					</ul>
				</div>
			</article>
		</div><!-- /.tile -->
	</div><!-- /.tile -->
</div><!-- /.container -->

<script src="js/jquery.min.js"></script>
<script>
$('.middle-left').on('click', function(){
	$('.middle-left .lenny').removeClass('is-hidden');
	$.ajax({
		type: 'POST',
		url: 'faces.php',
		success: function(data) {
			//$("#lenny_face").text(data);
		}

	})
});
</script>
<script type="text/javascript">
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-78253962-1', 'auto');
  ga('send', 'pageview');

</script>
</body>
</html>
