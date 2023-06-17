<!DOCTYPE html>
<html lang="en">
<head>
	<title>Welcome to New York City</title>
		<meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script type="text/javascript" src="js/menu.js"></script>
		<link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">

</head>
<body id="main">

  <div id="mySidenav" class="sidenav">
	  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
			<ul class="nav">
		  	<li><a class="nav" href="index.php">Home</a></li>
		  	<li><a class="nav" href="activities.php">Activites</a></li>
		  	<li><a class="nav" href="food.php">Food</a></li>
		  	<li><a class="nav" href="travel.php">Travel</a></li>
				<li><a class="nav" href="nature.php">Nature Spots</a></li>
        <li><a class="nav" href="sightseeing.php">Sighteeing</a></li>
        <li><a class="nav" href="form.php">Feedback Form</a></li>
        <li><a class="nav" id="active" href="about.php">About</a></li>
        <li><a class="nav" href="grading.php">Grading Rubric</a></li>
				<li><a class="nav" href="reference.php">References</a></li>
		  </ul>
	</div>
  <span class="sticky" style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>

    <div class="header">
      <header> About the Developer: </header>
    </div>
    <div class="body">
      <h1>Sofia Grytsenko</h1>
      <p>I am a Human Centered Computing student at RIT.<br> I live right by the city, across the Hudson River. As a child my parents would always take me into New York, and I still go there to this day. It is an important part of my life.</p>
		  <p>If you want to contact me, my email is sdg3149(at)rit(dot)edu</p>
    </div>

		<footer>
			<a href= "https://validator.w3.org/nu/?doc=http%3A%2F%2Fserenity.ist.rit.edu%2F%7Esdg3149%2F240%2FmidtermProject%2Fabout.html"  target="_blank"><img class="icon" src="images/w3cHTML.png" alt="HTML Validator"></a>
			<a href="https://validator.w3.org/nu/?doc=http%3A%2F%2Fserenity.ist.rit.edu%2F%7Esdg3149%2F240%2FmidtermProject%2Fcss%2Fstyle.css"  target="_blank"><img class="icon" src="images/w3cCSS.png" alt="CSS Validator"></a>
			<?php
				echo "<br>";
				echo "Content last changed: ".date("F d Y H:i:s.", filemtime("about.php"));
			?>
		</footer>


</body>
</html>
