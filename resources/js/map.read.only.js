//Set up some of our variables.
var map; //Will contain map object.
var marker = false; ////Has the user plotted their location marker? 

//Function called to initialize / create the map.
//This is called when the page has loaded.
function initMap() {
    var point = new google.maps.LatLng(document.getElementById('lat').value, document.getElementById('lng').value);

    //Map options.
    var options = {
        center: point, //Set center.
        zoom: 7 //The zoom value.
    };

    //Create the map object.
    map = new google.maps.Map(document.getElementById('map'), options);

    //Create the marker.
    marker = new google.maps.Marker({
        position: point,
        map: map,
        draggable: false
    });
}

//Load the map when the page has finished loading.
google.maps.event.addDomListener(window, 'load', initMap);