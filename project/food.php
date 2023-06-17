<!DOCTYPE html>
<html lang="en">
<head>
  <title>Welcome to New York City</title>
		<meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <script type="text/javascript" src="js/menu.js"></script>

</head>
<body id="main">

  <div id="mySidenav" class="sidenav">
	  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
			<ul class="nav">
		  	<li><a class="nav" href="index.php">Home</a></li>
		  	<li><a class="nav" href="activities.php">Activites</a></li>
		  	<li><a class="nav" id="active" href="food.php">Food</a></li>
		  	<li><a class="nav" href="travel.php">Travel</a></li>
				<li><a class="nav" href="nature.php">Nature Spots</a></li>
        <li><a class="nav" href="sightseeing.php">Sightseeing</a></li>
        <li><a class="nav" href="form.php">Feedback Form</a></li>
        <li><a class="nav" href="about.php">About</a></li>
        <li><a class="nav" href="grading.php">Grading Rubric</a></li>
				<li><a class="nav" href="reference.php">References</a></li>
		  </ul>
	</div>
  <span class="sticky" style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>

    <div class="header">
      <header> Popular Restaurants! </header>
    </div>
    <div class="body">
      <h1>Barnjoo</h1>
      <p>Barnjoo is a korean restaurant located in Union Square. It also has a bar, along with a live barbeque. Korean BBQ is cooked in front of you on a grill, and has premium ingredients. If you are looking for a high class meal, Barn Joo is the perfect choice!</p>
      <div class="center">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3023.143308454943!2d-73.99292668509476!3d40.73687204403139!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c259a3cae9b543%3A0x63891561bc5f9542!2sBarn%20Joo!5e0!3m2!1sen!2sus!4v1583363469389!5m2!1sen!2sus" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
      </div>

      <h1>Urban Space</h1>
      <p>Urban Space is a restaurant located in Times Square. It is a collection of smaller stores with all different cuisines and options. If you are unsure of what to eat, Urban Space is the perfect choice for you!</p>
      <div class="center">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.0108477846443!2d-73.9839131850939!3d40.76178614250602!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c259916ec5a6ab%3A0x40663f660b37e4e6!2sUrbanspace!5e0!3m2!1sen!2sus!4v1583374754381!5m2!1sen!2sus" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
      </div>

      <h1>S'MAC</h1>
      <p>S'MAC is a mac' & cheese restaurant located on first avenue. It is one of my personal favorites for this classic comfort food.</p>
      <div class="center">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3023.4468658224737!2d-73.98499000519385!3d40.73019165380958!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c2599de3f56c0b%3A0x3d44e07448f46e76!2sS&#39;MAC%20East%20Village!5e0!3m2!1sen!2sus!4v1583369089742!5m2!1sen!2sus" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
      </div>

      <h1>Daa! Dumplings</h1>
      <p>This is a personal favorite, a quiet dumpling restaurant on 8th ave. It is a russian restaurant, and it is nice to see my culture represented in the big city of New York.</p>
      <div class="center">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3021.766276982595!2d-73.98495748509366!3d40.7671650421767!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c258f7d83813dd%3A0x935b53d78d3b7915!2sDaa*21%20Dumplings!5e0!3m2!1sen!2sus!4v1583374825881!5m2!1sen!2sus" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
      </div>
    </div>

    <footer>
    	<a href= "https://validator.w3.org/nu/?doc=http%3A%2F%2Fserenity.ist.rit.edu%2F%7Esdg3149%2F240%2FmidtermProject%2Ffood.html"  target="_blank"><img class="icon" src="images/w3cHTML.png" alt="HTML Validator"></a>
    	<a href="https://validator.w3.org/nu/?doc=http%3A%2F%2Fserenity.ist.rit.edu%2F%7Esdg3149%2F240%2FmidtermProject%2Fcss%2Fstyle.css"  target="_blank"><img class="icon" src="images/w3cCSS.png" alt="CSS Validator"></a>
    	<?php
    		echo "<br>";
    		echo "Content last changed: ".date("F d Y H:i:s.", filemtime("food.php"));
    	?>
    </footer>
</body>
</html>
