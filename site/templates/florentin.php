<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Florentin Map</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <style>
        @font-face {
            font-family: miriam;
            font-weight: normal;
            src: url(/assets/fonts/MiriamLibre-Regular.ttf);
            font-weight: 400;
        }


        #map { height: 100vh; }

        .leaflet-popup-content {
            text-align: right;
        }

        #map-container {
            position: relative;
        }

        #loading-banner {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(255, 255, 255, 0.7);
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 9999; /* Ensure it's above the map */
            color: magenta;
            font-family: miriam;
            font-size: 40px;
        }
    </style>
</head>
<body>
    <div id="map-container">
        <div id="map"></div>
        <div id="loading-banner">...טוען מפה</div>
    </div>

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
        var southWest = L.latLng(newHeight*1.1, -0.1), // Define the southwest corner of the bounds
            northEast = L.latLng(-0.1, newWidth*1.1);  // Define the northeast corner of the bounds
        var bounds = L.latLngBounds(southWest, northEast); // Create a LatLngBounds object

        var map = L.map('map', { maxBounds: bounds, maxZoom: 13, minZoom: 11 }).setView([0.4, 0.5], 11);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        var imageUrl = '/assets/images/map_layer.png';

        L.imageOverlay(imageUrl, imageBounds).addTo(map).on('load', function() {
            // Hide the loading banner when the map tiles are fully loaded
            document.getElementById('loading-banner').style.display = 'none';
        });;

        // var marker_drag = L.marker([0, 0], { draggable: true }).addTo(map);

        // marker_drag.on('dragend', function (e) {
        //     // Get the new position of the marker
        //     var newPosition = e.target.getLatLng();
            
        //     // Update marker position (you can replace this with your own logic)
        //     console.log('New marker position:', newPosition);
        // });

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

        // mosdot

        var marker1 = L.marker([0.245, 0.56], { draggable: false, icon: loc_Icon }).addTo(map);
        marker1.bindPopup("<b>ת״א תרבות המחוגה</b><br>ת״א תרבות המחוגה 13<br><a href='https://g.co/kgs/nWZ64DN' target='_blank'>לפרטים נוספים</a>");

        var marker2 = L.marker([0.23929526379559607, 0.9182167053222657], { draggable: false, icon: loc_Icon }).addTo(map);
        marker2.bindPopup("<b>ת״א תרבות המחוגה</b><br>ת״א תרבות המחוגה 13<br><a href='https://g.co/kgs/nWZ64DN' target='_blank'>לפרטים נוספים</a>");

        var marker3 = L.marker([0.7334890281303115, 0.36306381225585943], { draggable: false, icon: loc_Icon }).addTo(map);
        marker3.bindPopup("<b>ת״א תרבות המחוגה</b><br>ת״א תרבות המחוגה 13<br><a href='https://g.co/kgs/nWZ64DN' target='_blank'>לפרטים נוספים</a>");

        var marker3 = L.marker([0.4293210862564886, 0.6885337829589844], { draggable: false, icon: loc_Icon }).addTo(map);
        marker3.bindPopup("<b>ת״א תרבות המחוגה</b><br>ת״א תרבות המחוגה 13<br><a href='https://g.co/kgs/nWZ64DN' target='_blank'>לפרטים נוספים</a>");

        var marker4 = L.marker([0.4293210862564886, 0.6885337829589844], { draggable: false, icon: loc_Icon }).addTo(map);
        marker4.bindPopup("<b>ת״א תרבות המחוגה</b><br>ת״א תרבות המחוגה 13<br><a href='https://g.co/kgs/nWZ64DN' target='_blank'>לפרטים נוספים</a>");

        var marker5 = L.marker([0.4257162976927995, 0.09544372558593751], { draggable: false, icon: loc_Icon }).addTo(map);
        marker5.bindPopup("<b>ת״א תרבות המחוגה</b><br>ת״א תרבות המחוגה 13<br><a href='https://g.co/kgs/nWZ64DN' target='_blank'>לפרטים נוספים</a>");

        var marker6 = L.marker([0.19723853255403007, 0.4447746276855469], { draggable: false, icon: loc_Icon }).addTo(map);
        marker6.bindPopup("<b>ת״א תרבות המחוגה</b><br>ת״א תרבות המחוגה 13<br><a href='https://g.co/kgs/nWZ64DN' target='_blank'>לפרטים נוספים</a>");

        var marker7 = L.marker([0.2298539672002563, 0.718231201171875], { draggable: false, icon: loc_Icon }).addTo(map);
        marker7.bindPopup("<b>ת״א תרבות המחוגה</b><br>ת״א תרבות המחוגה 13<br><a href='https://g.co/kgs/nWZ64DN' target='_blank'>לפרטים נוספים</a>");

        var marker8 = L.marker([0.559778844641921, 0.5767822265625001], { draggable: false, icon: loc_Icon }).addTo(map);
        marker8.bindPopup("<b>ת״א תרבות המחוגה</b><br>ת״א תרבות המחוגה 13<br><a href='https://g.co/kgs/nWZ64DN' target='_blank'>לפרטים נוספים</a>");

        var marker9 = L.marker([0.035533902751408324, 0.5328369140625001], { draggable: false, icon: loc_Icon }).addTo(map);
        marker9.bindPopup("<b>ת״א תרבות המחוגה</b><br>ת״א תרבות המחוגה 13<br><a href='https://g.co/kgs/nWZ64DN' target='_blank'>לפרטים נוספים</a>");

        var marker10 = L.marker([0.03587722543864959, 0.5549812316894532], { draggable: false, icon: loc_Icon }).addTo(map);
        marker10.bindPopup("<b>ת״א תרבות המחוגה</b><br>ת״א תרבות המחוגה 13<br><a href='https://g.co/kgs/nWZ64DN' target='_blank'>לפרטים נוספים</a>");

        var marker11 = L.marker([0.4118120975745597, 0.08068084716796876], { draggable: false, icon: loc_Icon }).addTo(map);
        marker11.bindPopup("<b>ת״א תרבות המחוגה</b><br>ת״א תרבות המחוגה 13<br><a href='https://g.co/kgs/nWZ64DN' target='_blank'>לפרטים נוספים</a>");

        // gallerys

        var marker12 = L.marker([0.04274367889655066, 0.49507141113281256], { draggable: false, icon: loc_Icon }).addTo(map);
        marker12.bindPopup("<b>ת״א תרבות המחוגה</b><br>ת״א תרבות המחוגה 13<br><a href='https://g.co/kgs/nWZ64DN' target='_blank'>לפרטים נוספים</a>");

        var marker13 = L.marker([0.4159318631378013, 0.111236572265625], { draggable: false, icon: loc_Icon }).addTo(map);
        marker13.bindPopup("<b>ת״א תרבות המחוגה</b><br>ת״א תרבות המחוגה 13<br><a href='https://g.co/kgs/nWZ64DN' target='_blank'>לפרטים נוספים</a>");

        var marker14 = L.marker([0.18848385193508965, 0.2956008911132813], { draggable: false, icon: loc_Icon }).addTo(map);
        marker14.bindPopup("<b>ת״א תרבות המחוגה</b><br>ת״א תרבות המחוגה 13<br><a href='https://g.co/kgs/nWZ64DN' target='_blank'>לפרטים נוספים</a>");

        var marker15 = L.marker([0.2813518661050577, 0.6157493591308595], { draggable: false, icon: loc_Icon }).addTo(map);
        marker15.bindPopup("<b>ת״א תרבות המחוגה</b><br>ת״א תרבות המחוגה 13<br><a href='https://g.co/kgs/nWZ64DN' target='_blank'>לפרטים נוספים</a>");

        var marker16 = L.marker([0.41112546977311254, 0.7295608520507814], { draggable: false, icon: loc_Icon }).addTo(map);
        marker16.bindPopup("<b>ת״א תרבות המחוגה</b><br>ת״א תרבות המחוגה 13<br><a href='https://g.co/kgs/nWZ64DN' target='_blank'>לפרטים נוספים</a>");

        var marker17 = L.marker([0.4389338474125907, 0.9760665893554689], { draggable: false, icon: loc_Icon }).addTo(map);
        marker17.bindPopup("<b>ת״א תרבות המחוגה</b><br>ת״א תרבות המחוגה 13<br><a href='https://g.co/kgs/nWZ64DN' target='_blank'>לפרטים נוספים</a>");

        var marker18 = L.marker([0.5678465387258476, 0.3860664367675782], { draggable: false, icon: loc_Icon }).addTo(map);
        marker18.bindPopup("<b>ת״א תרבות המחוגה</b><br>ת״א תרבות המחוגה 13<br><a href='https://g.co/kgs/nWZ64DN' target='_blank'>לפרטים נוספים</a>");

        var marker19 = L.marker([0.6722105303733651, 0.28770446777343756], { draggable: false, icon: loc_Icon }).addTo(map);
        marker19.bindPopup("<b>ת״א תרבות המחוגה</b><br>ת״א תרבות המחוגה 13<br><a href='https://g.co/kgs/nWZ64DN' target='_blank'>לפרטים נוספים</a>");

        var marker20 = L.marker([0.5501662584902806, 0.9755516052246095], { draggable: false, icon: loc_Icon }).addTo(map);
        marker20.bindPopup("<b>ת״א תרבות המחוגה</b><br>ת״א תרבות המחוגה 13<br><a href='https://g.co/kgs/nWZ64DN' target='_blank'>לפרטים נוספים</a>");

        var marker21 = L.marker([0.7202721658078372, 0.14694213867187503], { draggable: false, icon: loc_Icon }).addTo(map);
        marker21.bindPopup("<b>ת״א תרבות המחוגה</b><br>ת״א תרבות המחוגה 13<br><a href='https://g.co/kgs/nWZ64DN' target='_blank'>לפרטים נוספים</a>");

        var marker22 = L.marker([0.18041580903218687, 0.30607223510742193], { draggable: false, icon: loc_Icon }).addTo(map);
        marker22.bindPopup("<b>ת״א תרבות המחוגה</b><br>ת״א תרבות המחוגה 13<br><a href='https://g.co/kgs/nWZ64DN' target='_blank'>לפרטים נוספים</a>");

        // books etc.

        var marker23 = L.marker([0.7247350067573822, 0.12994766235351565], { draggable: false, icon: loc_Icon }).addTo(map);
        marker23.bindPopup("<b>ת״א תרבות המחוגה</b><br>ת״א תרבות המחוגה 13<br><a href='https://g.co/kgs/nWZ64DN' target='_blank'>לפרטים נוספים</a>");

        var marker24 = L.marker([0.42657458083754096, 0.07192611694335939], { draggable: false, icon: loc_Icon }).addTo(map);
        marker24.bindPopup("<b>ת״א תרבות המחוגה</b><br>ת״א תרבות המחוגה 13<br><a href='https://g.co/kgs/nWZ64DN' target='_blank'>לפרטים נוספים</a>");

        var marker25 = L.marker([0.48442263431717963, 0.07278442382812501], { draggable: false, icon: loc_Icon }).addTo(map);
        marker25.bindPopup("<b>ת״א תרבות המחוגה</b><br>ת״א תרבות המחוגה 13<br><a href='https://g.co/kgs/nWZ64DN' target='_blank'>לפרטים נוספים</a>");

        var marker26 = L.marker([0.42485801445251414, 0.9659385681152345], { draggable: false, icon: loc_Icon }).addTo(map);
        marker26.bindPopup("<b>ת״א תרבות המחוגה</b><br>ת״א תרבות המחוגה 13<br><a href='https://g.co/kgs/nWZ64DN' target='_blank'>לפרטים נוספים</a>");

        var marker27 = L.marker([0.2274507270601868, 0.8215713500976564], { draggable: false, icon: loc_Icon }).addTo(map);
        marker27.bindPopup("<b>ת״א תרבות המחוגה</b><br>ת״א תרבות המחוגה 13<br><a href='https://g.co/kgs/nWZ64DN' target='_blank'>לפרטים נוספים</a>");

        var marker28 = L.marker([0.4528379978674742, 0.07364273071289062], { draggable: false, icon: loc_Icon }).addTo(map);
        marker28.bindPopup("<b>ת״א תרבות המחוגה</b><br>ת״א תרבות המחוגה 13<br><a href='https://g.co/kgs/nWZ64DN' target='_blank'>לפרטים נוספים</a>");

        // craftsmen

        var marker29 = L.marker([0.160674838233185, 0.4664039611816406], { draggable: false, icon: loc_Icon }).addTo(map);
        marker29.bindPopup("<b>ת״א תרבות המחוגה</b><br>ת״א תרבות המחוגה 13<br><a href='https://g.co/kgs/nWZ64DN' target='_blank'>לפרטים נוספים</a>");

        var marker30 = L.marker([0.7539150110568688, 0.03072738647460938], { draggable: false, icon: loc_Icon }).addTo(map);
        marker30.bindPopup("<b>ת״א תרבות המחוגה</b><br>ת״א תרבות המחוגה 13<br><a href='https://g.co/kgs/nWZ64DN' target='_blank'>לפרטים נוספים</a>");

        var marker31 = L.marker([0.21337459834129727, 0.7137680053710939], { draggable: false, icon: loc_Icon }).addTo(map);
        marker31.bindPopup("<b>ת״א תרבות המחוגה</b><br>ת״א תרבות המחוגה 13<br><a href='https://g.co/kgs/nWZ64DN' target='_blank'>לפרטים נוספים</a>");

        var marker32 = L.marker([0.38039881668896186, 0.9243965148925782], { draggable: false, icon: loc_Icon }).addTo(map);
        marker32.bindPopup("<b>ת״א תרבות המחוגה</b><br>ת״א תרבות המחוגה 13<br><a href='https://g.co/kgs/nWZ64DN' target='_blank'>לפרטים נוספים</a>");

        var marker33 = L.marker([0.6857708268798296, 0.04137039184570313], { draggable: false, icon: loc_Icon }).addTo(map);
        marker33.bindPopup("<b>ת״א תרבות המחוגה</b><br>ת״א תרבות המחוגה 13<br><a href='https://g.co/kgs/nWZ64DN' target='_blank'>לפרטים נוספים</a>");

        var marker34 = L.marker([0.17234776255188525, 0.4597091674804688], { draggable: false, icon: loc_Icon }).addTo(map);
        marker34.bindPopup("<b>ת״א תרבות המחוגה</b><br>ת״א תרבות המחוגה 13<br><a href='https://g.co/kgs/nWZ64DN' target='_blank'>לפרטים נוספים</a>");

        var marker35 = L.marker([0.26864907055364395, 0.9777832031250001], { draggable: false, icon: loc_Icon }).addTo(map);
        marker35.bindPopup("<b>ת״א תרבות המחוגה</b><br>ת״א תרבות המחוגה 13<br><a href='https://g.co/kgs/nWZ64DN' target='_blank'>לפרטים נוספים</a>");
        
        // public spaces

        var marker36 = L.marker([0.6600233962998857, 0.6772041320800782], { draggable: false, icon: loc_Icon }).addTo(map);
        marker36.bindPopup("<b>ת״א תרבות המחוגה</b><br>ת״א תרבות המחוגה 13<br><a href='https://g.co/kgs/nWZ64DN' target='_blank'>לפרטים נוספים</a>");

        var marker37 = L.marker([0.34829878865961733, 0.7831192016601564], { draggable: false, icon: loc_Icon }).addTo(map);
        marker37.bindPopup("<b>ת״א תרבות המחוגה</b><br>ת״א תרבות המחוגה 13<br><a href='https://g.co/kgs/nWZ64DN' target='_blank'>לפרטים נוספים</a>");

        var marker38 = L.marker([0.1567266417095099, 0.6377220153808595], { draggable: false, icon: loc_Icon }).addTo(map);
        marker38.bindPopup("<b>ת״א תרבות המחוגה</b><br>ת״א תרבות המחוגה 13<br><a href='https://g.co/kgs/nWZ64DN' target='_blank'>לפרטים נוספים</a>");

        var marker39 = L.marker([0.035533902751408324, 0.6171226501464845], { draggable: false, icon: loc_Icon }).addTo(map);
        marker39.bindPopup("<b>ת״א תרבות המחוגה</b><br>ת״א תרבות המחוגה 13<br><a href='https://g.co/kgs/nWZ64DN' target='_blank'>לפרטים נוספים</a>");

        var marker40 = L.marker([0.5688764563124865, 0.3483009338378907], { draggable: false, icon: loc_Icon }).addTo(map);
        marker40.bindPopup("<b>ת״א תרבות המחוגה</b><br>ת״א תרבות המחוגה 13<br><a href='https://g.co/kgs/nWZ64DN' target='_blank'>לפרטים נוספים</a>");

        var marker41 = L.marker([0.31207884018087556, 0.2509689331054688], { draggable: false, icon: loc_Icon }).addTo(map);
        marker41.bindPopup("<b>ת״א תרבות המחוגה</b><br>ת״א תרבות המחוגה 13<br><a href='https://g.co/kgs/nWZ64DN' target='_blank'>לפרטים נוספים</a>");

        var marker42 = L.marker([0.15020353278795034, 0.44906616210937506], { draggable: false, icon: loc_Icon }).addTo(map);
        marker42.bindPopup("<b>ת״א תרבות המחוגה</b><br>ת״א תרבות המחוגה 13<br><a href='https://g.co/kgs/nWZ64DN' target='_blank'>לפרטים נוספים</a>");

        var marker43 = L.marker([0.45524118168573435, 0.04531860351562501], { draggable: false, icon: loc_Icon }).addTo(map);
        marker43.bindPopup("<b>ת״א תרבות המחוגה</b><br>ת״א תרבות המחוגה 13<br><a href='https://g.co/kgs/nWZ64DN' target='_blank'>לפרטים נוספים</a>");
        
        // street art
        
        var marker44 = L.marker([0.4420236608875156, 0.759258270263672], { draggable: false, icon: loc_Icon }).addTo(map);
        marker44.bindPopup("<b>ת״א תרבות המחוגה</b><br>ת״א תרבות המחוגה 13<br><a href='https://g.co/kgs/nWZ64DN' target='_blank'>לפרטים נוספים</a>");
        
        var marker45 = L.marker([0.7554598294299602, 0.6348037719726564], { draggable: false, icon: loc_Icon }).addTo(map);
        marker45.bindPopup("<b>ת״א תרבות המחוגה</b><br>ת״א תרבות המחוגה 13<br><a href='https://g.co/kgs/nWZ64DN' target='_blank'>לפרטים נוספים</a>");
        
        var marker46 = L.marker([0.345380598720786, 0.8078384399414064], { draggable: false, icon: loc_Icon }).addTo(map);
        marker46.bindPopup("<b>ת״א תרבות המחוגה</b><br>ת״א תרבות המחוגה 13<br><a href='https://g.co/kgs/nWZ64DN' target='_blank'>לפרטים נוספים</a>");
        
        var marker47 = L.marker([0.13904557884994104, 0.2947425842285157], { draggable: false, icon: loc_Icon }).addTo(map);
        marker47.bindPopup("<b>ת״א תרבות המחוגה</b><br>ת״א תרבות המחוגה 13<br><a href='https://g.co/kgs/nWZ64DN' target='_blank'>לפרטים נוספים</a>");
        
        var marker48 = L.marker([0.7437878548664386, 0.05304336547851563], { draggable: false, icon: loc_Icon }).addTo(map);
        marker48.bindPopup("<b>ת״א תרבות המחוגה</b><br>ת״א תרבות המחוגה 13<br><a href='https://g.co/kgs/nWZ64DN' target='_blank'>לפרטים נוספים</a>");
        
        var marker49 = L.marker([0.21783776254055062, 0.6868171691894532], { draggable: false, icon: loc_Icon }).addTo(map);
        marker49.bindPopup("<b>ת״א תרבות המחוגה</b><br>ת״א תרבות המחוגה 13<br><a href='https://g.co/kgs/nWZ64DN' target='_blank'>לפרטים נוספים</a>");
        
        var marker50 = L.marker([0.5735110831727824, 0.16222000122070315], { draggable: false, icon: loc_Icon }).addTo(map);
        marker50.bindPopup("<b>ת״א תרבות המחוגה</b><br>ת״א תרבות המחוגה 13<br><a href='https://g.co/kgs/nWZ64DN' target='_blank'>לפרטים נוספים</a>");
        
        var marker51 = L.marker([0.3258115375303623, 0.5755805969238282], { draggable: false, icon: loc_Icon }).addTo(map);
        marker51.bindPopup("<b>ת״א תרבות המחוגה</b><br>ת״א תרבות המחוגה 13<br><a href='https://g.co/kgs/nWZ64DN' target='_blank'>לפרטים נוספים</a>");
        
        var marker52 = L.marker([0.2842700739630832, 0.5851936340332032], { draggable: false, icon: loc_Icon }).addTo(map);
        marker52.bindPopup("<b>ת״א תרבות המחוגה</b><br>ת״א תרבות המחוגה 13<br><a href='https://g.co/kgs/nWZ64DN' target='_blank'>לפרטים נוספים</a>");
        
        var marker53 = L.marker([0.4157602062821278, 0.6517982482910157], { draggable: false, icon: loc_Icon }).addTo(map);
        marker53.bindPopup("<b>ת״א תרבות המחוגה</b><br>ת״א תרבות המחוגה 13<br><a href='https://g.co/kgs/nWZ64DN' target='_blank'>לפרטים נוספים</a>");
        
        var marker54 = L.marker([0.36134480311281647, 0.9757232666015626], { draggable: false, icon: loc_Icon }).addTo(map);
        marker54.bindPopup("<b>ת״א תרבות המחוגה</b><br>ת״א תרבות המחוגה 13<br><a href='https://g.co/kgs/nWZ64DN' target='_blank'>לפרטים נוספים</a>");

    </script>
</body>
</html>