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
        <li><a class="nav" id="active" href="sightseeing.php">Sightseeing</a></li>
        <li><a class="nav" href="form.php">Feedback Form</a></li>
        <li><a class="nav" href="about.php">About</a></li>
        <li><a class="nav" href="grading.php">Grading Rubric</a></li>
				<li><a class="nav" href="reference.php">References</a></li>
		  </ul>
	</div>
  <span class="sticky" style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>

    <div class="header">
      <header> Popular Tourist Attractions! </header>
    </div>
    <div class="body">
      <h1>Empire State Building</h1>
      <figure>
          <img id="esb" class="image" src="images/esb.jpg" alt="Empire State Building" title="Empire State Building"
          onmouseover="change('esb','images/esb2.jpg'); changeCap('esbCap','Empire State Building 2')"
          onmouseout ="change('esb','images/esb.jpg'); changeCap('esbCap','Empire State Building 1')">
          <figcaption id="esbCap"> Empire State Building 1</figcaption>
      </figure>
      <p>The Empire State Building was the tallest building in the world for about 40 years (being dethroned by the Freedom Tower). It is 102 stories tall, and was built in 1931. It took over a year to build, and stands at a total of 1,454 feet tall.</p>
      <p> If you want to take a tour of the Empire State Building, you have to purchase a ticket in advance, if you want a garunteed spot for the tour. The tour is open every day of the year, and runs from 8 am to 2 am. During the tour, you go up into the Empire State Building, and have the option to go all the way to the top. There are also restaurants and shops within the building and now have 2 decks where you can take photos.</p>
      <h1>Freedom Tower</h1>
      <figure >
          <img id="freedom" class="image" src="images/freedomTower.jpg" alt="Freedom Tower" title="Freedom Tower"
          onmouseover="change('freedom','images/freedom2.jpg'); changeCap('freedomCap','Freedom Tower 2')"
          onmouseout ="change('freedom','images/freedomTower.jpg'); changeCap('freedomCap','Freedom Tower 1')">
          <figcaption id="freedomCap">Freedom Tower 1</figcaption>
      </figure>
      <p>The Freedom Tower, also known as the One World Trade Center is the building that was built where the Twin Towers used to stand. It is currently the tallest building in the United States, being 104 floors high. If you want to visit, it is reccomended that you buy your ticket in advance. Standard tickets are $35 and allow you to explore for 1 hour after you arrive. Tickets that are $45 give you priority over the lower level ticket holders, and you are given an assigned timeslot to explore the building. The highest level ticket, that is available for purchase for $55, allows you to choose whether you will come in the morning, afternoon, or evening. Overall, a visit to the Freedom Tower is necessary!</p>
      <h1>Statue of Liberty</h1>
      <figure >
          <img id="statue" class="image" src="images/statue.jpg" alt="Statue of Liberty" title="Statue of Liberty"
          onmouseover="change('statue','images/statue2.jpg'); changeCap('statueCap','Statue of Liberty 2')"
          onmouseout ="change('statue','images/statue.jpg'); changeCap('statueCap','Statue of Liberty 1')">
          <figcaption id="statueCap">Statue of Liberty 1</figcaption>
      </figure>
      <p>The statue of liberty was gifted to the United States by the French during World War II. It is located on Liberty Island, and is opened every day except Thanksgiving and Christmas. It is a part of America's history, and is a great landmark to visit! <br><br><br><br><br><br><br> </p>
      <h1>Ellis Island</h1>
      <figure >
          <img id="ellis" class="image" src="images/ellisIsland.jpg" alt="Ellis Island" title="Ellis Island"
          onmouseover="change('ellis','images/ellis2.jpg'); changeCap('ellisCap','Ellis Island 2')"
          onmouseout ="change('ellis','images/ellisIsland.jpg'); changeCap('ellisCap','Ellis Island 1')">
          <figcaption id="ellisCap">Ellis Island 1</figcaption>
      </figure>
      <p>Ellis Island is a piece of American history. It opened in 1892 as an immigration station, and was open for 60 years unril it closed in 1954. Now, it is open for tours. In order to visit, you have to take a specific ferry to the island. Once arriving, you can walk around the island at your own pace, and you can leave when you want to, as ferries depart every 20 minutes.</p>
    </div>

    <footer>
      <a href= "https://validator.w3.org/nu/?doc=http%3A%2F%2Fserenity.ist.rit.edu%2F%7Esdg3149%2F240%2FmidtermProject%2Fsightseeing.html"  target="_blank"><img class="icon" src="images/w3cHTML.png" alt="HTML Validator"></a>
      <a href="https://validator.w3.org/nu/?doc=http%3A%2F%2Fserenity.ist.rit.edu%2F%7Esdg3149%2F240%2FmidtermProject%2Fcss%2Fstyle.css"  target="_blank"><img class="icon" src="images/w3cCSS.png" alt="CSS Validator"></a>
      <?php
        echo "<br>";
        echo "Content last changed: ".date("F d Y H:i:s.", filemtime("sightseeing.php"));
      ?>
    </footer>

</body>
</html>
