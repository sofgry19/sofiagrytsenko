//request
const xhr = new XMLHttpRequest();
const url = "data.json";
let output = "";
let detailOutput = "";

// function to create the inidivual card divs
function template (pose) {
    return `
    <div id="card${pose.objID}">
        <div id="card">
        <img srcset="images/${pose.image}HALF.jpg 1.0x,
                    images/${pose.image}.jpg 1.5x"
             src="images/${pose.image}.jpg" alt="Picture of Plant">
            <h1>${pose.name}</h1>
        </div>
    </div>
    `
}
//function that sends json data of the item that was clicked to local storage
function onClick (menuItem) {
      localStorage.setItem(`card`, JSON.stringify(menuItem));
      window.location.href = "details.html";
}

//function that loads all of the json data into html
function loadMenu (data) {
    const menuItems = JSON.parse( data );
    //load data onto the screen
    let output = '';
    for (let menuItem of menuItems) {
        output += template(menuItem);
    }
    document.getElementById('listMenu').innerHTML = output;

    //set clickable divs
    for (let menuItem of menuItems) {
        document.getElementById(`card${menuItem.objID}`).addEventListener("click",()=>onClick(menuItem))
    }
}

//function for xml request
xhr.onreadystatechange = function() {
    if ( xhr.readyState === 4 && xhr.status === 200 ) {
        const menuItems = JSON.parse( xhr.responseText );
        loadMenu( xhr.responseText );
    }
}
xhr.open( "GET", url, true );
xhr.send();
