//Create an array of images
var imageArray = ["images/newyork.jpg","images/bbg1.jpg", "images/bbp1.jpg", "images/catacombs1.jpg", "images/cp3.jpg", "images/csp1.jpg", "images/ellisIsland.jpg", "images/esb.jpg", "images/freedomTower.jpg", "images/moma1.jpg", "images/statue.jpg", "images/timessquare1.jpg", "images/vessel.JPEG"];

//Save total size of array to variable arraySize
var arraySize = imageArray.length;

//Set wait time between slides in milliseconds
setInterval(runit, 2000);

var x = 1; //Used to count up to arraySize

//Function runit play slideshow when called
function runit() {
    //Set image to next picture in image array
    document.getElementById('slideshow').src = imageArray[x];

    //Increase count by 1
    x++;

    //If count has reached the last index of imageArray than set count back to starting index.
    if (x === arraySize) {
        x = 0;
    }
}
