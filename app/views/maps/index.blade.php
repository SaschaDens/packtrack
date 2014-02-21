<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <style type="text/css">
        html { height: 100% }
        body { height: 100%; margin: 0; padding: 0 }
        #map-canvas { height: 100% }
    </style>
    <script type="text/javascript"
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBXpdZ1klzTuFAmTTHYclJe2n_hkaBOpbU&sensor=true">
    </script>
    <script type="text/javascript">
        function initialize() {
            var myLatlng = new google.maps.LatLng(51.1613582, 4.9635834);
            var mapOptions = {
                center: myLatlng,
                zoom: 16
            };

            var map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);

            var marker = new google.maps.Marker({
                position: myLatlng,
                map: map,
                title: 'Hello World!'
            });
        }
        google.maps.event.addDomListener(window, 'load', initialize);
    </script>
</head>
<body>
<div id="map-canvas"/>
</body>
</html>