<!DOCTYPE html>
<html lang="en">
<head>
  <title>Welcome to New York City</title>
		<meta charset="utf-8" />
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script type="text/javascript" src="js/menu.js"></script>
    <script type="text/javascript" src="js/slideshow.js"></script>
</head>

<body id="main">
  <div id="mySidenav" class="sidenav">
	  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
			<ul class="nav">
		  	<li><a class="nav" id="active" href="index.php">Home</a></li>
		  	<li><a class="nav" href="activities.php">Activites</a></li>
		  	<li><a class="nav" href="food.php">Food</a></li>
		  	<li><a class="nav" href="travel.php">Travel</a></li>
				<li><a class="nav" href="nature.php">Nature Spots</a></li>
        <li><a class="nav" href="sightseeing.php">Sighteeing</a></li>
        <li><a class="nav" href="form.php">Feedback Form</a></li>
        <li><a class="nav" href="about.php">About</a></li>
        <li><a class="nav" href="grading.php">Grading Rubric</a></li>
				<li><a class="nav" href="reference.php">References</a></li>
		  </ul>
	</div>
  <span class="sticky" style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>

    <div class="header">
      <header> Welcome to New York City! </header>
    </div>
    <div class="body">
      <p>New York City is one of the biggest cities in the United States! It is a perfect destination if you want to explore and be exposed to new things. If you are thinking about visiting, click any of the links found on the menu for ideas!</p>
    </div>
    <div>
      <img id="slideshow" class="center image" src="images/newyork.jpg" alt="Slideshow of New York">
    </div>

    <footer>
      <a href= "https://validator.w3.org/nu/?doc=http%3A%2F%2Fserenity.ist.rit.edu%2F%7Esdg3149%2F240%2FmidtermProject%2Findex.html"  target="_blank"><img class="icon" src="images/w3cHTML.png" alt="HTML Validator"></a>
      <a href="https://validator.w3.org/nu/?doc=http%3A%2F%2Fserenity.ist.rit.edu%2F%7Esdg3149%2F240%2FmidtermProject%2Fcss%2Fstyle.css"  target="_blank"><img class="icon" src="images/w3cCSS.png" alt="CSS Validator"></a>
      <?php
        echo "<br>";
        echo "Content last changed: ".date("F d Y H:i:s.", filemtime("index.php"));
      ?>
    </footer>

</body>
</html>
