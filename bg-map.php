<!DOCTYPE html>
<html lang="de">

<head>
    <title>Web Site Title</title>
    <?php include 'headcode.php';?>
</head>

<body class="main">
    <?php include 'sup.php'; ?>
    <div id="googlemaps"></div>
    <div class="franse font-black">
        <div class="row">
            <div class="col-sm-6">
                <h1>bg-map </h1>
            </div>
            <div class="col-sm-6">
                <h1>De finibus bonorum et malorum</h1> Lorem ipsum dolor sit amet, consectetaur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                Duis saute irure dolor in reprehenderit.{{video}}
            </div>
        </div>
    </div>
    <div class="franse bg-blue shadowin">
        <div class="row">
            <div class="col-sm-6">
                <h1>De finibus bonorum et malorum</h1> Lorem ipsum dolor sit amet, consectetaur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                Duis saute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum Et harumd und lookum
                like Greek to me, dereud facilis est er expedit distinct. Nam liber te conscient to factor tum poen legum odioque civiuda.
            </div>
            <div class="col-sm-6">
            </div>
        </div>
    </div>
    <script src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>

    <script type="text/javascript">
        // The latitude and longitude of your business / place
        var position = [47.757231, 8.885276];

        function showGoogleMaps() {

            var latLng = new google.maps.LatLng(position[0], position[1]);

            var mapOptions = {
                zoom: 16, // initialize zoom level - the max value is 21
                streetViewControl: false, // hide the yellow Street View pegman
                scaleControl: true, // allow users to zoom the Google Map
                mapTypeId: google.maps.MapTypeId.ROADMAP,
                center: latLng
            };

            map = new google.maps.Map(document.getElementById('googlemaps'),
                mapOptions);

            // Show the default red marker at the location
            marker = new google.maps.Marker({
                position: latLng,
                map: map,
                draggable: false,
                animation: google.maps.Animation.DROP
            });
        }

        google.maps.event.addDomListener(window, 'load', showGoogleMaps);
    </script>

    <?php include 'footer.php';?>
    <?php include 'footercode.php';?>
</body>

</html>