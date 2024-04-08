<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Florentin Map</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <style>
        #map { height: 100vh; }

        .leaflet-popup-content {
            text-align: right;
        }
    </style>
</head>
<body>
    <div id="map"></div>

    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
    <script>
        var imageWidth = 8627; // Width of the image in pixels
        var imageHeight = 6730; // Height of the image in pixels
        var aspectRatio = imageWidth / imageHeight;

        // Calculate the new width and height for the image overlay
        var newWidth = 1; // Define the width of the image on the map (adjust as needed)
        var newHeight = newWidth / aspectRatio;

        // Define the image bounds based on the calculated width and height
        var imageBounds = [
            [0, 0],                    // Top left corner of the image
            [newHeight, newWidth]      // Bottom right corner of the image (height, width)
        ];

        // Define the bounds of the restricted area
        var southWest = L.latLng(newHeight, 0), // Define the southwest corner of the bounds
            northEast = L.latLng(0, newWidth);  // Define the northeast corner of the bounds
        var bounds = L.latLngBounds(southWest, northEast); // Create a LatLngBounds object

        var map = L.map('map', { maxBounds: bounds, maxZoom: 13, minZoom: 11 }).setView([0.4, 0.5], 11);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        var imageUrl = '/assets/images/map_layer.png';

        L.imageOverlay(imageUrl, imageBounds).addTo(map);

        var marker_drag = L.marker([0, 0], { draggable: true }).addTo(map);

        marker_drag.on('dragend', function (e) {
            // Get the new position of the marker
            var newPosition = e.target.getLatLng();
            
            // Update marker position (you can replace this with your own logic)
            console.log('New marker position:', newPosition);
        });

        var loc_Icon = L.icon({
            iconUrl: 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.7.1/images/marker-icon.png',
            iconSize: [25, 41],
            iconAnchor: [12, 41],
            popupAnchor: [1, -34],
            shadowUrl: 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.7.1/images/marker-shadow.png',
            shadowSize: [41, 41],
            shadowAnchor: [12, 41],
            // iconUrl: 'path/to/red-marker-icon.png' // Replace with your red marker icon
        });

        var marker1 = L.marker([0.245, 0.56], { draggable: false, icon: loc_Icon }).addTo(map);
        marker1.bindPopup("<b>ת״א תרבות המחוגה</b><br><a href='https://g.co/kgs/nWZ64DN' target='_blank'>לפרטים</a>");

        var marker2 = L.marker([0.23929526379559607, 0.9182167053222657], { draggable: false, icon: loc_Icon }).addTo(map);
        marker2.bindPopup("<b>ת״א תרבות המחוגה</b><br><a href='https://g.co/kgs/nWZ64DN' target='_blank'>לפרטים</a>");

        var marker3 = L.marker([0.7334890281303115, 0.36306381225585943], { draggable: false, icon: loc_Icon }).addTo(map);
        marker3.bindPopup("<b>ת״א תרבות המחוגה</b><br><a href='https://g.co/kgs/nWZ64DN' target='_blank'>לפרטים</a>");

        var marker3 = L.marker([0.4293210862564886, 0.6885337829589844], { draggable: false, icon: loc_Icon }).addTo(map);
        marker3.bindPopup("<b>ת״א תרבות המחוגה</b><br><a href='https://g.co/kgs/nWZ64DN' target='_blank'>לפרטים</a>");

        var marker4 = L.marker([0.4293210862564886, 0.6885337829589844], { draggable: false, icon: loc_Icon }).addTo(map);
        marker4.bindPopup("<b>ת״א תרבות המחוגה</b><br><a href='https://g.co/kgs/nWZ64DN' target='_blank'>לפרטים</a>");

        var marker5 = L.marker([0.4257162976927995, 0.09544372558593751], { draggable: false, icon: loc_Icon }).addTo(map);
        marker5.bindPopup("<b>ת״א תרבות המחוגה</b><br><a href='https://g.co/kgs/nWZ64DN' target='_blank'>לפרטים</a>");

        var marker6 = L.marker([0.19723853255403007, 0.4447746276855469], { draggable: false, icon: loc_Icon }).addTo(map);
        marker6.bindPopup("<b>ת״א תרבות המחוגה</b><br><a href='https://g.co/kgs/nWZ64DN' target='_blank'>לפרטים</a>");

        var marker7 = L.marker([0.2298539672002563, 0.718231201171875], { draggable: false, icon: loc_Icon }).addTo(map);
        marker7.bindPopup("<b>ת״א תרבות המחוגה</b><br><a href='https://g.co/kgs/nWZ64DN' target='_blank'>לפרטים</a>");

        var marker8 = L.marker([0.559778844641921, 0.5767822265625001], { draggable: false, icon: loc_Icon }).addTo(map);
        marker8.bindPopup("<b>ת״א תרבות המחוגה</b><br><a href='https://g.co/kgs/nWZ64DN' target='_blank'>לפרטים</a>");

        var marker9 = L.marker([0.035533902751408324, 0.5328369140625001], { draggable: false, icon: loc_Icon }).addTo(map);
        marker9.bindPopup("<b>ת״א תרבות המחוגה</b><br><a href='https://g.co/kgs/nWZ64DN' target='_blank'>לפרטים</a>");

        var marker10 = L.marker([0.03587722543864959, 0.5549812316894532], { draggable: false, icon: loc_Icon }).addTo(map);
        marker10.bindPopup("<b>ת״א תרבות המחוגה</b><br><a href='https://g.co/kgs/nWZ64DN' target='_blank'>לפרטים</a>");

        var marker11 = L.marker([0.4118120975745597, 0.08068084716796876], { draggable: false, icon: loc_Icon }).addTo(map);
        marker11.bindPopup("<b>ת״א תרבות המחוגה</b><br><a href='https://g.co/kgs/nWZ64DN' target='_blank'>לפרטים</a>");

        var marker12 = L.marker([0.04274367889655066, 0.49507141113281256], { draggable: false, icon: loc_Icon }).addTo(map);
        marker12.bindPopup("<b>ת״א תרבות המחוגה</b><br><a href='https://g.co/kgs/nWZ64DN' target='_blank'>לפרטים</a>");


    </script>
</body>
</html>