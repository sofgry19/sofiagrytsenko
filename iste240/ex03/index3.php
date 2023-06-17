<!DOCTYPE html>
<html lang="en">
<head>
	<title> sitemap vs user navigation </title>
		<meta charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="style.css">
		<!--<script>
			"use strict";
			function change(id, img){
				document.getElementById(id).backgroundcolor = img;
			}
		</script>-->
</head>

<body>

    <div id="navcontainer">
	    <ul id="navlist">
		    <li><a href="index3.php" id="current">Homepage       </a></li>
		    <li><a href="#site">    Sitemaps    </a></li>
		    <li><a href="#user">User Navigation</a></li>
	    </ul>
    </div>

		<div id="wrapper">
    <h1>Sitemap vs User Navigation</h1>

    <h2 id="site">Sitemaps</h2>
    <p>A sitemap shows where content lives, usually in a graph form. Each seperate page is represented by a box, and the relation between pages is shown by arrows. It creates a type of flow chart that shows the entire structure of a site. Once a page shows up once in a sitemap, it will not show up again. The main purpose of sitemaps is to show the structure of a web page. Web crawlers like good xml sitemaps, because it leads to an effective SEO(search engine optimization).</p>
		<h3>Geshelli Sitemap</h3>
		<iframe id="gsitemap" src="geshelli_sitemap.html"> </iframe>
		<ul>
				<li><p>This is an example of a poor sitemap</p></li>
				<li><p>Unless you are looking for this specific site, it will not show up in a generlized search.</p></li>
		</ul>
		<h3>Salvatore's Pizza Sitemap</h3>
		<iframe id="ssitemap" src="pizza_sitemap.html"> </iframe>
		<ul>
				<li><p>This is an example of a good sitemap</p></li>
				<li><p>The repetition of the terms 'Rochester' and 'pizza' allows this site to be one of the first websites that show up if you are looking for a pizza shop in Rochester.</p></li>
		</ul>

		<h2 id="user">User Navigation</h2>
    <p>User navigation shows how the menus and navigation on the website will function. Unlike sitemaps, there can be more then one link to the same page. The main purpose of naviagtion is to show the user how to get to each page of the website. If you want to see examples of different naviagtion bars, go to the user navigation page.</p>
		<h3>Geshelli Navigation Bar</h3>
		<img src="geshelli.png" alt="Geshelli Navigation Bar">
		<ul>
				<li><p>This is a clean and visually pleasing naviagtion bar</p></li>
				<li><p>Even though the site has a poor sitemap, it's actual website is extremely professional.</p></li>
		</ul>
		<h3>Salvatore's Pizza Nagivation Bar</h3>
		<img src="pizza.png" alt="Salvatore's Pizza Navigation Bar">
		<ul>
				<li><p>This navigation bar is functional, but the color scheme is not visually pleasing</p></li>
				<li><p>This is one of the first sites that come up in a search engine, but it is a fairly juvenile site.</p></li>
		</ul>
		<!--<p>&nbsp;</p>
		<a href="index3.html"><img class="NoBorder"
				src="home_blue.png" id="home" alt="blue home button" title="blue home button"
				onmouseover="change('home','home_red.png')"
				onmouseout ="change('home','home_blue.png')" /> </a>-->

	 </div> <!-- End of wrapper class -->

	 <footer id="footer">
 		<?php
 			echo "<br>";
 			echo "Content last changed: ".date("F d Y H:i:s.", filemtime("index3.php"));
 		?>
 	</footer>

</body>

</html>
