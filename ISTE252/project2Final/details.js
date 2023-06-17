//if statement that controls the back button
if(document.getElementById("back")){
    document.getElementById("back").addEventListener("click", function() {
        window.location.href = "home.html"
    });
}

//template that makes the details of the card show up in html
function detailTemplate(plant) {
    return `
    <div id="card">
    <img srcset="images/${plant.image}HALF.jpg,
                images/${plant.image}.jpg 1.5x"
         src="images/${plant.image}.jpg" alt="Picture of Plant">
        <h1>${plant.name}</h1>
        <h2> Light: </h2> <p>${plant.light} </p>
        <h2> Water: </h2> <p>${plant.water} </p>
        <p>${plant.desc}</p>
    </div>
    `
}
    //get local state
    let plant = JSON.parse(localStorage.getItem(`card`));

    //show details on page
    let pageDetails = detailTemplate(plant);
    document.getElementById('details').innerHTML = pageDetails;
