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
		  	<li><a class="nav" id="active" href="travel.php">Travel</a></li>
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
      <header> Ways to Travel in NYC! </header>
    </div>
    <div class="body">
      <h1>NJ Transit</h1>
      <figure>
        <img class="image" src="images/njTransit.jpg" alt="Nj Transit Logo" title="Nj Transit Logo">
        <figcaption>NJ Transit</figcaption>
      </figure>
      <p>There are several ways to get into the city if you are coming in from a neighboring state. If you are coming from New Jersey, there are 3 ways to get into the city. The first way is by taking a bus. NJ Transit busses run every day of the week, and go to Porth Authority and the George Washington Bridge Terminal.</p>
      <p>The second way is through the ferry. NJ Transit also offers ferries that go to every part of New York City (Uptown, Midtown, and Downtown). They also have more reach then the busses, as even if you are from south Jersey, you can still get to the city using a ferry.</p>
      <p>The final way is through the train. Trains from all over the east coast travel to Penn Station, which lies in the heart of New York.</p>

      <h1>New York City Subway</h1>
      <figure>
        <img class="image" src="images/mta.jpg" alt="MTA Logo" title="MTA Logo">
        <figcaption>MTA</figcaption>
      </figure>
      <p>When you are inside of the city, you might be wondering how can you explore this massive lanscape. New York offers an alternative to walking, the subway. The MTA (Metropolitan Transportation Authority) run the New York City Subway; it runs from Queens down into Brooklyn. Each swipe costs $2.75, and if you do not leave the subway, you can take multiple trains for one swipe.</p>
    </div>

    <footer>
      <a href= "https://validator.w3.org/nu/?doc=http%3A%2F%2Fserenity.ist.rit.edu%2F%7Esdg3149%2F240%2FmidtermProject%2Ftravel.html"  target="_blank"><img class="icon" src="images/w3cHTML.png" alt="HTML Validator"></a>
      <a href="https://validator.w3.org/nu/?doc=http%3A%2F%2Fserenity.ist.rit.edu%2F%7Esdg3149%2F240%2FmidtermProject%2Fcss%2Fstyle.css"  target="_blank"><img class="icon" src="images/w3cCSS.png" alt="CSS Validator"></a>
      <?php
        echo "<br>";
        echo "Content last changed: ".date("F d Y H:i:s.", filemtime("travel.php"));
      ?>
    </footer>

</body>
</html>
