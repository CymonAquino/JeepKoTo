// Initialize the map
var map = L.map('map').setView([15.1788, 120.4109], 11);
mapLink = "<a href='http://openstreetmap.org'>OpenStreetMap</a>";
L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', { 
    attribution: 'Leaflet &copy; ' + mapLink + ', contribution', 
    maxZoom: 18 
}).addTo(map);

// Define the bus icons
var busIcon = L.icon({
    iconUrl: '/images/e-bus.png', // Path to your bus icon
    iconSize: [70, 70]
});

var parkedIcon = L.icon({
    iconUrl: '/images/e-bus.png', // Path to your parked bus icon
    iconSize: [70, 70]
});

// Create markers for each vehicle
var markers = [
    L.marker([15.1788, 120.4109], { icon: busIcon }).addTo(map), // Moving vehicle
    L.marker([15.008119837108367, 120.71172034020985], { icon: parkedIcon }).addTo(map), // Parked vehicle
    L.marker([14.94959727111129, 120.75946246906528], { icon: parkedIcon }).addTo(map), // Parked vehicle
];

// Define custom route waypoints
var customRouteWaypoints = [
    L.latLng(15.179204785026167, 120.58915919473841), // Start point
    L.latLng(15.050415202516355, 120.6978493722284),  // Another point
    L.latLng(15.008870813352427, 120.71268894884236),  // Another point
    L.latLng(14.94959727111129, 120.75946246906528),  // Endpoint
    
];

// Create the route using the custom waypoints
var control = L.Routing.control({
    waypoints: customRouteWaypoints,
    createMarker: function() { return null; }, // Hide the default waypoint markers
    routeWhileDragging: false,
    addWaypoints: false,
    draggableWaypoints: false,
    fitSelectedRoutes: true,
    showAlternatives: false
}).on('routesfound', function(e) {
    var routes = e.routes[0].coordinates;
    var reversedRoutes = routes.slice().reverse(); // Create a reversed route
    var allRoutes = routes.concat(reversedRoutes); // Concatenate original and reversed routes
    var totalSteps = allRoutes.length;

    function animateMarker(index) {
        if (index >= totalSteps) {
            index = 0; // Loop back to start if at the end
        }
        var coord = allRoutes[index];
        markers[0].setLatLng([coord.lat, coord.lng]);
        setTimeout(function() {
            animateMarker(index + 1);
        }, 100); // Adjust timing as needed
    }

    animateMarker(0);
}).addTo(map);
