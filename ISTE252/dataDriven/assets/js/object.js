const xhr = new XMLHttpRequest(),
      url = "data.json";
      let output = "";

  xhr.onreadystatechange = function() {
    if ( xhr.readyState === 4 && xhr.status === 200 ) {
      const menuItems = JSON.parse( xhr.responseText );
      // menuItems now holds the objects parsed from the JSON file. You will need to iterate over this and build a template html
      for (let pose of menuItems) {
          output += templateTron(pose);
      }
      document.getElementById('listMenu').innerHTML = output;
    }
  };
  xhr.open( "GET", url, true );
  xhr.send();

  // Good place to put that function that will generate the template html
  function templateTron(pose) {
      return `
      <div class="new">
        <h1>${pose.yogapose}</h1>
        <h2>${pose.sanskrit}</h2>
        <p>Level: ${pose.level}</p>
        <p>Duration: ${pose.duration}</p>
        <p>${pose.description}</p>
        <img src="assets/img/${pose.image}.png">
      </div>
      `
  }
