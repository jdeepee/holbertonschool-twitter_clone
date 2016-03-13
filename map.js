// Initialize the platform object:
    var platform = new H.service.Platform({
    'app_id': 'ZfeaAg8LKAgClhTPThp7',
    'app_code': 'Q1oquQpkGI2QvmyNuFfHMQ'
    });

// Obtain the default map types from the platform object
    var defaultLayers = platform.createDefaultLayers(); // Changed var to math map type defaultLayers

// Instantiate (and display) a map object:
    var map = new H.Map(
    document.getElementById('mapContainer'), // HTML map container element
    defaultLayers.normal.map, // Map type to use needs to be defaultLayers
    {
      zoom: 16, // Zoom 16 as per project requirements
      center: { lat: 37.792085, lng: -122.399368} // Geographic coordinates of the point on which to center the map
    });

// Add window resize listener to adjust the map dimensions.
    window.addEventListener('resize', function() {
    map.getViewPort().resize();
    });