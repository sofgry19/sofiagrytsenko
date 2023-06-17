const xhr = new XMLHttpRequest(),
      url = "data.json";
      let output = "";
      let detailOutput = "";


if(document.getElementById("back")){
          document.getElementById("back").addEventListener("click", function() {
                  window.location.href = "home.html"
              });
      }

  xhr.onreadystatechange = function() {
    if ( xhr.readyState === 4 && xhr.status === 200 ) {
      const menuItems = JSON.parse( xhr.responseText );
      // menuItems now holds the objects parsed from the JSON file. You will need to iterate over this and build a template html
      for (let pose of menuItems) {
          output += templateTron(pose);
          localStorage.setItem(`pose${pose.objID}`, JSON.stringify(pose));
      }
     if(document.getElementById('listMenu')){
       document.getElementById('listMenu').innerHTML = output;
     }
    }
    if(  document.getElementById('card1')){
      document.getElementById('card1').addEventListener("click", function() {
      //window.location.href = "details.html";
      let pose1_ = JSON.parse(localStorage.getItem('pose1'));
      detailOutput = detailTemplate(pose1_);
      if(document.getElementById("card")){
          document.getElementById("card").innerHTML = detailOutput;
    }
    if(localStorage.getItem('pose1')){
        let pose1 = JSON.parse(localStorage.getItem('pose1'));
        detailOutput = detailTemplate(pose1);
        document.getElementById("card").innerHTML = detailOutput;
    }

    });
    }

  };
  xhr.open( "GET", url, true );
  xhr.send();

  // Good place to put that function that will generate the template html
  function templateTron(pose) {
    return `
      <div id="card${pose.objID}">
      <div id="card">
        <img src="images/${pose.image}.jpg">
        <h1>${pose.name}</h1>
      </div>
      </div>
      `
  }

  function detailTemplate(pose) {
    return `
      <div id="card">
        <img src="images/${pose.image}.jpg">
        <h1>${pose.name}</h1>
        <h2> Light: </h2> <p>${pose.light} </p>
        <h2> Water: </h2> <p>${pose.water} </p>
        <p>${pose.desc}</p>
      </div>
      `
  }
